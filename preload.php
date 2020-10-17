<?php

require_once __DIR__ . "/src/Container/ContainerAdapterInterface.php";
require_once __DIR__ . "/src/Container/ContainerDefinitions.php";
require_once __DIR__ . "/src/Container/ContainerDefinitionInterface.php";

for ($i = 1; $i <= 100; $i++) {
    require_once __DIR__ . "/src/Fixture/Class$i.php";
}

require_once __DIR__ . "/src/Test/TestCase.php";
require_once __DIR__ . "/src/Test/TestResult.php";
require_once __DIR__ . "/src/Test/TestRunner.php";
require_once __DIR__ . "/src/Test/UnsupportedTestException.php";
require_once __DIR__ . "/src/TestSuite/TestSuiteInterface.php";

for ($i = 1; $i <= 6; $i++) {
    require_once __DIR__ . "/src/TestSuite/TestSuite$i.php";
}

require_once __DIR__ . "/src/TestSuite/TestSuites.php";
