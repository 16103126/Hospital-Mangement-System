
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background: #008080;">
	<h1 style="text-align: center;  background: #66CDAA; padding: 20px;">Doctor Information</h1>

<table class="table table-bordered table-striped" style="margin-left: 300px; color: white; font-weight: bold; width: 1500px;">
	<thead  style="color: yellow;">
	<tr>
		<th >Image</th>
		<th >Name</th>
		<th >Specialist</th>
		<th >Qualification</th>
		<th >Schedule</th>
		<th >Contact Number</th>
		<th >Email</th>
		<th >Room Number</th>
		
	</tr>
	</thead>
	<tbody>
	@foreach($data as $row)

	<tr>
	<td><img src="{{URL::to('/')}}/image/{{$row->image}}" class="img-thumbnail" width="75"></td>
	<td>{{$row->name}}</td>
	<td>{{$row->spacialist}}</td>
	<td>{{$row->qualification}}</td>
	<td>{{$row->schedule}}</td>
	<td>{{$row->contact}}</td>
	<td>{{$row->email}}</td>
	<td>{{$row->room}}</td>
	
	</tr>
	@endforeach
	</tbody>
</table>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
