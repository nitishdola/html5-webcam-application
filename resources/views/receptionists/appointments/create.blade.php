@extends('layouts.app')	
@section('content')
<h3>Add New Appointment</h3>

{!! Form::open(array('route' => 'receptionist.store', 'id' => 'scheme_store', 'class' => 'form-horizontal row-border')) !!}
	@include('appointments._form')
<div class="form-actions">
    {!! Form:: submit('Submit', ['class' => 'btn btn-success']) !!}
</div>
{!!form::close()!!}
@stop

