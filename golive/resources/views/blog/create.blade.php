@extends('header')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="{{ url('/')}}" class="btn btn-outline-primary btn-sm">Go back</a>
            <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                <h1 class="display-4">Create a New Post</h1>
                <p>Fill and submit this form to create a post</p>

                <hr>
                <div class="formgrouping">
        <h2 class="co text-center"> Contact Us</h2>
            
        {{ Form::open(['url'=> 'blog/create']) }}

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

                </div>

</div>
</div>
</div>

@endsection