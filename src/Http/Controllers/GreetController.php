<?php

namespace aconvertini\Greetr\Http\Controllers;

use aconvertini\Greetr\Facades\GreetFacade;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;

class GreetController extends Controller
{
    public function index(Request $request, $name)
    {
        return GreetFacade::greet($name);
    }
}