<?php

namespace App\Http\Controllers;

use App\Models\Main\Cv;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $cvs = Cv::all();
        return view('main.landing',compact('cvs'));
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
        return view('main.portfolio');
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
