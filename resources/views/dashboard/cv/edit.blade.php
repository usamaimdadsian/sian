@extends('layouts.dashboard')
@section('content')
<div class="wrapper">

    <div class="page has-sidebar has-sidebar-expand-xl">

        <div class="page-inner">

            <header class="page-title-bar">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Forms</a>
                        </li>
                    </ol>
                </nav>
                <h1 class="page-title"> Update CV </h1>
            </header>
            <div class="page-section">
                <div class="d-xl-none">
                    <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i
                            class="fa fa-th-list"></i></button>
                </div>
                <div id="base-style" class="card">
                    <div class="card-body">
                        {{Form::model($cv ?? '', ['method' => 'put','route' => ['admin.cv.update',$cv->id], 'class' => 'cv-form', 'files' => true])}}
                            @include('dashboard.cv.inc.form',['name' => 'Update'])
                        {{Form::close()}}

                    </div>
                </div>
            </div>
        </div>
        <div class="page-sidebar page-sidebar-fixed">

            <header class="sidebar-header d-xl-none">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="prevent-default" href="#" onclick="Looper.toggleSidebar()"><i
                                class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
                    </li>
                </ol>
            </header>

            <nav id="nav-content" class="nav flex-column mt-4">
                <a href="#tf1" class="nav-link smooth-scroll">Title</a>
                <a href="#tf2" class="nav-link smooth-scroll">CV</a> 
            </nav>
        </div>
    </div>
</div>
@endsection

@section('jsScript')
    @include('dashboard.cv.inc.validation')
@endsection