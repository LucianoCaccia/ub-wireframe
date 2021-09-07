#!/bin/bash

##
# HeadBash (... BASH a lo cabeza...)
##

# Creates a new Merge Request in GitLab.
# @param  {String} $1 Merge Request source branch
# @param  {String} $2 Merge Request destination Branch
# @param  {String} $3 Merge Request Title
# @param  {String} $4 Merge Request Labels
#
gitlab_create_mr () {
  source_branch=$1
  target_branch=$2
  title=$3
  labels=$4

  # get the project data.
  response=$(curl -s --insecure \
    -X "GET" \
    -H "PRIVATE-TOKEN: $gitlab_api_token" \
    -H "Accept: application/json" \
    $gitlab_api_url_project_id)
  mr_title=$(echo $response | $CI_PROJECT_DIR/ci/jq -r '.name_with_namespace')

  # log the api output.
  echo "API Response >>>"
  echo $response | $CI_PROJECT_DIR/ci/jq .
  echo

  # check if mr already exists.
  response=$(curl -s --insecure \
    -X "GET" \
    -H "PRIVATE-TOKEN: $gitlab_api_token" \
    -H "Accept: application/json" \
    $gitlab_api_url_mr?state=opened)

  echo "API Response >>>"
  echo $response | $CI_PROJECT_DIR/ci/jq .
  echo

  mr_iid=$(echo $response | $CI_PROJECT_DIR/ci/jq  -c ".[] | select(.title | contains(\"$title\")) | .iid")

  if [ -z "$mr_iid" ] || [ "$mr_iid" == "null" ]; then
    # create the initial gitLab merge request.
    response=$(curl -s --insecure \
      -X "POST" \
      -H "PRIVATE-TOKEN: $gitlab_api_token" \
      -H "Accept: application/json" \
      --data-urlencode "id=$CI_PROJECT_ID" \
      --data-urlencode "source_branch=$source_branch" \
      --data-urlencode "target_branch=$target_branch" \
      --data-urlencode "title=$title" \
      --data-urlencode "labels=$labels" \
      $gitlab_api_url_mr)

    echo "API Response >>>"
    echo $response | $CI_PROJECT_DIR/ci/jq .
    echo

    # set the iid of the newly created mr.
    mr_id=$(echo $response | $CI_PROJECT_DIR/ci/jq -r '.id')
    mr_iid=$(echo $response | $CI_PROJECT_DIR/ci/jq -r '.iid')
  fi

  # builds the mr url
  mr_url=${gitlab_url}/$CI_PROJECT_PATH/merge_requests/$mr_iid
}

# Automatically accepts an existing Merge Request in GitLab.
# @param  {String} $1 Merge Request Id
#
gitlab_accept_mr () {
  mr_id=$1

  response=$(curl -s --insecure \
    -X "PUT" \
    -H "PRIVATE-TOKEN: $gitlab_api_token" \
    -H "Accept: application/json" \
    $gitlab_api_url_mr/$mr_id/merge)

  echo "API Response >>>"
  echo $response | $CI_PROJECT_DIR/ci/jq .
  echo
}

# Creates a new annotated tag in GitLab.
# @param  {String} $1 Tag source branch
# @param  {String} $2 Tag name
#
gitlab_create_tag () {
  source_branch=$1
  tag_name=$2

  response=$(curl -s --insecure \
    -X "POST" \
    -H "PRIVATE-TOKEN: $gitlab_api_token" \
    -H "Accept: application/json" \
    --data-urlencode "ref=$source_branch" \
    --data-urlencode "tag_name=$tag_name" \
    --data-urlencode "message=released $tag_name" \
    $gitlab_api_url_project_id/repository/tags)

  echo "API Response >>>"
  echo $response | $CI_PROJECT_DIR/ci/jq .
  echo
}

# Deletes a tag in GitLab.
# @param  {String} $1 Tag name
#
gitlab_delete_tag () {
  tag_name=$1

  response=$(curl -s --insecure \
    -X "DELETE" \
    -H "PRIVATE-TOKEN: $gitlab_api_token" \
    -H "Accept: application/json" \
    $gitlab_api_url_project_id/repository/tags/$tag_name)

  echo "API Response >>>"
  echo $response | $CI_PROJECT_DIR/ci/jq .
  echo
}

# Notifies a new Slack message with a link to a GitLab Merge Request page.
# @param  {String} $1 Slack Channel
# @param  {String} $2 Slack Username
# @param  {String} $3 Slack Message
#
slack_notify () {
  curl -s -X POST -H 'Content-type: application/json' \
  --data "{
    \"channel\": \"$1\",
    \"username\": \"$2\",
    \"text\": \"$3\",
    \"icon_emoji\": \":squirrel:\"
  }" \
  $slack_url
}

