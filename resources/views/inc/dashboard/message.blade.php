@if(session()->has('message'))
    <div class="page-message" role="alert">
        <i class="fa fa-fw fa-wrench"></i>{{$name}}: <span class="text-muted-dark">{{session()->get('message')}}</span>.
        <a href="#" class="btn btn-sm btn-icon btn-warning ml-1" aria-label="Close" onclick="$(this).parent().fadeOut()"><span
                aria-hidden="true"><i class="fa fa-times"></i></span></a>
    </div>
@endif