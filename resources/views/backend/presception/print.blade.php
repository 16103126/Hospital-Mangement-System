<!DOCTYPE html>
<html>
<head>
	<title>Print presception</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align: center;">United Hospital Limited</h1>
	
	<hr style="color: white;">
	<h3 style="text-align: center;">Doctor Presception</h3>
	<br>
	       <div style="padding: 10px;">
			<p style="display: inline; ">Doctor Name:<span style="margin-left: 7px;"> {{$pres->d_name}}</span></p>
			<p style="display: inline; margin-left: 100px;">Date:<span style="margin-left: 7px;"> {{$pres->date}}</span></p>
			</div>
			<div style="padding: 10px;">
			<p style="display: inline;">Patient Name:<span style="margin-left: 7px;"> {{$pres->p_name}}</span></p>
			<p style="display: inline; margin-left: 50px;">Age:<span style="margin-left: 7px;"> {{$pres->age}}</span></p>
			<p style="display: inline; margin-left: 50px;">Gender:<span style="margin-left: 7px;"> {{$pres->gender}}</span></p>
			</div>
			<hr>
            <br>
       <table class="table">
		<tr>
		<th >Disease Description</th>
		<td >{{$pres->diseas}}</td>
		</tr>
		<tr>
		<th >On Examinations</th>
		<td >{{$pres->examination}}</td>
		</tr>
		<tr>
		<th >Provisional Diagnosis</th>
		<td >{{$pres->provisional}}</td>
		</tr>
		<tr>
		<th >Differential Diagnosis</th>
		<td >{{$pres->differential}}</td>
		</tr>
		<tr>
		<th >Lab test</th>
		<td >{{$pres->lab}}</td>
		</tr>
		<tr>
		<th >Advice</th>
		<td >{{$pres->advice}}</td>
		</tr>
		<tr>
		<th >Medicine</th>
		<td >{{$pres->medicine}}</td>
		</tr>
		
		
	</table>
	<br>
	<br>
	<br>
	<h5 style="text-decoration: overline; margin-left: 20px;">Doctor Signature</h5>
			</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>