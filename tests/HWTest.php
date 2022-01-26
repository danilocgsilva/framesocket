<?php

namespace Danilocgsilva\Tests;

use PHPUnit\Framework\TestCase;
use Danilocgsilva\Framesocket\HW;

class HWTest extends TestCase
{
    public function testItWorks(): void
    {
        $helloWorld = new HW();
        $this->assertSame("world for Framesocket!", $helloWorld->hello());
    }
}