@extends('layouts.dashboard')
@section('content')
<div class="row mb-4">
    @foreach ($projects as $project)
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-muted" data-toggle="tooltip" data-placement="bottom" title="Deadline"><span
                                class="sr-only">Deadline</span> <i class="fa fa-calendar-alt text-muted mr-1"></i> {{date("F jS, Y",strtotime($project->complete_date))}}</span>
                        <div class="dropdown">
                            <form action="{{route('admin.hiring.destroy')}}" method="post">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="id" value="{{$project->id}}">
                                <button type="submit" class="btn btn-icon btn-light"
                                    aria-expanded="false" title="Delete"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body text-center">

                    <a href="page-project.html" class="tile tile-lg bg-purple mb-2">LT</a>

                    <h5 class="card-title">
                        <a href="page-project.html">{{$project->project_name}}</a>
                    </h5>
                    <p>
                        {{$project->name}} - {{$project->email}}
                        <br>
                        {{$project->organization}}
                        <br>
                        {{$project->technologies}}
                        <br>
                        {{$project->address}}
                    </p>
                    <div class="my-3">
                        <p>
                            <b>Description:</b>
                            {{$project->project_description}}
                        </p>
                    </div>

                    <div class="row">

                        <div class="col">
                            <strong>Budget</strong> <span class="d-block">{{$project->budget}}$</span>
                        </div>

                        <div class="col">
                            <strong>Files</strong>
                            <?php $files = array_filter(explode("|",$project->files)) ?> 
                            @foreach ($files as $file)
                                <span class="d-block">
                                    <form action="{{route('admin.dashboard.viewfile',['file' => $file])}}" target="_blank" method="get">
                                        <input type="hidden" name="file_addr" value="{{$file}}">
                                        <button class="btn btn-light" aria-expanded="false" type="submit">View</button>
                                    </form>
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection