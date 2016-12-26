<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Outputter;

use DiContainerBenchmarks\Benchmark\BenchmarkResult;
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
     */
    public function output(array $testSuites, BenchmarkResult $benchmarkResult): void
    {
        $now = date("Y-m-d H:i:s");

        $html = "<html>\n";
        $html .= "<head>\n";
        $html .= "<title>DI Container Benchmark Results</title>\n";
        $html .= "</head>\n";
        $html .= "<body>\n";
        $html .= "<h1>DI Container Benchmark Results</h1>\n";
        $html .= "<h2>Generated: $now</h2>\n";

        foreach ($testSuites as $testSuite) {
            $html .= "<hr>\n";
            $html .= "<h3>" . $testSuite->getTitle() . "</h3>\n";
            $testCases = $testSuite->getTestCases();

            foreach ($testCases as $testCase) {
                $html .= "<table style='width: 525px; border: 1px solid black;'>\n";
                $html .= "<thead>\n";
                $html .= "<tr>\n";
                $html .= "<th colspan='4'>\n";
                $html .= "<h4>" . $testCase->getTitle() . "</h4>\n";
                $html .= "</th>\n";
                $html .= "</tr>\n";
                $html .= "<tr>\n";
                $html .= "<th style='width: 100px; height: 20px;'>Rank</th>\n";
                $html .= "<th style='width: 100px; height: 20px;'>Container</th>\n";
                $html .= "<th style='width: 200px; height: 20px;'>Time (ms)</th>\n";
                $html .= "<th style='width: 200px; height: 20px;'>Peak Memory Usage (MB)</th>\n";
                $html .= "</tr>\n";
                $html .= "</thead>\n";

                $html .= "<tbody>\n";
                $i = 1;
                foreach ($benchmarkResult->getResults($testSuite, $testCase) as $containerName => $result) {
                    if ($result->getTimeConsumptionInMilliSeconds() !== null) {
                        $time = sprintf('%.6F', $result->getTimeConsumptionInMilliSeconds());
                    } else {
                        $time = "N/A";
                    }

                    $memory = $result->getPeakMemoryUsageInMegaBytes() ?? "N.A.";

                    $html .= "<tr>\n";
                    $html .= "<th>" . $i . "</th>\n";
                    $html .= "<th>\n";
                    $html .= $containerName . "\n";
                    $html .= "</th>\n";
                    $html .= "<td>" . $time . "</td>\n";
                    $html .= "<td>" . $memory . "</td>\n";
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
