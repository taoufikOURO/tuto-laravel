<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function  fifi()
    {
        return view('hello');
    }

}
