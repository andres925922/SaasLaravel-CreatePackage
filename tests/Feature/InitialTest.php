<?php

namespace aconvertini\Greetr\Tests;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Request;
use aconvertini\Greetr\Http\Controllers\GreetController;


class InitialTest extends TestCase
{
    public function testGreet()
    {
        $controller = new GreetController();
        $response = $controller->index(new Request(), 'aconvertini');
        $this->assertEquals('Hi aconvertini! How are you doing today?', $response);
    }
}