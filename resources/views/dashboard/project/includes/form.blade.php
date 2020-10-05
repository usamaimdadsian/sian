<fieldset>
    <legend>{{$name}} Student</legend>
    <div class="media mb-3">
        <div class="user-avatar user-avatar-xl fileinput-button">
            <div class="fileinput-button-label"> Change photo </div>
            <div id="thumbnail">
                <img src="{{asset($student->pic_address ?? '')}}" alt=""> 
            </div>
            {{Form::file('pic_address', ['class' => FrmErrHelp::hasError($errors, 'pic_address'), 'id' => 'fileupload-avatar', ])}}
            {{FrmErrHelp::showErrors($errors,'pic_address')}}
        </div>
        
        <div class="media-body pl-3">
        <h3 class="card-title"> Public avatar </h3>
        <h6 class="card-subtitle text-muted"> Click the current avatar to change your photo. </h6>
        <p class="card-text">
            <small>JPG, GIF or PNG 400x400, &lt; 2 MB.</small>
        </p>
        <div id="progress-avatar" class="progress progress-xs fade">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="tf0">{{__('First Name')}}</label>
            {{ Form::text('first_name',null,['class' => 'form-control '.FrmErrHelp::hasError($errors, 'first_name'), 'id' => 'tf0', 'placeholder' => "First Name", 'title' => 'First letter should be capital'])}}
            {!! FrmErrHelp::showErrors($errors, 'first_name') !!} 
        </div>
        <div class="col-md-6 mb-3">
            <label for="tf1">{{__('Last Name')}}</label>
            {{ Form::text('last_name',null,['class' => 'form-control '.FrmErrHelp::hasError($errors, 'last_name'), 'id' => 'tf1', 'placeholder' => "Last Name", 'title' => 'Last letter should be capital'])}}
            {!! FrmErrHelp::showErrors($errors, 'last_name') !!} 
        </div>
    </div>
    
    <div class="form-group">
        <label for="tf14">{{__('Serial')}}</label>
        <div class="custom-number">
            {{ Form::number('serial',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'serial'), 'id' => 'tf14', 'placeholder' => "Serial", 'step' => '1'])}}
            {!! FrmErrHelp::showErrors($errors, 'serial') !!} 
        </div>
    </div>
    <div class="form-group">
        <label for="tf2">{{__('Roll no')}}</label>
        <div class="custom-number">
            {{ Form::number('roll_no',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'roll_no'), 'id' => 'tf2', 'placeholder' => "Roll No", 'step' => '1'])}}
            {!! FrmErrHelp::showErrors($errors, 'roll_no') !!} 
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="tf11">{{__('Select Class')}}</label>
            {{Form::select('clas_id', $classes, null, ['id' => 'tf11','class'=>'custom-select '.FrmErrHelp::hasError($errors, 'clas_id'),'placeholder' => 'Pick Class'])}}
            {!! FrmErrHelp::showErrors($errors, 'clas_id') !!} 
        </div>
        <div class="col-md-6 mb-3">
            <label for="tf12">{{__('Select Section')}}</label>
            {{Form::select('section_id', [], null, ['id' => 'tf12','class'=>'custom-select '.FrmErrHelp::hasError($errors, 'section_id'),'placeholder' => 'Pick Section'])}}
            {!! FrmErrHelp::showErrors($errors, 'section_id') !!} 
        </div>
    </div>
    <div class="form-group">
        <label for="tf20">{{__('Fee')}}</label>
        <div class="custom-number">
            {{ Form::number('Fee',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'fee'), 'id' => 'tf20', 'placeholder' => "fee", 'step' => '1'])}}
            {!! FrmErrHelp::showErrors($errors, 'fee') !!} 
        </div>
    </div>
    <div class="form-group">
        <label for="tf3">{{__('Father Name')}}</label>
        {{ Form::text('father_name',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'father_name'), 'id' => 'tf3', 'placeholder' => "Father Name"])}}
        {!! FrmErrHelp::showErrors($errors, 'father_name') !!} 
    </div>
    <div class="form-group">
        <label for="tf4">{{__('Father Profession')}}</label>
        {{ Form::text('father_profession',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'father_profession'), 'id' => 'tf4', 'placeholder' => "Father Profession"])}}
        {!! FrmErrHelp::showErrors($errors, 'father_profession') !!} 
    </div>
    <div class="form-group">
        <label for="tf5">{{__('Caste')}}</label>
        {{ Form::text('caste',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'caste'), 'id' => 'tf5', 'placeholder' => "Caste"])}}
        {!! FrmErrHelp::showErrors($errors, 'caste') !!} 
    </div>
    <div class="form-group">
        <label for="tf6">{{__('Cell NO')}}</label>
        {{ Form::text('cell_no',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'cell_no'), 'id' => 'tf6', 'placeholder' => "Cell NO"])}}
        {!! FrmErrHelp::showErrors($errors, 'cell_no') !!} 
    </div>
    <div class="form-group">
        <label for="tf7">{{__('Gender')}}</label>
        {{ Form::text('gender',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'gender'), 'id' => 'tf7', 'placeholder' => "Gender"])}}
        {!! FrmErrHelp::showErrors($errors, 'father_profession') !!}
    </div>
    <div class="form-group">
        <label for="tf8">{{__('Relegion')}}</label>
        {{ Form::text('relegion',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'relegion'), 'id' => 'tf8', 'placeholder' => "Relegion"])}}
        {!! FrmErrHelp::showErrors($errors, 'relegion') !!} 
    </div>
    <div class="form-group">
        <label for="tf9">{{__('CNIC')}}</label>
        {{ Form::text('cnic',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'cnic'), 'id' => 'tf9', 'placeholder' => "CNIC", 'title' => "XXXXX-XXXXXXX-X"])}}
        {!! FrmErrHelp::showErrors($errors, 'cnic') !!} 
    </div>
    <div class="form-group">
        <label for="tf10">{{__('Father CNIC')}}</label>
        {{ Form::text('father_cnic',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'father_cnic'), 'id' => 'tf10', 'placeholder' => "Father CNIC", 'title' => "XXXXX-XXXXXXX-X"])}}
        {!! FrmErrHelp::showErrors($errors, 'father_cnic') !!} 
    </div>
    <div class="form-group">
        <label class="control-label" for="tf12">{{__('Date of Birth')}}</label>
        {{Form::text('date_of_birth',null,['class'=>"form-control flatpickr-input ".FrmErrHelp::hasError($errors,'date_of_birth'),
        'data-toggle'=>"flatpickr",'data-alt-input'=>"true", 'data-alt-format'=>"F j, Y",'data-date-format'=>"Y-m-d",'placeholder' => 'Date of Birth' ,'name'=>"date_of_birth"])}}
        {!!FrmErrHelp::showErrors($errors, 'date_of_birth')!!}
    </div>
    <div class="form-group">
        <label for="tf13">{{__('Address')}}</label>
        {{ Form::text('address',null,['class' => 'form-control form-control-lg '.FrmErrHelp::hasError($errors, 'address'), 'id' => 'tf13', 'placeholder' => "Address"])}}
        {!!FrmErrHelp::showErrors($errors, 'address')!!}
    </div>
    <div class="form-actions">
        <button class="btn btn-primary" type="submit">{{$name}}</button>
    </div>
</fieldset>