<?php

namespace aconvertini\Greetr\Tests;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Request;
use Illuminate\Container\Container;
use aconvertini\Greetr\Http\Controllers\GreetController;
use aconvertini\Greetr\Services\GreetService;


class InitialTest extends TestCase
{

    public function setUp(): void
    {

    }

    public function testGreet()
    {
        $service = new GreetService();
        $response = $service->greet('aconvertini');
        $this->assertEquals('Hi aconvertini! How are you doing today?', $response);
    }
}