@extends('layouts.main')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/dropzone.css')}}">
@endsection
@section('content')
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Hire Me</h2>
                <div class="page_link">
                    <a href="{{route('main.landing')}}">Home</a>
                    <a href="{{route('main.hireme')}}">Hire Me</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section-top-border">
    <div class="row">
        <div class="col-lg-8 col-md-8" style="margin: 0 auto;">
            <h3 class="col-lg-12 title_color">Hire Me for Project</h3>
                @if (session('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{session('message')}}
                        <br>
                    </div>
                @endif
            <form action="{{route('main.hireme.sub')}}" method="POST" id="hire-me">
                @csrf
                <div class="mt-10">
                    <div class="form-group">
                        <label for="tf1">Name</label>
                        <input class="single-input-primary @error('name') is-invalid @enderror" value="{{old('name')}}" id="tf1" type="text" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" required>
                        @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-10">
                    <div class="form-group">
                        <label for="tf2">Email</label>
                        <input class="single-input-primary @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>
                        @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-10">
                    <div class="form-group">
                        <label for="tf3">Organization</label>
                        <input class="single-input-primary @error('organization') is-invalid @enderror" id="tf3" type="text" name="organization" placeholder="Your Organization" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Organization'" required>
                        @error('organization')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="input-group-icon mt-10">
                    <div class="form-group">
                        <label for="tf4">Address</label>
                        <input class="single-input-primary @error('address') is-invalid @enderror" id="tf4" type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required>
                        @error('address')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-10">
                    <div class="form-group">
                        <label for="tf5">Project Title</label>
                        <input class="single-input-primary @error('project_name') is-invalid @enderror" id="tf5" type="text" name="project_name" placeholder="Project Title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Title'" required>
                        @error('project_name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-10">
                    <div class="form-group">
                        <label for="tf8">Technologies</label>
                        <input class="single-input-primary @error('technologies') is-invalid @enderror" id="tf8" type="text" name="technologies" placeholder="Technologies" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Technologies'" required>
                        @error('technologies')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-10">
                    <div class="form-group">
                        <label for="tf9">Date of Completion</label>
                        <input class="single-input-primary @error('complete_date') is-invalid @enderror" id="tf9" type="date" name="complete_date" placeholder="Completion Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Completion Date'" required>
                        @error('complete_date')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-10">
                    <div class="form-group">
                        <label for="tf10">Budget</label>
                        <input class="single-input-primary @error('budget') is-invalid @enderror" id="tf10" type="number" name="budget" placeholder="Budget" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Budget'" required>
                        @error('budget')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-10">
                    <div class="form-group">
                        <label for="tf6">Project Description</label>
                        <textarea name="project_description" id="tf6" class="single-textarea @error('project_description') is-invalid @enderror" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                        @error('project_description')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-10">
                    <div class="form-group">
                        <label for="tf7">Upload Attachments</label>
                        <div id="tf7">
                            <div id="dropzone">
                                <div class="dropzone needsclick" id="upload-attachments">
                                  <div class="dz-message needsclick">    
                                    Drop files here or click to upload.<br>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="attach-files" class="@error('files') is-invalid @enderror" name="files" value="">
                        @error('files')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <br>
                <a onclick="document.getElementById('hire-me').submit();" class="genric-btn primary-border">Hire</a>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{asset('assets/javascript/dropzone.js')}}"></script>
    <script>
        $("div#upload-attachments").dropzone({
            url: "/attachments/upload",
            maxFilesize: 2,
            dictDefaultMessage: '<span class="text-center"><span class="font-lg visible-xs-block visible-sm-block visible-lg-block"><span class="font-lg"><i class="fa fa-caret-right text-danger"></i> Drop files <span class="font-xs">to upload</span></span><span>&nbsp&nbsp<h4 class="display-inline"> (Or Click)</h4></span>',
            dictResponseError: 'Error uploading file!',
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
            },
            success: function(file,response)
            {
                var temp = $('#attach-files').val();
                temp += response.addr;
                $('#attach-files').val(temp);
            },
        });
    </script>
@endsection