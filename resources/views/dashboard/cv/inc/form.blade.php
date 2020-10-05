<fieldset>
    <legend>{{$name}} CV</legend>
    <div class="form-group">
        <label for="tf1">{{__('Title')}}</label>
        {{ Form::text('title',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'title'), 'id' => 'tf1', 'placeholder' => "Title"])}}
        {!! FrmErrHelp::showErrors($errors, 'title') !!} 
    </div>
    <div class="form-group">
        <label for="tf2">{{__('Select CV')}}</label>
        <div class="custom-file">
            {{ Form::file('cv_addr',['class' => 'custom-file-input '.FrmErrHelp::hasError($errors, 'cv_addr'),'accept'=>'application/pdf', 'id' => 'tf2'])}}
            <label class="custom-file-label" for="tf2">{{__('Choose CV')}}</label>
            {!! FrmErrHelp::showErrors($errors, 'cv_addr') !!}
        </div>
    </div>
    <div class="form-actions">
        <button class="btn btn-primary" type="submit">{{$name}}</button>
    </div>
</fieldset>