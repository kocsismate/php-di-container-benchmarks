#!/usr/bin/env bash
set -e

export DOLLAR='$'

rm -f /etc/nginx/conf.d/*

envsubst < /code/build/container/nginx/nginx.conf > /etc/nginx/nginx.conf
envsubst < /code/build/container/nginx/site.conf > /etc/nginx/conf.d/20-site.conf

nginx
