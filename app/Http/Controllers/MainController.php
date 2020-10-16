<?php

namespace App\Http\Controllers;

use App\Events\ClientMessageEvent;
use App\Models\Main\Cv;
use App\Models\Main\Project;
use Illuminate\Http\Request;
use App\Mail\ClientMessagesMail;
use App\Http\Requests\HireRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Events\RemoveUnusedFilesEvent;

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

    public function hireMe()
    {
        return view('main.hireme');
    }

    public function hireFormSub(HireRequest $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $organization = $request->input('organization');
        $address = $request->input('address');
        $project_name = $request->input('project_name');
        $technologies = $request->input('technologies');
        $complete_date = $request->input('complete_date');
        $budget = $request->input('budget');
        $project_description = $request->input('project_description');
        $files = $request->input('files');
        
        DB::insert('insert into hiring_projects (name, email,organization,address,project_name,technologies,complete_date,budget,project_description,files) values (?, ?,?,?,?,?,?,?,?,?)', [$name,$email,$organization,$address,$project_name,$technologies,$complete_date,$budget,$project_description,$files]);
        event(new RemoveUnusedFilesEvent());
        return redirect()->back()->with('message', 'I have received your request, I will give you my response in 24 hours on your email.');
    }

    public function uploadAttachments(Request $request)
    {
        $html = '';
        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $html .=  saveFile($file,"hiringFiles/");
        }
        $html = str_replace("storage/","|storage/",$html);
        return response()->json(['addr'=>$html]);
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

    public function contactMail(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'subject' => 'required|string|max:50',
            'message' => 'required|string|max:1000'
        ]);
        event(new ClientMessageEvent($request->name, $request->email, $request->subject, $request->message));
        return redirect()->back();
    }
}
