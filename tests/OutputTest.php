<?php

namespace Php\Package;

use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
    public function testOutput(): void
    {
        // Вызывается какой-то код, который печатает на экран

        $this->expectException(\Exception::class);

        throw new \Exception('something went wrong');
    }
}
