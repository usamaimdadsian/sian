<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main.landing');
    }

    public function about()
    {
        return view('main.about_us');
    }

    public function services()
    {
        return view('main.services');
    }

    public function portfolio()
    {
        return view('main.portfolio');
    }

    public function contact()
    {
        return view('main.contact');
    }
}
