<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\OutputGenerator;

use DiContainerBenchmarks\Benchmark\BenchmarkResult;
use DiContainerBenchmarks\Container\ContainerInterface;
use DiContainerBenchmarks\TestSuite\TestSuiteInterface;
use PackageVersions\Versions;

class HtmlOutputGenerator implements OutputGeneratorInterface
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
    public function generateOutput(array $testSuites, array $containers, BenchmarkResult $benchmarkResult): void
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
                
                I have been interested in the topic since then - and my curiosity was just growing after I had started
                to develop my own DI container, Zen - so I wanted to conduct another benchmark that also tries to measure
                real-life performance, while being as unbiased and reliable as possible. So here is my take! If you have any
                suggestion in mind about the benchmark or you want to add your container to the list, please create
                an <a target="_blank" href="https://github.com/kocsismate/php-di-container-benchmarks">issue or a pull request</a>.
            </p>

            <p>
                The examined containers are listed below along with some of their attributes:
            </p>

            <table border="1" style="width: 750px;">
                <thead>
                    <tr>
                        <th style="width: 300px;">Name</th>
                        <th style="width: 100px;">Version</th>
                        <th style="width: 175px;">Compiled/Dynamic</th>
                        <th style="width: 175px;">Autowiring</th>
                    </tr>
                </thead>
                <tbody>
HERE;
        foreach ($containers as $i => $container) {
            /** @var ContainerInterface $container */
            $package = $container->getPackage();
            $version = Versions::getVersion($container->getPackage());
            $displayedVersion = substr($version, 0, strpos($version, "@"));
            $url = $container->getUrl();
            $compiled = $container->isCompiled() ? "compiled" : "dynamic";
            $autowiring = $container->isAutowiringSupported() ? "supported" : "not supported";

            $html .= <<<HERE
                    <tr>
                        <td><a target="_blank" href="$url"><b>$package</b></a></td>
                        <td>$displayedVersion</td>
                        <td>$compiled</td>
                        <td>$autowiring</td>
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
                Each container is given 6 tasks (Test Suites) where they have to create or fetch object graphs of
                different sizes (10 or 100 objects). For this purpose, containers are configured either to always
                instantiate objects (this is usually called as Prototype scope) or to instantiate objects only at
                the first retrieval and return the same instance on the subsequent calls (which is usually referred to
                as Singleton scope or shared services).
            </p>

            <p>
                There are 3 main types of Test Suites: "Cold" ones (Test Suite 1-2) measure performance including
                autoloading and startup time of containers as well as autoloading time of the retrieved objects.
                "Semi-Warm" ones (Test Suite 3-4) measure performance excluding container autoloading time, but
                including startup time and autoloading time of the retrieved objects, while "Warm" ones (Test Suite 5-6)
                exclude autoloading and startup time equally. Time of compilation is always excluded from the results
                due to OPcache.
            </p>

            <p>
                Each Test Suite contains three Test Cases which define the number of iterations the main task has to be
                repeated in order to simulate real world usage patterns. This number ranges from 10 to 100 000.
                Furthermore, all Test Cases are performed 30 times (this is referred to as "runs") in order to improve
                the accuracy of measurements. The median of these results are displayed in the final results.
            </p>

            <p>
                The benchmark is run on a 15-inch MacBook Pro from 2017 (CPU: Intel i7 2,8 GHz; RAM: 16 GB; OS: Mojave),
                using PHP 7.3 in Docker, OPcache enabled and autoloader optimized (using authoritative mode). During the
                measurements, a PHP-FPM script served by nginx is executed each time. This is needed because a production
                environment is simulated much better this way than in the CLI.
            </p>

            <p>
                The examined DI Containers are configured for production usage as if it was probably done in case of a
                big project. That's why I took advantage of autowiring capabilities when possible. Unfortunately, this
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

                    $timeColumn = $time !== null ? round($time, 3) : "N/A";
                    $timePercentColumn = $time ? round($time / $timeBase * 100, 0) . "%" : "N/A";
                    $memoryColumn = $memory !== null ? round($memory, 3) : "N/A";
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
                Keep in mind that in a well-architected application you won't call your DI Container
                hundreds or even thousands of times because ideally there should be as few
                <a target="_blank" href="http://blog.ploeh.dk/2011/07/28/CompositionRoot/">composition roots</a>
                as possible (but there is a good chance of needing the container in other places of the application layer -
                e.g. in your middleware or bootstrap files). That's why most results are exaggerated - you probably won't
                see milliseconds of difference between the fastest and the slowest DIC in the real life.
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
