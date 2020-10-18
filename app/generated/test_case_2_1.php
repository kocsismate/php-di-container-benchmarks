<?php

declare(strict_types=1);

use DiContainerBenchmarks\Test\TestResult;

gc_collect_cycles();

// Start benchmark
$t1 = hrtime(true);
$container = $adapter->bootstrapSingletonContainer();
$container->get('DiContainerBenchmarks\Fixture\Class100');
$container->get('DiContainerBenchmarks\Fixture\Class100');
$container->get('DiContainerBenchmarks\Fixture\Class100');
$container->get('DiContainerBenchmarks\Fixture\Class100');
$container->get('DiContainerBenchmarks\Fixture\Class100');
$container->get('DiContainerBenchmarks\Fixture\Class100');
$container->get('DiContainerBenchmarks\Fixture\Class100');
$container->get('DiContainerBenchmarks\Fixture\Class100');
$container->get('DiContainerBenchmarks\Fixture\Class100');
$container->get('DiContainerBenchmarks\Fixture\Class100');
$t2 = hrtime(true);
// End benchmark

return TestResult::createFromMeasurement($t1, $t2, memory_get_peak_usage());
