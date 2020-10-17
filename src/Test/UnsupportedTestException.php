<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

use RuntimeException;

/**
 * Containers that cannot run a given test (because they lack the feature) should throw this exception
 * in the appropriate "bootstrap" method of the adapter.
 */
final class UnsupportedTestException extends RuntimeException
{
}
