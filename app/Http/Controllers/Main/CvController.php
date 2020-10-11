<?php

namespace App\Http\Controllers\Main;

use App\Models\Main\Cv;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cvs = Cv::all();
        return view('dashboard.cv.index',compact('cvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string',
            'cv_addr' => 'required|mimes:pdf|max:5000',
        ]);
        $cv = new Cv();
        $cv->title = $request->input('title');
        $cv->cv_addr = saveFile($request->file('cv_addr'),"");
        $cv->save();
        return redirect()->route('admin.cv.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function show(Cv $cv)
    {
        $path_of_file = $cv->cv_addr;
        return response()->file($path_of_file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function edit(Cv $cv)
    {
        return view('dashboard.cv.edit',compact('cv'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cv $cv)
    {
        $this->validate($request,[
            'title' => 'required|string',
        ]);
        $cv->title = $request->input('title');
        if($request->hasFile('cv_addr'))
        {
            unlink($cv->cv_addr);
            $cv->cv_addr = saveFile($request->file('cv_addr'),"");
        }
        $cv->update();
        return redirect()->route('admin.cv.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cv $cv)
    {
        unlink($cv->cv_addr);
        $cv->delete();
        return redirect()->route('admin.cv.index');
    }
}
