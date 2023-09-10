<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocuSave Authentication</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">   
    <link rel='stylesheet' href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel='stylesheet' href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css">
    <link rel='stylesheet' href="{{ asset('css/authstyle.css')}}">
</head>
<body>
<div id="login-box">
<form action="{{route('register-user')}}" method="post">
    @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    @csrf
  <div class="left">
  <h5>Welcome to DocuSave</h5>
    <input type="text" name="name" placeholder="Username" >
    <input type="text" name="phone" placeholder="Phone" >
    <input type="text" name="email" placeholder="E-mail" >
    <input type="password" name="password" placeholder="Password" >
    <input type="submit" name="signup" placeholder="Sign Up">
    <p>Already have an account? <a href="/">Sign In</a></p>
  </div>
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>