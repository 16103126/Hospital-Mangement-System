@include('backend.partials.dashboard')
<!DOCTYPE html>
<html>
<head>
	<title>Presception List</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	
</head>
<body>
<h1 style="text-align: center; margin-top: 0px; background: #66CDAA; padding: 20px;">Presception Information</h1>
<div style="margin-left: 100px;">
<div style="margin-left: 300px;">
	<a style="font-size: 30px;"  href="{{route('presception.create')}}" class="btn btn-success">Create presception</a>
    <br>
    <br>
    {{$pres->links()}}
</div>
<br>
@if($message=Session::get('success'))
<div class="alert alert-success" style="margin-left: 300px; margin-right: 250px;">
	<p>{{$message}}</p>
</div>
@endif


<table class="table table-bordered table-striped" style="margin-left: 300px; width: 1600px;" id="myTable">
	<thead >
		<th>Presception Id</th>
		<th>Doctor Name</th>
		<th>Patient Name</th>
		<th >Date</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody id="result">
	@foreach($pres as $row)

	<tr>
	<td>{{$row->id}}</td>
	<td>{{$row->d_name}}</td>
	<td>{{$row->p_name}}</td>
	<td>{{$row->date}}</td>
	
	


	<td>
		<a href="{{route('presception.edit', ['id'=>$row->id])}}" class="btn btn-success">Edit</a>
		<a href="{{route('presception.destroy', ['id'=>$row->id])}}" class="btn btn-danger">Delete</a>
		<a href="{{route('presception.show', $row->id)}}" class="btn btn-warning">Show</a>
		<a href="{{route('presception.pdf', $row->id)}}" class="btn btn-primary">Print</a>
		


		
	</td>
	</tr>
	
	@endforeach
	</tbody>
	
</table>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>