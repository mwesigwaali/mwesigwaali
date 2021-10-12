<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>{{ config('app.name') }}</title>
		<link rel="shortcut icon" href="{{ asset('img/icon1.jpg') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap-4.4.1.css') }}" >	
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		
		
	</head>
    <body>
    <nav class="navbar bg-light navbar-light navbar-expand-lg">
            
        <a href="{{ url('/')}}" class="navbar-brand"><img src="img/logo.png" alt="Logo" titl1e="Logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ url('/')}}" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="{{ url('/about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="{{ url('/contactus')}}" class="nav-link">Contact Us</a></li>
                <li class="nav-item"><a href="{{ url('/blog/create')}}" class="nav-link">Create</a></li>
                <li class="nav-item"><a href="{{ url('/pages.contactus')}}" class="nav-link">Edit</a></li>
            </ul>
        </div>

        </nav>
        @yield('content')
        


            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="{{ asset('js/popper.min.js')}}"></script>
            <script src="{{ asset('js/bootstrap-4.4.1.js')}}"></script>
        </div>
    </body>
</html>