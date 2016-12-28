# PHP DI Container Benchmarks

[![Software License][ico-license]](LICENSE.md)
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]
[![Gitter][ico-gitter]][link-gitter]

## Table of Contents

* [Introduction](#introduction)
* [Install](#install)
* [Usage](#usage)
* [Change Log](#change-log)
* [Contributing](#contributing)
* [Credits](#credits)
* [License](#license)

## Introduction

In 2014, a really interesting benchmark about DI Containers for PHP was published on
[Sitepoint](https://www.sitepoint.com/php-dependency-injection-container-performance-benchmarks/). Unfortunately,
the implementation of the tests turned out to be quite controversial, so the benchmark itself wasn't really useful.

I have been interested in the topic since then so I wanted to conduct a better benchmark than the last one was: I tried
to fix some of its flaws while still being heavily inspired by the good parts of it.

You can find the benchmark results here: [Results](https://rawgit.com/kocsismate/php-di-container-benchmarks/master/var/benchmark.html).

## Install

You can simply download this repository or install it via [Composer](https://getcomposer.org) by running the command
below:

```bash
$ composer require kocsismate/di-container-benchmarks
```

Furthermore, [Docker Compose](https://www.docker.com/products/docker-compose) has to be installed on your machine.

## Usage

Run `docker-compose up` in order to execute the tests. The html output will be generated in the "var" directory.

The same output can be seen [Here](https://rawgit.com/kocsismate/php-di-container-benchmarks/master/var/benchmark.html).

## Change Log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

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
