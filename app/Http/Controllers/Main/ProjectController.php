<?php

namespace App\Http\Controllers\Main;

use App\Models\Main\Project;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('dashboard.project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $project = new Project();
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->rating = $request->input('rating');
        $project->client = $request->input('client');
        $project->completed = $request->input('completed');
        $project->explain = $request->input('explain');
        $project->pic_addr = saveFile($request->file('pic_addr'));
        $project->status = $request->input('status');
        $project->save();
        return redirect()->route('admin.project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('dashboard.project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        if($request->hasFile('pic_addr'))
        {
            unlink('pic_addr');
            $project->pic_addr = saveFile($request->file('pic_addr'));
        }
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->rating = $request->input('rating');
        $project->client = $request->input('client');
        $project->completed = $request->input('completed');
        $project->explain = $request->input('explain');
        $project->status = $request->input('status');
        $project->update();
        return redirect()->route('admin.project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        unlink($project->pic_addr);
        $project->delete();
        return redirect()->route('admin.project.index');
    }
}