# Triggers a Rundeck Job using the API.
# @param  {String} $1 Job Options
# @param  {String} $2 Verbose level
# @param  {String} $3 Node/Resource filter
rundeck_api_job_run () {
  curl -s --insecure \
    -X "POST" \
    -H "X-Rundeck-Auth-Token: $rundeck_api_token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    --data "{
      \"argString\": \"$1\",
      \"loglevel\": \"$2\"
    }" \
    $rundeck_api_url_job_run
}

# Get the latest execution state.
#
rundeck_api_execution_state () {
  curl -s --insecure \
    -X "POST" \
    -H "X-Rundeck-Auth-Token: $rundeck_api_token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    "$rundeck_api_url/execution/$1/state"
}

# Get the job execution output.
#
rundeck_api_execution_output () {
  curl -s --insecure \
    -X "POST" \
    -H "X-Rundeck-Auth-Token: $rundeck_api_token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    "$rundeck_api_url/execution/$1/output"
}

# Run and follow a Rundeck job.
#
rundeck_run_job () {
  curl_checks="0"
  curl_checks_left=$(( $rundeck_curl_timeout / $rundeck_curl_interval ))

  # Trigger the deploy job capturing the execution id to follow it later.
  response=$(rundeck_api_job_run "$arg_string" "$log_level")

  # echo "API Response >>>"
  # echo "$response" | $CI_PROJECT_DIR/ci/jq .
  # echo

  execution_id=$(echo "$response" | $CI_PROJECT_DIR/ci/jq -r '.id')

  # Wait 1 second until next request to avoid {"error": "pending"} from Rundeck.
  sleep $rundeck_curl_interval

  # Get initial execution status.
  response=$(rundeck_api_execution_state $execution_id)

  # echo "API Response >>>"
  # echo "$response" | $CI_PROJECT_DIR/ci/jq .
  # echo

  target_nodes=$(echo "$response" | $CI_PROJECT_DIR/ci/jq -r '.targetNodes | join(" ")')
  execution_status=$(echo "$response" | $CI_PROJECT_DIR/ci/jq -r '.executionState')
  execution_completed=$(echo "$response" | $CI_PROJECT_DIR/ci/jq -r '.completed')

  printf "%8s %9s %9s %3s %8s %25s\n" "Exec. Id" "Completed" "Status" "Idx" "Idx Left" "Date"
  printf "%8s %9s %9s %3s %8s %25s\n" $execution_id $execution_completed $execution_status $curl_checks $curl_checks_left $(date '+%A %W %Y %X')

  # Check execution status until it has finished.
  until [ "$execution_completed" == "true" ]; do
    curl_checks=$(( $curl_checks + 1 ))

    # If timeout has expired, exit with error.
    curl_checks_left=$(( $curl_checks_left - 1))

    if [ "$curl_checks_left" == "0" ]; then
      echo "=> Execution timeout"
      exit 1
    fi

    # Healthcheck to see if the job is still running.
    printf "%8s %9s %9s %3s %8s %25s\n" "$execution_id" "$execution_completed" "$execution_status" "$curl_checks" "$curl_checks_left" "$(date '+%A %W %Y %X')"

    response=$(rundeck_api_execution_state "$execution_id")
    execution_status=$(echo "$response" | $CI_PROJECT_DIR/ci/jq -r '.executionState')
    execution_completed=$(echo "$response" | $CI_PROJECT_DIR/ci/jq -r '.completed')

    sleep $rundeck_curl_interval
  done

  # Job is done so we notify the latest status.
  printf "%8s %9s %9s %3s %8s %25s\n" "$execution_id" "$execution_completed" "$execution_status" "$curl_checks" "$curl_checks_left" "$(date '+%A %W %Y %X')"

  # Print Job's log from Rundeck.
  response=$(rundeck_api_execution_output "$execution_id")

  # echo "API Response >>>"
  # echo "$response" | $CI_PROJECT_DIR/ci/jq .
  # echo

  for node in $target_nodes; do
    # execution_output=$(echo "$response" | $CI_PROJECT_DIR/ci/jq -r '.entries[] | .log')
    execution_output=$(echo "$response" | $CI_PROJECT_DIR/ci/jq -r ".entries[] | select(.node | contains(\"$node\")) | .log")
    echo; echo "=> Job's log output for resource $node"; echo; echo "$execution_output"; echo
  done

  if [ "$execution_status" == "SUCCEEDED" ]; then
    echo ">>> Deploy SUCCEEDED."
  fi

  if [ "$execution_status" == "FAILED" ]; then
    echo "$response" | $CI_PROJECT_DIR/ci/jq .
    exit 1
  fi
}

