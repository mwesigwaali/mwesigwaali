@extends('header')
@section('content')
<div class="container formgroup">
        <h2 class="text-center"> Contact Us</h2>
            
        {{ Form::open(['url'=> '/contactus']) }}

        <div class="control-group col-12">
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Enter Title']) }}
        </div>
        <div class="control-group col-12">
            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body', null, ['class'=>'form-control', 'placeholder'=>'Enter Post Message']) }}

        </div>
        <br/>

        <div class="col-12 text-center">
        {{ Form::submit('Send Message', ['class'=>'btn btn-primary']) }}

        </div>

        {{ Form::close() }}
 
</div>
@stop