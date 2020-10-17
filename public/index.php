<?php

declare(strict_types=1);

require_once __DIR__ . "/../app/bootstrap.php";

use DiContainerBenchmarks\Test\TestRunner;

if (isset($_GET["clear"])) {
    opcache_reset();
    exit;
}

if (empty($_GET["test_suite"]) || empty($_GET["test_case"]) || empty($_GET["container"])) {
    echo "<h1>Please specify the required query parameters!</h1>";
    echo "<p>";
    echo '<b>test_suite</b>: An integer between 1-6 (inclusive)<br/>';
    echo '<b>test_case</b>: An integer between 1-3 (inclusive)<br/>';
    echo '<b>container</b>: The name of the container (e.g.: symfony, php-di, laminas, etc.)<br/>';
    echo "</p>";
    exit(-1);
}

$testSuiteNumber = (int) $_GET["test_suite"];
$testCaseNumber = (int) $_GET["test_case"];
$container = (string) $_GET["container"];

$testRunner = new TestRunner();
$result = $testRunner->runTest($testSuiteNumber, $testCaseNumber, $container);

echo $result->toJson();
