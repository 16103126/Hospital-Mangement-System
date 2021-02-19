<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: #66CDAA;">
	<h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Update Payment Information</h1>
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$errors}}</li>
		@endforeach
	</ul>
</div>
@endif
<form method="post" action="{{route('payment.update',['id'=>$payment->id])}}" style="margin-right: 400px; margin-left: 400px; margin-top: 50px;">
	@csrf
	
	<div class="form-group">
		<label for="p_name"><h5>Patient Name:</h5></label>
		<input type="text" name="p_name" class="form-control" required value="{{$payment->p_name}}">
	</div>
	<div class="form-group">
		<label for="date"><h5>Date:</h5></label>
		<input type="text" name="date" class="form-control" required value="{{$payment->date}}">
	</div>
	<div class="form-group">
		<label for="r_price"><h5>Room Price:</h5></label>
		<input type="text" name="r_price" class="form-control" required value="{{$payment->r_price}}">
	</div>
	<div class="form-group">
		<label for="d_price"><h5>Doctor Price:</h5></label>
		<input type="text" name="d_price" class="form-control" required value="{{$payment->d_price}}">
	</div>
	<div class="form-group">
		<label for="t_price"><h5>test Price:</h5></label>
		<input type="text" name="t_price" class="form-control" required value="{{$payment->t_price}}">
	</div>
	<div class="form-group">
		<label for="m_price"><h5>Medicine Price:</h5></label>
		<input type="text" name="m_price" class="form-control" required value="{{$payment->m_price}}">
	</div>

	
	<input type="submit" name="update" value="update" class="btn btn-primary" >
</form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>