<?php
declare(strict_types=1);

require __DIR__ . "/../app/bootstrap.php";

use DiContainerBenchmarks\Test\TestRunner;

if (empty($_GET["test_suite"]) || empty($_GET["container"]) || empty($_GET["iterations"]) || empty($_GET["test_type"])) {
    echo "<h1>Please specifiy the required query parameters!</h1>";
    echo "<p>";
    echo '<b>test_suite</b>: An integer between 1-6 (inclusive)<br/>';
    echo '<b>container</b>: The namespace of the container (e.g.: Symfony, PhpDi etc.)<br/>';
    echo '<b>iterations</b>: A positive integer (e.g.: 10, 100, 1000, 10000)<br/>';
    echo '<b>test_type</b>: either "cold", "semi_warm" or "warm"<br/>';
    echo "</p>";
    exit(-1);
}

$testSuiteNumber = (int) $_GET["test_suite"];
$container = $_GET["container"];
$iterations = (int) $_GET["iterations"];
$testType = $_GET["test_type"];

$testRunner = new TestRunner();
$result = $testRunner->runTest($testSuiteNumber, $container, $iterations, $testType);

echo $result->toJson();
