<?php

for ($i = 1; $i <= 100; $i++) {
    $j = $i - 1;
    $data = <<<EOF
<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\A;

class FixtureA$i
{
    public function __construct(FixtureA$j \$dependency)
    {
    }
}

EOF;

    file_put_contents(__DIR__ . "/../src/Fixture/A/FixtureA$i.php", $data);
}

for ($i = 1; $i <= 1000; $i++) {
    $data = <<<EOF
<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\B;

class FixtureB$i
{
}

EOF;

    file_put_contents(__DIR__ . "/../src/Fixture/B/FixtureB$i.php", $data);
}

for ($i = 1; $i <= 1000; $i++) {
    $j = $i - 1;
    $data = <<<EOF
<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\C;

class FixtureC$i
{
    public function __construct(FixtureC$j \$dependency)
    {
    }
}

EOF;

    file_put_contents(__DIR__ . "/../src/Fixture/C/FixtureC$i.php", $data);
}
