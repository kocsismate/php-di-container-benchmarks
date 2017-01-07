#!/usr/bin/env bash
set -e

export DOLLAR='$'
envsubst < $PROJECT_ROOT/build/container/php/custom-php.ini > /usr/local/etc/php/conf.d/zz-custom-php.ini

composer install --working-dir=$PROJECT_ROOT --no-interaction --no-suggest --classmap-authoritative

$PROJECT_ROOT/bin/benchmark
