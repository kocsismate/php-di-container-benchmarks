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
        <h1>DI Container Benchmark Results</h1>
        <table>
            <tr>
                <td style="width: 85px;"><b>Author:</b></td><td>Máté Kocsis (kocsismate@woohoolabs.com)</td>
            </tr>
            <tr>
                <td><b>Repository:</b></td><td><a href="https://github.com/kocsismate/php-di-container-benchmarks">https://github.com/kocsismate/php-di-container-benchmarks</a></td>
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
            <h2>Introduction</h2>
            <p>
                In 2014, a really interesting benchmark about DI Containers for PHP was
                <a target="_blank" href="https://www.sitepoint.com/php-dependency-injection-container-performance-benchmarks/">published</a>
                on Sitepoint. Unfortunately, <a target="_blank" href="https://github.com/TomBZombie/php-dependency-injection-benchmarks">the implementation</a>
                of the tests turned out to be quite controversial, so the benchmark itself wasn't really useful.
            </p>
            
            <p>
                I have been interested in the topic since then so I wanted to conduct a better benchmark than the last one was:
                I tried to fix some of its flaws while keeping the good parts.
            </p>
        
            <h3>Comparison of Containers</h3>
        
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
        </section>
        
        <hr>
        <section>
            <h2>Method</h2>
        
            <p>
                Each container is given 4 tasks (test suites) where they have to create or fetch object
                graphs of different size. Test suites contain one or more test cases which define some settings
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
                The benchmark is run on a 15-inch MacBook Pro from 2015 using Docker and PHP 7.1.
            </p>
        </section>
        
        <hr>
        <h2>Results</h2>
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
            <h2>Conclusion</h2>
            
            <p>
                Different types of containers have different performance characteristics. It can be concluded by looking
                at the benchmark results that the more user-friendly a container is (dynamic &gt; compiled,
                autowired &gt; not autowired), the more the probability is that it is slower than its rivals.
            </p>
            
            <p>
                In turn of their lower performance, dynamic containers usually need less attention during
                development than compiled ones, while containers supporting autowiring usually need much less configuration
                than the ones without autowiring capabilities.
            </p>
            
            <p>
                However, keep in mind that in a well-architected application, you won't call your DI Container
                hundreds or even thousands of times because there should be only one real injection point: when you invoke
                the controller which handles the request (and there is a good chance of using the container in
                other places of the application layer - e.g. in your middleware or in your bootstrap files). That's why
                most tests are exaggerated - you probably won't see tens of milliseconds of difference between the
                fastest and the slowest implementations in the real life.
            </p>
            
            <p>
                To sum up, it depends on your needs which container suits your project best: if it is performance-critical
                then you want to choose a compiled container. If maximum performance is not needed, but you have a big
                project, then I would recommend a dynamic container with autowiring capabilities. Otherwise you can go
                with simpler containers.
            </p>
        </article>
    </body>
</html>
HERE;

        file_put_contents($this->path, $html);
    }
}
