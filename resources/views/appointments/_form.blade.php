<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! Form::label('name', 'Name', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-8">
    {!! Form::text('name', null, ['class' => 'form-control required', 'id' => 'name', 'placeholder' => 'Enter Receptionist name', 'autocomplete' => 'off',]) !!}
  </div>
  {!! $errors->first('name', '<span class="help-inline">:message</span>') !!}
</div>
<br /><br />

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
  {!! Form::label('mobile', 'Mobile Number', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-8">
    {!! Form::number('mobile_number', null, ['class' => 'form-control required', 'id' => 'mobile', 'placeholder' => 'Enter Mobile Number of the Visitor', 'autocomplete' => 'off',]) !!}
  </div>
  {!! $errors->first('mobile', '<span class="help-inline">:message</span>') !!}
</div>
<br /><br />

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
  {!! Form::label('meet_persion', 'Whom to meet', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-8">
    {!! Form::text('meet_persion', null, ['class' => 'form-control required', 'id' => 'meet_persion', 'placeholder' => 'Whom to meet', 'autocomplete' => 'off',]) !!}
  </div>
  {!! $errors->first('meet_persion', '<span class="help-inline">:message</span>') !!}
</div>
<br /><br />


<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
  {!! Form::label('designation_id', 'Designation', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-8">
    {!! Form::text('designation_id', null, ['class' => 'form-control required', 'id' => 'designation_id']) !!}
  </div>
  {!! $errors->first('designation_id', '<span class="help-inline">:message</span>') !!}
</div>
<br /><br />

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
  {!! Form::label('in_time', 'In Time', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-8">
    {!! Form::text('in_time', null, ['class' => 'datetimepicker form-control required', 'id' => 'in_time']) !!}
  </div>
  {!! $errors->first('in_time', '<span class="help-inline">:message</span>') !!}
</div>
<br /><br />

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
  {!! Form::label('out_time', 'Out Time', array('class' => 'col-md-4 control-label')) !!}
  <div class="col-md-8">
    {!! Form::text('out_time', null, ['class' => 'datetimepicker form-control required', 'id' => 'out_time']) !!}
  </div>
  {!! $errors->first('out_time', '<span class="help-inline">:message</span>') !!}
</div>
<br /><br />

<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}" id="gallery">
{!! Form::label('out_time', 'Out Time', array('class' => 'col-md-4 control-label')) !!}
</div>