@include('backend.partials.dashboard')
<!DOCTYPE html>
<html>
<head>
	<title>Room Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Room Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background: #008080;">
	<h1 style="text-align: center; margin-top: 0px; background: #66CDAA; padding: 20px;">Room Information</h1>
	<div style="margin-left: 300px;">
<div style="margin-left: 300px;">
	<a style="font-size: 30px;"  href="{{route('room.create')}}" class="btn btn-success">Add</a>
    <br>
    <br>
    {{$room->links()}}
</div>
<br>
@if($message=Session::get('success'))
<div class="alert alert-success" style="margin-left: 300px; margin-right: 450px;">
	<p>{{$message}}</p>
</div>
@endif
<table class="table table-bordered table-striped" style="margin-left: 300px; color: white; font-weight: bold; width: 1300px;">
	<thead style="color: yellow;">	
		<tr>
		<th >Room Number</th>
		<th >Patient Name</th>
		<th >Room Type</th>
		<th >Room Price</th>
		<th >Action</th>
	</tr>
	</thead>
     <tbody>
	@foreach($room as $row)

	<tr>
	<td>{{$row->number}}</td>
	<td>{{$row->name}}</td>
	<td>{{$row->type}}</td>
	<td>{{$row->price}}</td>
	<td>
		<a href="{{route('room.edit', ['id'=>$row->id])}}" class="btn btn-success">Edit</a>
		<a href="{{route('room.destroy', ['id'=>$row->id])}}" class="btn btn-danger">Delete</a>
		

		

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
