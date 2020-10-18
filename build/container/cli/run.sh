#!/bin/sh
set -e

cp /code/build/container/cli/custom-php.ini /usr/local/etc/php/conf.d/zz-custom-php.ini

/code/bin/benchmark
