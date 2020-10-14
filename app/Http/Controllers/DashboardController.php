<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Events\RemoveUnusedFilesEvent;

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

    public function hiringProjects()
    {
        $projects = DB::table('hiring_projects')->latest()->get();
        return view('dashboard.hiring.index',compact('projects'));
    }

    public function hiringProjectsDelete(Request $request)
    {
        $hiring = DB::table('hiring_projects')->delete($request->id);
        event(new RemoveUnusedFilesEvent());
        return redirect()->route('admin.hiring.index');
    }


    public function hiringFile(Request $request)
    {
        return response()->file(public_path().'/'.$request->input('file_addr'));
    }
}
