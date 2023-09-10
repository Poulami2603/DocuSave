<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocuSave - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">   
    <link rel='stylesheet' href="{{ asset('css/style.css') }}">
</head>
<body>
 <div class=" sidenavbar">
    <div class="row">
        <div class="col-md-3">
        <header class="header" role="banner">
  <div class="nav-wrap mt-5">
    <h1>Hi Poulami !</h1>
    <nav class="main-nav" role="navigation">
      <ul class="unstyled list-hover-slide">
        <li><a href="/dashboard">All Documents</a></li>
        <li><a href="/search">Search By Name</a></li>
        <li><a href="/upload">Upload New Documents</a></li>
        <li><a href="/">Log out</a></li>
      </ul>
    </nav>
  </div>
</header>
        </div>
        <div class="col-md-9">
        <nav class="navbar navbar-light bg-light">
  <span class="navbar-text">
   <h1>Welcome to DocuSave.</h1> 
    Here, you can save your important documents and use then whenever you want without any hazzel.
  </span>
</nav>  
@hasSection('content')
    @yield('content')
@else
<h1>No Content Found</h1>
@endif
<nav class="navbar navbar-light bg-light">
  <span class="navbar-text">
    Hope you like DocuSave app. Please share your experience with us. We will be happy to serve more.
  </span>
</nav>     
 </div>
    </div>
 </div>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>