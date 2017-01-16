# PHP DI Container Benchmarks

[![Software License][ico-license]](LICENSE.md)
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]
[![Gitter][ico-gitter]][link-gitter]

## Table of Contents

* [Introduction](#introduction)
* [Install](#install)
* [Usage](#usage)
* [Results](#results)
* [Contributing](#contributing)
* [Credits](#credits)
* [License](#license)

## Introduction

In 2014, a really interesting benchmark about DI Containers for PHP
[was published](https://www.sitepoint.com/php-dependency-injection-container-performance-benchmarks/) on Sitepoint.
Unfortunately, [the implementation](https://github.com/TomBZombie/php-dependency-injection-benchmarks) of the tests
turned out to be quite controversial, so the benchmark itself wasn't really insightful.

I have been interested in the topic since then so I wanted to conduct a better benchmark than the last one was: I tried
to fix some of its flaws while keeping its many good parts.

## Install

You can simply download or clone this repository as well as install it via [Composer](https://getcomposer.org) by
running the command below:

```bash
$ composer require kocsismate/di-container-benchmarks:dev-master
```

## Usage

### Usage with Docker

First of all, [Docker Compose](https://www.docker.com/products/docker-compose) has to be installed on your machine.

Then copy the ".env.dist" file to ".env" and feel free to overwrite the values in it. Now, you can run
`docker-compose up` in order to execute the tests. The html output will be generated in the "var" directory.

### Usage without Docker

If you don't want to use Docker then you have to take several steps before running the benchmark:

- Install PHP 7.1 at least with OPcache enabled
- Install Composer
- Install a web server which is capable of executing PHP scripts (for instance Apache, nginx) 
- Install dependencies by running `composer install`
- Define the `BENCHMARK_URL` environment variable where the "public/index.php" script is available. For instance:

```bash
export BENCHMARK_URL=http://localhost/index.php
``` 

Now you can simply type the following in order to run the benchmark:

```bash
./bin/benchmark
``` 

If you don't want to specify the benchmark URL as an environment variable then you can also pass it as a parameter:

```bash
./bin/benchmark http://localhost/index.php
```

## Results

You can find the benchmark results [here](https://rawgit.com/kocsismate/php-di-container-benchmarks/master/var/benchmark.html).

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Máté Kocsis][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see the [License File](LICENSE.md) for more information.

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg
[ico-code-quality]: https://img.shields.io/scrutinizer/g/kocsismate/php-di-container-benchmarks.svg
[ico-downloads]: https://img.shields.io/packagist/dt/kocsismate/di-container-benchmarks.svg
[ico-gitter]: https://badges.gitter.im/kocsismate/php-di-container-benchmarks.svg

[link-code-quality]: https://scrutinizer-ci.com/g/kocsismate/php-di-container-benchmarks
[link-downloads]: https://packagist.org/packages/kocsismate/php-di-container-benchmarks
[link-gitter]: https://gitter.im/kocsismate/php-di-container-benchmarks?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge
[link-author]: https://github.com/kocsismate
[link-contributors]: ../../contributors
