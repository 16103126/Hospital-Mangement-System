@include('backend.partials.dashboard')
<!DOCTYPE html>
<html>
<head>
	<title>User Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background: #008080;">
	<h1 style="text-align: center; margin-top: 0px; background: #66CDAA; padding: 20px;">User Information</h1>
<div style="margin-left: 300px;">

    <br>
    <br>
 
</div>
<br>
<div style="margin-left: 700px;">
<a style="font-size: 30px;"  href="{{route('registration.create')}}" class="btn btn-success">Add</a>

	@if($message=Session::get('success'))
<div class="alert alert-success" style="margin-right: 350px;">
	<p>{{$message}}</p>
</div>
@endif
<table class="table table-bordered table-striped" style=" width: 1000px; color: white; font-weight: bold;">
	<thead  style="color: yellow;">
	<tr>
		<th >Name</th>
		<th >Email</th>
		<th>Role</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
	@foreach($user as $row)

	<tr>
	
	<td>{{$row->name}}</td>
	<td>{{$row->email}}</td>
	<td>{{$row->role}}</td>
	<td>
		<a href="{{route('user.edit',['id'=>$row->id])}}" class="btn btn-success">Edit</a>
		<a href="{{route('user.destroy',['id'=>$row->id])}}" class="btn btn-danger">Delete</a>
	</td>
	</tr>
	@endforeach
	</tbody>
</table>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
