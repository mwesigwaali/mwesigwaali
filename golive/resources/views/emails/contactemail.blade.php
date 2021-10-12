@extends('header')

@section('')
<h2>Contact Form</h2>
<div>
Someone just contacted us:
</div>
<div> Subject: {{ $subject }} </div>
<div> Message: {{ $emailmessage }} </div>

@stop
