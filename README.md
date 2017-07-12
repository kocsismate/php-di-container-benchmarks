# PHP DI Container Benchmarks

[![Software License][ico-license]](LICENSE.md)
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]
[![Gitter][ico-gitter]][link-gitter]

## Table of Contents

* [Introduction](#introduction)
* [Results](#results)
* [Install](#install)
* [Usage](#usage)
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

## Results

You can find the benchmark results [here](https://rawgit.com/kocsismate/php-di-container-benchmarks/master/var/benchmark.html).

## Install

You can simply download or clone this repository as well as install it via [Composer](https://getcomposer.org) by
running the command below:

```bash
$ composer require kocsismate/di-container-benchmarks:dev-master
```

## Usage

### Usage with Docker

__Please note that benchmarks executed in Docker For Mac and Docker for Windows may be unreliable.__

First of all, [Docker Compose](https://www.docker.com/products/docker-compose) along with at least Docker 17.06 CE
has to be installed on your machine.

Then copy the ".env.dist" file to ".env" and feel free to overwrite the values in it. Now, you can run

```bash
./benchmark.sh docker
```

on Unix-based systems, while Windows users should use

```bash
.\benchmark.bat docker
```

to execute the measurements.

The HTML output will be generated in the "var" directory.

### Usage without Docker

If you don't want to use Docker then you have to take several steps before running the benchmark:

- Install a web server and configure it to be able to serve "public/index.php"
- Install PHP 7.1  at least with OPcache enabled
- Install Composer
- Set the `BENCHMARK_URL` environment variable to the URL where "public/index.php" is available. For instance:

```bash
export BENCHMARK_URL=http://localhost/index.php
``` 

Now you can simply type the following in order to run the benchmark:

```bash
.\benchmark.sh host
```

If you don't want to specify the benchmark URL as an environment variable then you can also pass it as a parameter:

```bash
./benchmark.sh host http://localhost/index.php
```

Windows users can use the `benchmark.bat` instead.

### Usage from the browser

You can even run tests manually from your browser. When the benchmark's Docker containers are running, just visit
`localhost:8090`, otherwise you have to locate the `BENCHMARK_URL` URL (mentioned in the previous section). For further
information, refer the URL in question, it provides you with detailed instructions.

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
