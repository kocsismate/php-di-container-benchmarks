#!/usr/bin/env bash
set -e

composer install --no-suggest --no-interaction --working-dir=/code

/code/bin/benchmark build

composer dump-autoload --classmap-authoritative --no-interaction --working-dir=/code

/code/bin/benchmark
