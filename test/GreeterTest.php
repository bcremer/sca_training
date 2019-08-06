<?php

namespace SCATrainingTest;

use PHPUnit\Framework\TestCase;
use SCATraining\Greeter;

final class GreeterTest extends TestCase
{
    public function testContainer() : void
    {
        self::assertSame(
            'Hello Trainees',
            (new Greeter())->sayHello()
        );
    }
}
