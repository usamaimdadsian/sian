@extends('layouts.master')
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
                <h1 class="page-title"> Create Student </h1>
            </header>
            <div class="page-section">
                <div class="d-xl-none">
                    <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i
                            class="fa fa-th-list"></i></button>
                </div>
                <div id="base-style" class="card">
                    <div class="card-body">
                        {{Form::model($student ?? '', ['route' => 'student.store', 'class' => 'student-form', 'files' => true])}}
                            <fieldset>
                                <legend>Account Information</legend>
                                <div class="form-group">
                                    <label for="ai0">{{__('User Name')}}</label>
                                    {{ Form::text('name',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'name'), 'id' => 'ai0', 'placeholder' => "User Name"])}}
                                    {!! FrmErrHelp::showErrors($errors, 'name') !!} 
                                </div>
                                <div class="form-group">
                                    <label for="ai1">{{__('Email')}}</label>
                                    {{ Form::email('email',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'email'), 'id' => 'ai1', 'placeholder' => "Email"])}}
                                    {!! FrmErrHelp::showErrors($errors, 'email') !!} 
                                </div>
                                <div class="form-group">
                                    <label for="ai1">{{__('Password')}}</label>
                                    {{ Form::password('password',['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'password'), 'id' => 'ai1', 'placeholder' => "Password"])}}
                                    {!! FrmErrHelp::showErrors($errors, 'password') !!} 
                                </div>
                                <div class="form-group">
                                    <label for="ai1">{{__('Password Confirmation')}}</label>
                                    {{ Form::password('password_confirmation',['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'password_confirmation'), 'id' => 'ai1', 'placeholder' => "Password Confirmation"])}}
                                    {!! FrmErrHelp::showErrors($errors, 'password_confirmation') !!} 
                                </div>
                            
                            </fieldset>
                            @include('student.includes.form',['name' => 'Create'])
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
                <a href="#tf0" class="nav-link smooth-scroll">Name</a>
                <a href="#tf14" class="nav-link smooth-scroll">Serial</a> 
                <a href="#tf2" class="nav-link smooth-scroll">Roll No</a> 
                <a href="#tf3" class="nav-link smooth-scroll">Father Name</a>
                <a href="#tf4" class="nav-link smooth-scroll">Father Profession</a>
                <a href="#tf5" class="nav-link smooth-scroll">Caste</a>
                <a href="#tf6" class="nav-link smooth-scroll">Cell No</a>
                <a href="#tf7" class="nav-link smooth-scroll">Gender</a>
                <a href="#tf8" class="nav-link smooth-scroll">Religion</a>
                <a href="#tf9" class="nav-link smooth-scroll">CNIC</a>
                <a href="#tf10" class="nav-link smooth-scroll">Father CNIC</a>
                <a href="#tf11" class="nav-link smooth-scroll">Image</a>
                <a href="#tf12" class="nav-link smooth-scroll">Date of Birth</a>
                <a href="#tf13" class="nav-link smooth-scroll">Address</a>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('jsScript')
    @include('student.includes.validation')
    @include('includes.show-image',['image_id' => 'fileupload-avatar'])
@endsection