@extends('layouts.dashboard')
@section('content')
<div class="wrapper">
    <div class="page">
        <div class="page-inner">
            <header class="page-title-bar">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tables</a>
                        </li>
                    </ol>
                </nav>
                <button type="button" class="btn btn-success btn-floated" onclick="location.href='{{route('admin.cv.create')}}'"><span class="fa fa-plus"></span></button>
                <div class="d-md-flex align-items-md-start">
                    <h1 class="page-title mr-sm-auto"> CVs </h1>
                    <div class="btn-toolbar">
                        <button type="button" class="btn btn-light"><i class="oi oi-data-transfer-download"></i> <span
                                class="ml-1">Export</span></button> <button type="button" class="btn btn-light"><i
                                class="oi oi-data-transfer-upload"></i> <span class="ml-1">Import</span></button>
                        <div class="dropdown">
                            <button type="button" class="btn btn-light" data-toggle="dropdown"><span>More</span> <span
                                    class="fa fa-caret-down"></span></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-arrow"></div><a href="#" class="dropdown-item">Add tasks</a> <a
                                    href="#" class="dropdown-item">Invite members</a>
                                <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Share</a> <a
                                    href="#" class="dropdown-item">Archive</a> <a href="#"
                                    class="dropdown-item">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="page-section">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="input-group input-group-alt">
                                <div class="input-group-prepend">
                                    <select class="custom-select">
                                        <option selected> Filter By </option>
                                        <option value="1"> Title </option>
                                    </select>
                                </div>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span
                                                class="oi oi-magnifying-glass"></span></span>
                                    </div><input type="text" class="form-control search" placeholder="Search record">
                                </div>
                            </div>
                        </div>
                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="tab1">
                                <div class="text-muted"> Showing 1 to 10 of {{count($cvs)}} entries </div>
                                <div class="table-responsive">
                                    @include('dashboard.cv.inc.index-table',['cvs' => $cvs, 'status' => 1])
                                </div>
                            </div>
                        </div>

                        <ul class="pagination justify-content-center mt-4">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fa fa-lg fa-angle-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">13</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">14</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">15</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">24</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-lg fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection