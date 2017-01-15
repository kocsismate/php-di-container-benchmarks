<?php
declare(strict_types=1);

require __DIR__ . "/../app/bootstrap.php";

use DiContainerBenchmarks\Test\TestRunner;

if (count($_GET) < 4) {
    echo "<h1>Error!</h1>";
    echo "<p>Please specifiy the 'test_suite', 'container', 'iterations' and 'test_type' query parameters!</p>";
    exit(-1);
}

$testSuiteNumber = (int) $_GET["test_suite"];
$container = $_GET["container"];
$iterations = (int) $_GET["iterations"];
$testType = $_GET["test_type"];

$testRunner = new TestRunner();
$result = $testRunner->runTest($testSuiteNumber, $container, $iterations, $testType);

echo $result->toJson();
