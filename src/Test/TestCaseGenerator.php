<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

final class TestCaseGenerator
{
    public static function generate(TestCase $testCase): string
    {
        $type = $testCase->getMode();
        $isSingleton = $testCase->isSingleton();
        $iterations = $testCase->getIterations();
        $classes = $testCase->getClassesToRetrieve();

        $code = "<?php\n\n";
        $code .= "declare(strict_types=1);\n\n";

        $code .= "use DiContainerBenchmarks\\Container\\ContainerAdapterInterface;\n";
        $code .= "use DiContainerBenchmarks\\Test\\TestResult;\n\n";

        $code .= "/** @var ContainerAdapterInterface \$adapter */\n\n";

        if ($type !== TestCase::COLD) {
            $code .= "// Warm-up\n";
            if ($isSingleton) {
                $code .= "\$container = \$adapter->bootstrapSingletonContainer();\n";
            } else {
                $code .= "\$container = \$adapter->bootstrapPrototypeContainer();\n";
            }
        }

        if ($type === TestCase::HOT) {
            foreach ($classes as $class) {
                $code .= "\$container->get($class::class);\n";
            }
        }

        $code .= "gc_collect_cycles();\n\n";
        $code .= "// Start benchmark\n";
        $code .= "\$t1 = hrtime(true);\n";

        if ($type === TestCase::COLD) {
            if ($isSingleton) {
                $code .= "\$container = \$adapter->bootstrapSingletonContainer();\n";
            } else {
                $code .= "\$container = \$adapter->bootstrapPrototypeContainer();\n";
            }
        }

        for ($i = 0; $i < $iterations; $i++) {
            foreach ($classes as $class) {
                $code .= "\$container->get($class::class);\n";
            }
        }

        $code .= "\$t2 = hrtime(true);\n";
        $code .= "// End benchmark\n\n";

        $code .= "return TestResult::createFromMeasurement(\$t1, \$t2, memory_get_peak_usage());\n";

        return $code;
    }
}
