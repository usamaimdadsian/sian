<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.welcome');
    }
    public function showLoginForm()
    {
        $type = 'admin';
        return view('auth.login',compact('type'));
    }
}
