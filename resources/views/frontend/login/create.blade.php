<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style type="text/css">
  .box{
		width:600px;
		margin: 100px auto;
		border: 1px solid #ccc;
	}
	.has-error
	{
		border-color: #cc0000;
		background-color: #ffff99;
	}
	
	</style>
</head>
<body>
	<div class="container box"> 
	@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$errors}}</li>
		@endforeach
	</ul>
	
</div>
@endif

<br>

<form method="post" action="{{route('login.create')}}" style="padding: 40px;">
	@csrf
	<div class="form-group">
		<h2>Login Form</h2>
			<hr>
	</div>
	
	<div class="form-group">
		<label for="email"><h5>Email:</h5></label>
		<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
	</div>
	<div class="form-group">
		<label for="password"><h5>Password:</h5></label>
		<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
	</div>
	
	
	<div class="form-group">
		<button type="Submit" class="btn btn-primary">Login</button>
	</div>
	
</form>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>