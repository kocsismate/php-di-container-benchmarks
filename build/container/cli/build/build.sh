#!/usr/bin/env bash
set -e

apt-get update
apt-get -y --no-install-recommends install git

curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin \
    --filename=composer \
    --version=$COMPOSER_VERSION
