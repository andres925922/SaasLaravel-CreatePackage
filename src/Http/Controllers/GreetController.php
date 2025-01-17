<?php

namespace aconvertini\Greetr\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;

class GreetController extends Controller
{
    public function index(Request $request, $name)
    {
        return 'Hi ' . $name . '! How are you doing today?';
    }

}