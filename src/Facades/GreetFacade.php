<?php

namespace aconvertini\Greetr\Facades;

use Illuminate\Support\Facades\Facade;

class GreetFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'greetr';
    }
}