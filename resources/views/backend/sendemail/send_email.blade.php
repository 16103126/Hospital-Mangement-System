<!DOCTYPE html>
<html>
<head>
	<title>Send Email</title>
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
<br>
<div class="container box">
	@if(count($errors)>0)
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">x</button>
		<ul>
			@foreach($errors-all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif

	@if($message=Session::get('success'))
        <div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">x</button>
		<strong>{{$message}}</strong>
	</div>
	@endif
	<form method="post" action="{{url('sendemail/send')}}" style="padding: 40px;">
		@csrf
		<div class="form-group">
			<h2>Email Sending</h2>
			<hr>
		</div>
		<div class="form-group">
			<label><h5>Enter Name</h5></label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label><h5>Enter Email</h5></label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label><h5>Enter Message</h5></label>
			<textarea name="message" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Send</button>
		</div>
	</form>
	
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>