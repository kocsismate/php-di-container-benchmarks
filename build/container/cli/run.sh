#!/usr/bin/env bash
set -e

composer install --working-dir=/code --no-interaction --no-suggest

/code/bin/benchmark
