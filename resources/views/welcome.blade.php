@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">Book an appointment</div>
                <div class="panel-body">
                    @include('appointments._form')
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <h3> Live Camera</h3>
            <div id="example" style="height:300px; width: 400px ">
                <div id="example"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_libraries')
<script src="{{ asset('assets/js/webcam/photobooth_min.js') }}"></script>
<script src="{{ asset('assets/js/webcam/script.js') }}"></script>
<script src="{{ asset('assets/js/webcam/hijs.js') }}"></script>
@stop
