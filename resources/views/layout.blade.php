<!DOCTYPE html>

<html>
<head>
	<title>Carrent</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</head>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href={{ url('/') }} class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="{{ url('/cars') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Car listings</a>
	<a href="{{ url('/rents') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Current rentals</a>
	@can('edit-users')
	<a href="{{ route('admin.users.index') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white float-right">User admin </a>
	@endcan
  </div>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>