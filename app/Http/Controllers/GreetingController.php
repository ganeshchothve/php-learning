<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    //
    public function index()
    {
        return view('greeting', ['name' => 'Ganesh']);
    }

    public function show(string $name)
    {
        return view('greeting', ['name' => $name]);
    }
}
