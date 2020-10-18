<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

final class TestCaseGenerator
{
    public static function generate(TestCase $testCase): string
    {
        $type = $testCase->getTestType();
        $isSingleton = $testCase->isSingleton();
        $iterations = $testCase->getIterations();
        $class = $testCase->getClassToRetrieve();

        $code = "<?php\n\n";
        $code .= "declare(strict_types=1);\n\n";

        $code .= "use DiContainerBenchmarks\\Test\\TestResult;\n\n";

        if ($type !== TestCase::COLD) {
            $code .= "// Warm-up\n";
            if ($isSingleton) {
                $code .= "\$container = \$adapter->bootstrapSingletonContainer();\n";
            } else {
                $code .= "\$container = \$adapter->bootstrapPrototypeContainer();\n";
            }
        }

        if ($type === TestCase::WARM) {
            $code .= "\$container->get('$class');\n\n";
        }

        $code .= "gc_collect_cycles();\n\n";
        $code .= "// Start benchmark\n";
        $code .= "\$t1 = hrtime(true);\n";

        if ($isSingleton) {
            $code .= "\$container = \$adapter->bootstrapSingletonContainer();\n";
        } else {
            $code .= "\$container = \$adapter->bootstrapPrototypeContainer();\n";
        }

        for ($i = 0; $i < $iterations; $i++) {
            $code .= "\$container->get('$class');\n";
        }

        $code .= "\$t2 = hrtime(true);\n";
        $code .= "// End benchmark\n\n";

        $code .= "return TestResult::createFromMeasurement(\$t1, \$t2, memory_get_peak_usage());\n";

        return $code;
    }
}
