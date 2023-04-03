<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NicoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function repair()
    {
        return view('repair');
    }
}
