@extends('admin.layouts.default')	
@section('content')
<h3>Add New Scheme</h3>
{!! Form::open(array('route' => 'scheme.store', 'id' => 'scheme_store', 'class' => 'form-horizontal row-border')) !!}

<div class="col-md-6">
	<div class="widget box">
		<div class="widget-header">
			<h3>Add New Scheme</h3>
		</div>
		<div class="widget-content">
			{!! Form::open(array('route' => 'scheme.store', 'id' => 'scheme_store', 'class' => 'form-horizontal row-border')) !!}
				@include('schemes._create_scheme_form')
			<div class="form-actions">
			    {!! Form:: submit('Submit', ['class' => 'btn btn-success']) !!}
			</div>
			{!!form::close()!!}
			
		</div>
	</div>
</div>
@stop