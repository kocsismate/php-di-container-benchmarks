<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

use Symfony\Component\Process\Process;

class CliBenchmarkContext implements BenchmarkContextInterface
{
    public function getName(): string
    {
        return "CLI";
    }

    public function getTestOutput(int $number, string $container, int $iterations, string $testType): string
    {
        $process = new Process(PROJECT_ROOT . "/bin/test $number $container $iterations $testType");
        $process->run();
        return $process->getOutput();
    }
}
