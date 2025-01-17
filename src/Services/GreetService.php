<?php

namespace aconvertini\Greetr\Services;

class GreetService
{
    public function greet(string $name): string
    {
        return 'Hi ' . $name . '! How are you doing today?';
    }
}