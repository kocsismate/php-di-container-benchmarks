<?php


namespace DiContainerBenchmarks\Test;

/**
 * Containers that cannot run a given test (because they lack the feature) should throw this exception in the "startup" method of the test.
 */
class UnsupportedFeatureException extends \RuntimeException
{

}