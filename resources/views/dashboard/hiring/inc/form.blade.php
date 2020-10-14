<fieldset>
    <legend>{{$name}} Project</legend>
    @if ($name == 'Update')
        <div class="card card-figure">
            <figure class="figure">
              <img class="img-fluid" src="{{asset($project->pic_addr)}}" style="width: 300px;" alt="Card image cap"> 
            </figure>
        </div>
    @endif
    <div class="form-group">
        <label for="tf1">{{__('Title')}}</label>
        {{ Form::text('title',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'title'), 'id' => 'tf1', 'placeholder' => "Title"])}}
        {!! FrmErrHelp::showErrors($errors, 'title') !!} 
    </div>
    <div class="form-group">
        <label for="tf2">Description</label>
        {{Form::textarea('description',null,['class' => 'form-control '.FrmErrHelp::hasError($errors, 'description'), 'id' => 'tf2', 'rows','3'])}}
        {!! FrmErrHelp::showErrors($errors, 'description') !!} 
    </div>
    <div class="form-group">
        <label class="col-form-label" for="tf7">Select Status</label>
        {{Form::select('status', ['popular' => 'Popular', 'latest' => 'Latest', 'upcoming' => 'Upcoming'], null, ['placeholder' => 'Pick a status...','class' => 'custom-select '.FrmErrHelp::hasError($errors, 'status'),'id'=>'tf7'])}}
        {!! FrmErrHelp::showErrors($errors, 'status') !!} 
      </div>
    <div class="list-group-item d-flex justify-content-between align-items-center">
        <span>Rating</span>
        <span class="rating rating-sm {{FrmErrHelp::hasError($errors, 'rating')}}">
            {{Form::radio('rating','5',false,['id' => "ratingSm5"])}}
            <label for="ratingSm5"><span class="fa fa-star"></span></label>
            {{Form::radio('rating','4',false,['id' => "ratingSm4"])}}
            <label for="ratingSm4"><span class="fa fa-star"></span></label>
            {{Form::radio('rating','3',false,['id' => "ratingSm3"])}}
            <label for="ratingSm3"><span class="fa fa-star"></span></label>
            {{Form::radio('rating','2',false,['id' => "ratingSm2"])}}
            <label for="ratingSm2"><span class="fa fa-star"></span></label>
            {{Form::radio('rating','1',false,['id' => "ratingSm1"])}}
            <label for="ratingSm1"><span class="fa fa-star"></span></label>
        </span>
        {!! FrmErrHelp::showErrors($errors, 'rating') !!} 
    </div>
    <div class="form-group">
        <label for="tf3">{{__('Client')}}</label>
        {{ Form::text('client',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'client'), 'id' => 'tf3', 'placeholder' => "client"])}}
        {!! FrmErrHelp::showErrors($errors, 'client') !!} 
    </div>
    <div class="form-group">
        <label class="control-label" for="tf4">Completed</label>
        {{ Form::text('completed',null,['class' => 'form-control  flatpickr-input active '.FrmErrHelp::hasError($errors, 'completed'),'data-toggle' => 'flatpickr', 'readonly'=>'readonly', 'id' => 'tf4', 'placeholder' => "Completion Date"])}}
        {!! FrmErrHelp::showErrors($errors, 'completed') !!} 
    </div>
    <div class="form-group">
        <label for="tf5">Explain</label>
        {{Form::textarea('explain',null,['class' => 'form-control '.FrmErrHelp::hasError($errors, 'explain'), 'id' => 'tf5', 'rows','3'])}}
        {!! FrmErrHelp::showErrors($errors, 'explain') !!} 
    </div>
    <div class="form-group">
        <label for="tf6">{{__('Select Image')}}</label>
        <div class="custom-file">
            {{ Form::file('pic_addr',['class' => 'custom-file-input '.FrmErrHelp::hasError($errors, 'pic_addr'),'accept'=>'image/*', 'id' => 'tf6'])}}
            <label class="custom-file-label" for="tf6">{{__('Choose Image')}}</label>
            {!! FrmErrHelp::showErrors($errors, 'pic_addr') !!}
        </div>
    </div>
    <div class="form-actions">
        <button class="btn btn-primary" type="submit">{{$name}}</button>
    </div>
</fieldset>