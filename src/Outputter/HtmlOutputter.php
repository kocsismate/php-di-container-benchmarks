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

        $html = "<html>\n";
        $html .= "<head>\n";
        $html .= "<title>DI Container Benchmark Results</title>\n";
        $html .= "</head>\n";
        $html .= "<body>\n";
        $html .= "<h1>DI Container Benchmark Results</h1>\n";
        $html .= "<h2>Generated: $now</h2>\n";

        $html .= "<hr>\n";
        $html .= "<h3>Comparison of Containers</h3>\n";

        $html .= "<table border='1' style='width: 500px;'>\n";
        $html .= "<thead>\n";
        $html .= "<tr>\n";
        $html .= "<th style='width: 50px;'>No.</th>\n";
        $html .= "<th style='width: 150px;'>Name</th>\n";
        $html .= "<th style='width: 150px;'>Compiled/Dynamic</th>\n";
        $html .= "<th style='width: 150px;'>Autowiring</th>\n";
        $html .= "</tr>\n";
        $html .= "</thead>\n";

        $html .= "<tbody>\n";
        $i = 1;
        foreach ($containers as $container) {
            $html .= "<tr>\n";
            $html .= "<td><b>$i</b></td>\n";
            $html .= "<td><b>" . $container->getName() . "</b></td>\n";
            $html .= "<td>" . ($container->isCompiled() ? "compiled" : "dynamic") . "</td>\n";
            $html .= "<td>" . ($container->isAutowiringSupported() ? "supported" : "not supported") . "</td>\n";
            $html .= "</tr>\n";
            $i++;
        }
        $html .= "</tbody>\n";
        $html .= "</table>\n";

        $html .= "<p style='width: 700px;'>";
        $html .= "Different types of containers have different performance characteristics. It can be concluded that ";
        $html .= "the more user-friendly a container is (dynamic &gt; compiled, autowired &gt; not autowired), ";
        $html .= "the more the chance is that it is slower than its rivals. So apart from their lower performance ";
        $html .= "- which is highlighted in the following benchmark - dynamic containers are usually need less ";
        $html .= "attention during development than compiled ones, while containers supporting autowiring usually need ";
        $html .= "much less configuration than the ones without autowiring capabilities.";
        $html .= "</p>";

        $html .= "<hr>\n";
        $html .= "<h3>Methodology</h3>\n";
        $html .= "<p style='width: 700px;'>";
        $html .= "Each container is given 4 tasks (test suites) where they have to create or fetch object ";
        $html .= "graphs of different size. Test suites contain one or more test cases which define some settings ";
        $html .= "for a test: how many times it has to be repeated (iteration) and if the container startup time ";
        $html .= "should be counted in the time consumption.";
        $html .= "</p>";
        $html .= "<p style='width: 700px;'>";
        $html .= "Before measuring each test, containers are warmed up so autoloading can take place and caches ";
        $html .= "can be fed. Then all tests are performed 10 times, but only those results are used when ";
        $html .= "calculating the average time consumption/peak memory usage of a container which are not more than ";
        $html .= "the 120% of the smallest one.";
        $html .= "</p>";
        $html .= "<p style='width: 700px;'>";
        $html .= "The benchmark is run on a 15-inch MacBook Pro from 2015.";
        $html .= "</p>";

        foreach ($testSuites as $testSuite) {
            $html .= "<hr>\n";
            $html .= "<h3>" . $testSuite->getTitle() . "</h3>\n";
            $html .= "<p style='width: 700px;'>" . $testSuite->getDescription() . "</p>";

            $testCases = $testSuite->getTestCases();
            foreach ($testCases as $testCase) {
                $html .= "<table border='1' style='width: 700px;'>\n";
                $html .= "<thead>\n";
                $html .= "<tr>\n";
                $html .= "<th colspan='6' style='font-size: 18px;'>\n";
                $html .= $testCase->getTitle() . "\n";
                $html .= "</th>\n";
                $html .= "</tr>\n";
                $html .= "<tr>\n";
                $html .= "<th style='width: 50px;'>Rank</th>\n";
                $html .= "<th style='width: 150px;'>Container</th>\n";
                $html .= "<th style='width: 100px;'>Time (ms)</th>\n";
                $html .= "<th style='width: 100px;'>Time (%)</th>\n";
                $html .= "<th style='width: 150px;'>Peak Memory (MB)</th>\n";
                $html .= "<th style='width: 150px;'>Peak Memory (%)</th>\n";
                $html .= "</tr>\n";
                $html .= "</thead>\n";

                $html .= "<tbody>\n";
                $i = 1;
                $timeBase = null;
                $memoryBase = null;
                foreach ($benchmarkResult->getResults($testSuite, $testCase) as $containerName => $result) {
                    if ($result->getTimeConsumptionInMilliSeconds() !== null) {
                        $time = sprintf('%.3F', $result->getTimeConsumptionInMilliSeconds());
                    } else {
                        $time = null;
                    }

                    $memory = $result->getPeakMemoryUsageInMegaBytes() ?? null;

                    if ($i === 1) {
                        $timeBase = $time ?? null;
                        $memoryBase = $memory ?? null;
                    }

                    $html .= "<tr>\n";
                    $html .= "<th>$i</th>\n";
                    $html .= "<td><b>$containerName</b></td>\n";
                    $html .= "<td>" . ($time ?? "N/A") . "</td>\n";
                    $html .= "<td>" . ($time ? round($time / $timeBase * 100, 0) . "%" : "N/A") . "</td>\n";
                    $html .= "<td>" . ($memory ?? "N/A") . "</td>\n";
                    $html .= "<td>" . ($memory ? round($memory / $memoryBase * 100, 0) . "%" : "N/A") . "</td>\n";
                    $html .= "</td>\n";
                    $html .= "</tr>\n";
                    $i++;
                }
                $html .= "</tbody>\n";
                $html .= "</table>\n";
                $html .= "</br>\n";
            }
        }

        $html .= "</body>\n";
        $html .= "</html>\n";

        file_put_contents($this->path, $html);
    }
}
