#!/bin/bash

echo "=> Deploy script by Tooit (runs on every instance). ====================="
echo
# Run something on every upgraded service instance.
# ...

# Replace default nginx settings.
supervisorctl stop nginx
cp /opt/ci/config/config.nginx.default /etc/nginx/sites-enabled/default
supervisorctl start nginx

echo
echo "/ End. =================================================================="
