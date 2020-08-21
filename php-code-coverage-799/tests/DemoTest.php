<?php

declare(strict_types=1);

namespace DG\Test;

use DG\Demo;
use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase
{
    public function testHello()
    {
        $demo = new Demo();

        $this->assertEquals('hello', $demo->hello());
    }
}