#!/bin/bash

echo "=> Deploy script by Tooit (runs on the instance 1). ====================="
echo

cd /var/www/
source /opt/ci/_current

# run the release script if found.
if [ -f /opt/ci/releases/$release.sh ]; then
  /opt/ci/releases/$release.sh
fi

echo
echo "/ End. =================================================================="
