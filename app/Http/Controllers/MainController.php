<?php

namespace App\Http\Controllers;

use App\Models\Main\Cv;
use App\Models\Main\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $cvs = Cv::all();
        $projects = Project::all();
        return view('main.landing',compact('cvs','projects'));
    }

    public function about()
    {
        $cvs = Cv::all();
        return view('main.about_us',compact('cvs'));
    }

    public function services()
    {
        return view('main.services');
    }

    public function portfolio()
    {
        $projects = Project::all();
        return view('main.portfolio',compact('projects'));
    }

    public function showPortfolio(Project $project)
    {
        return view('main.portfolio_detail',compact('project'));
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function download(Request $request)
    {
        $cv = Cv::find($request->input('cv'));
        $file = public_path($cv->cv_addr);
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, 'Usama\'s Resume.pdf', $headers);
    }
}
