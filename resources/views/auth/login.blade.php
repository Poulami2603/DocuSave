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
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="{{route('login-user')}}" method="post">
				@if(Session::has('success'))
    			<div class="alert alert-success">{{Session::get('success')}}</div>
    			@endif
    			@if(Session::has('fail'))
    			<div class="alert alert-danger">{{Session::get('fail')}}</div>
    			@endif
				@csrf
				<div class="login__field">
					<input type="text" class="login__input" name="email" placeholder="User name / Email">
				</div>
				<div class="login__field">
					<input type="password" class="login__input" name="password" placeholder="Password">
				</div>
				<button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
                <div class="login__field">
                <h6>Don't have an account? <a href="/registration">Sign Up</a></h6>
				</div>				
			</form>
			<div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div> 
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>