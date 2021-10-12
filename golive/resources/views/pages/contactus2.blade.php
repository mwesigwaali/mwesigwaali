@extends('header')
@section('content')
<div class="formgrouping">
        <h2 class="co text-center"> Contact Us</h2>
            
        {{ Form::open(['url'=> '/contactus']) }}

        <div>
        {{ Form::label('subject', 'Subject:') }}
        {{ Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'Enter subject']) }}
        </div>
        <div>
            {{ Form::label('message', 'Message:') }}
            {{ Form::textarea('message', null, ['class'=>'form-control', 'placeholder'=>'Enter Post Message']) }}

        </div>
        <br/>

        <div class="col-12 text-center">
        {{ Form::submit('Send Message', ['class'=>'btn btn-primary']) }}

        </div>

        {{ Form::close() }}
 
</div>
@stop