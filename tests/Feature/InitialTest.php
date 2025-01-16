<?php

namespace aconvertini\Greetr\Tests;

use PHPUnit\Framework\TestCase;
use aconvertini\Greetr\Greetr;


class InitialTest extends TestCase
{
    public function testGreet()
    {
        $greetr = new Greetr();
        $this->assertEquals('Hi Andrea! How are you doing today?', $greetr->greet('Andrea'));
    }
}