<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Outputter;

use DiContainerBenchmarks\Benchmark\BenchmarkResult;
use DiContainerBenchmarks\Container\ContainerInterface;
use DiContainerBenchmarks\TestSuite\TestSuiteInterface;

class HtmlOutputter implements OutputterInterface
{
    /**
     * @var string
     */
    private $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * @param TestSuiteInterface[] $testSuites
     * @param ContainerInterface[] $containers
     */
    public function output(array $testSuites, array $containers, BenchmarkResult $benchmarkResult): void
    {
        $now = date("Y-m-d H:i:s");

        $html = <<<HERE
<html lang="en">
<head>
    <title>DI Container Benchmark Results</title>
    <meta name="description" content="DI Container Benchmark Results for PHP">
    <meta name="keywords" content="PHP, Dependency Injection Container benchmark">
    <meta charset="utf-8">
    <style>
        table,p {
            width: 750px;
        }
    </style>
</head>
<body>
    <article>
        <h1>DI Container Benchmark</h1>
        <table>
            <tr>
                <td style="width: 85px;"><b>Author:</b></td><td>Máté Kocsis (<a target="_blank" href="https://twitter.com/kocsismate90">@kocsismate90</a>)</td>
            </tr>
            <tr>
                <td><b>Repository:</b></td><td><a target="_blank" href="https://github.com/kocsismate/php-di-container-benchmarks">https://github.com/kocsismate/php-di-container-benchmarks</a></td>
            </tr>
            <tr>
                <td><b>Generated:</b></td><td>$now</td>
            </tr>
        </table>

        <hr>
        <section>
            <h2>Table of Contents</h2>

            <nav>
                <ul>
                    <li><a href="#introduction">Introduction</a></li>
                    <li><a href="#method">Method</a></li>
                    <li><a href="#results">Results</a></li>
                    <li><a href="#conclusion">Conclusion</a></li>
                </ul>
            </nav>
        </section>

        <hr>
        <section>
            <h2 id="introduction">Introduction</h2>
            <p>
                In 2014, a really interesting benchmark about DI Containers for PHP was
                <a target="_blank" href="https://www.sitepoint.com/php-dependency-injection-container-performance-benchmarks/">published</a>
                on Sitepoint. Unfortunately, <a target="_blank" href="https://github.com/TomBZombie/php-dependency-injection-benchmarks">the implementation</a>
                of the tests turned out to be quite controversial, so the benchmark itself wasn't very insightful.
            </p>

            <p>
                I have been interested in the topic since then so I wanted to finally conduct a better benchmark than
                the last one was: I tried to fix its flaws while keeping the good parts. So here is my take!
            </p>

            <p>
                The containers examined are listed below along with some of their attributes:
            </p>

            <table border="1" style="width: 750px;">
                <thead>
                    <tr>
                        <th style="width: 50px;">No.</th>
                        <th style="width: 175px;">Name</th>
                        <th style="width: 150px;">Compiled/Dynamic</th>
                        <th style="width: 125px;">Autowiring</th>
                        <th style="width: 250px;">Project URL</th>
                    </tr>
                </thead>
                <tbody>
HERE;
        foreach ($containers as $i => $container) {
            $number = ($i+1);
            $name = $container->getName();
            $url = $container->getUrl();
            $displayedUrl = str_replace(["http://", "https://"], "", $container->getUrl());
            $compiled = $container->isCompiled() ? "compiled" : "dynamic";
            $autowiring = $container->isAutowiringSupported() ? "supported" : "not supported";

            $html .= <<<HERE
                    <tr>
                        <th>$number</th>
                        <td><b>$name</b></td>
                        <td>$compiled</td>
                        <td>$autowiring</td>
                        <td>
                            <a target="_blank" href="$url" style="display:block;width:240px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
                                $displayedUrl
                            </a>
                        </td>
                    </tr>
HERE;
        }

        $html .= <<<HERE
                </tbody>
            </table>

            <p>
                I'll try to give a vague definition below for some of the aforementioned notions:
            </p>

            <p>
                A DI Container is <i>compiled</i> if it can be generated into a new class for production usage
                from where container entries then can be fetched. It means that your dependency graph is resolved
                during build time. This technique usually results in a very fast DIC, because there is no need for any
                Reflection or configuration when consuming the container. <i>Dynamic</i> containers
                however resolve your dependency graph Just-In-Time thus they are by design slower compared to the
                <i>compiled</i> ones.
            </p>

            <p>
                A DI Container supports <i>autowiring</i> if it can be configured to automatically inspect and
                resolve at least some non-trivial subgraphs of the full dependency graph - no matter if the resolution
                takes place build time or run time. Otherwise all dependencies have to be resolved manually which is
                probably done as configuration. In this case, a DI Container does not support <i>autowiring</i>.
            </p>

            <p>
                Essentially, dynamic containers usually need less attention during development than compiled ones,
                while containers which support autowiring usually need much less configuration than the ones without
                autowiring capabilities.
            </p>
        </section>

        <hr>
        <section>
            <h2 id="method">Method</h2>

            <p>
                Each container is given 4 tasks (test suites) where they have to create or fetch object
                graphs of different sizes. A test suite contains one or more test cases which define some settings
                for a test: how many times it has to be repeated (iteration) and if the container startup time
                should be counted in the time consumption.
            </p>
            <p>
                Before measuring each test, containers are warmed up so autoloading can take place and caches
                can be fed. Then all tests are performed 10 times, but only those results are used when
                calculating the average time consumption/peak memory usage of a container which are not more than
                the 120% of the smallest one.
            </p>
            <p>
                The benchmark is run on a 15-inch MacBook Pro from 2015 using Docker and PHP 7.1. The examined
                DI Containers are configured for production usage as if it was probably done in case of a big project.
                That's why I took advantage of autowiring capabilities when possible. Unfortunately, this
                discriminates some participants giving them a big handicap, but I wanted to measure container
                performance with a configuration as advertised or recommended by the documentation and most probable
                to be used in the real world.
            </p>
        </section>

        <hr>
        <h2 id="results">Results</h2>
HERE;
        foreach ($testSuites as $i => $testSuite) {
            $testSuiteNumber = $i+1;
            $testSuiteTitle = $testSuite->getTitle();
            $testSuiteDescription = $testSuite->getDescription();

            $html .= <<<HERE
        <h3>Test Suite $testSuiteNumber: $testSuiteTitle</h3>
        <p>$testSuiteDescription</p>
HERE;
            foreach ($testSuite->getTestCases() as $testCase) {
                $testCaseTitle = $testCase->getTitle();

                $html .= <<<HERE
        <table border="1">
            <thead>
                <tr>
                    <th colspan="6" style="font-size: 18px;">$testCaseTitle</th>
                </tr>
                <tr>
                    <th style='width: 50px;'>Rank</th>
                    <th style='width: 175px;'>Container</th>
                    <th style='width: 100px;'>Time (ms)</th>
                    <th style='width: 100px;'>Time (%)</th>
                    <th style='width: 175px;'>Peak Memory (MB)</th>
                    <th style='width: 150px;'>Peak Memory (%)</th>
                </tr>
            </thead>
            <tbody>
HERE;
                $rank = 1;
                $timeBase = null;
                $memoryBase = null;
                foreach ($benchmarkResult->getResults($testSuite, $testCase) as $containerName => $result) {
                    if ($result->getTimeConsumptionInMilliSeconds() !== null) {
                        $time = sprintf('%.3F', $result->getTimeConsumptionInMilliSeconds());
                    } else {
                        $time = null;
                    }

                    $memory = $result->getPeakMemoryUsageInMegaBytes() ?? null;

                    if ($rank === 1) {
                        $timeBase = $time ?? null;
                        $memoryBase = $memory ?? null;
                    }

                    $timeColumn = $time ?? "N/A";
                    $timePercentColumn = $time ? round($time / $timeBase * 100, 0) . "%" : "N/A";
                    $memoryColumn = $memory ?? "N/A";
                    $memoryPercentColumn = $memory ? round($memory / $memoryBase * 100, 0) . "%" : "N/A";

                    $html .= <<<HERE
                <tr>
                    <th>$rank</th>
                    <td><b>$containerName</b></td>
                    <td>$timeColumn</td> 
                    <td>$timePercentColumn</td> 
                    <td>$memoryColumn</td> 
                    <td>$memoryPercentColumn</td>
                </tr>

HERE;
                   $rank++;
                }
                $html .= <<<HERE
            </tbody>
        </table>
        </br>
HERE;
            }
        }

        $html .= <<<HERE
            <hr>
            <h2 id="conclusion">Conclusion</h2>

            <p>
                My hypothesis was that different types of containers have different performance characteristics.
                It can be concluded by looking at the results that the hypothesis can't be rejected as it seems that
                the more user-friendly a container is (dynamic &gt; compiled, dynamic with autowiring &gt; dynamic
                without autowiring) the slower it is.
            </p>

            <p>
                However, keep in mind that in a well-architected application you won't call your DI Container
                hundreds or even thousands of times because there should be only one injection point: when you invoke
                the controller(s) which handle(s) the request (but there is a good chance of needing the container in
                other places of the application layer - e.g. in your middleware or bootstrap files). That's why
                most results are exaggerated - you probably won't see tens of milliseconds of difference between the
                fastest and the slowest DIC in the real life.
            </p>

            <p>
                To sum up, when choosing a container it only depends on your needs which one suits your project best:
                if you have a performance-critical application then you probably want to choose a compiled container.
                If maximum performance is not required, but you develop a big and complex system then I would recommend
                a dynamic container with autowiring capabilities. Otherwise you can go with simpler containers.
            </p>
        </article>
    </body>
</html>
HERE;

        file_put_contents($this->path, $html);
    }
}
