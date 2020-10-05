@extends('layouts.master')
@section('content')
<div class="wrapper">
    <div class="page">
        @include('includes.profile')
        <div class="page-inner">

          <header class="page-title-bar">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item active">
                          <a href="user-profile.html"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Overview</a>
                      </li>
                  </ol>
              </nav>
          </header>
      
          <div class="page-section">
            <div class="row">
              
              @include('includes.profile-sidebar')
              <div class="col-lg-8">
                <div class="card card-fluid">
                  <h6 class="card-header"> Public Profile </h6>
                  <div class="card-body">
                    {{Form::model($student ?? '', ['method' => 'put','route' => ['student.update',$student->id], 'class' => 'student-form', 'files' => true])}}
                      @include('student.includes.form',['name' => 'Update'])
                    {{Form::close()}}
                  </div>
                </div>
                
                <div class="card card-fluid">
                  <h6 class="card-header"> Social Networks </h6>
                  <form method="post">
                    
                    <div class="list-group list-group-flush mt-3 mb-0">
                      
                      <div class="list-group-item">
                        
                        <div class="list-group-item-figure">
                          <div class="tile tile-md bg-twitter">
                            <i class="fab fa-twitter"></i>
                          </div>
                        </div>
                        
                        <div class="list-group-item-body">
                          <input type="text" class="form-control" id="twitter" placeholder="Twitter Username" value="@stilearningTwit">
                        </div>
                      </div>
                      
                      <div class="list-group-item">
                        
                        <div class="list-group-item-figure">
                          <div class="tile tile-md bg-facebook">
                            <i class="fab fa-facebook-f"></i>
                          </div>
                        </div>
                        
                        <div class="list-group-item-body">
                          <input type="text" class="form-control" id="facebook" placeholder="Facebook Username">
                        </div>
                      </div>
                      
                      <div class="list-group-item">
                        
                        <div class="list-group-item-figure">
                          <div class="tile tile-md bg-linkedin">
                            <i class="fab fa-linkedin"></i>
                          </div>
                        </div>
                        
                        <div class="list-group-item-body">
                          <input type="text" class="form-control" id="linkedin" placeholder="Linkedin Username">
                        </div>
                      </div>
                      
                      <div class="list-group-item">
                        
                        <div class="list-group-item-figure">
                          <div class="tile tile-md bg-dribbble">
                            <i class="fab fa-dribbble"></i>
                          </div>
                        </div>
                        
                        <div class="list-group-item-body">
                          <input type="text" class="form-control" id="dribbble" placeholder="Dribbble Username">
                        </div>
                      </div>
                      
                      <div class="list-group-item">
                        
                        <div class="list-group-item-figure">
                          <div class="tile tile-md bg-github">
                            <i class="fab fa-github"></i>
                          </div>
                        </div>
                        
                        <div class="list-group-item-body">
                          <input type="text" class="form-control" id="github" placeholder="Github Username">
                        </div>
                      </div>
                    </div>
                    
                    <div class="card-body">
                      <hr>
                      
                      <div class="form-actions">
                        <button type="submit" class="btn btn-primary ml-auto">Update Socials</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</div>
@endsection



@section('jsScript')
  @include('student.includes.validation')
  @include('includes.show-image',['image_id' => 'fileupload-avatar'])
@endsection