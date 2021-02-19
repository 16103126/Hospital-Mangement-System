<!DOCTYPE html>
<html>
<head>
	<title>Doctor Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: #66CDAA;">
  <h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Update Doctor Information</h1>
<div align="right">
  <a href="{{route('doctors.index')}}" class="btn btn-primary">Back</a>
</div>
<br>

  <form method="post" action="{{route('doctors.update', $data->id)}}" enctype="multipart/form-data" style="margin-right: 400px; margin-left: 400px; margin-top: 0px;">
@csrf
@method('PUT')

<div class="form-group">
  <label class="text-left"><h5>Enter Name:</h5></label>
  <div>
    <input type="text" name="name" value="{{$data->name}}" class="form-control input-lg" >
  </div>
</div>
<div class="form-group">
  <label class=" text-left"><h5>Enter Specialist:</h5></label>
  <div>
    <input type="text" name="spacialist" value="{{$data->spacialist}}" class="form-control input-lg" >
  </div>
</div>
<div class="form-group">
  <label class=" text-left"><h5>Enter Qualification:</h5></label>
  <div>
    <input type="text" name="qualification" value="{{$data->qualification}}" class="form-control input-lg" >
  </div>
</div>
<div class="form-group">
  <label class=" text-left"><h5>Enter Schedule:</h5></label>
  <div>
    <input type="text" name="schedule" value="{{$data->schedule}}" class="form-control input-lg" >
  </div>
</div>
<div class="form-group">
  <label class=" text-left"><h5>Enter Phone Number:</h5></label>
  <div>
    <input type="text" name="contact" value="{{$data->contact}}" class="form-control input-lg" >
  </div>
</div>
<div class="form-group">
  <label class=" text-left"><h5>Enter Email:</h5></label>
  <div>
    <input type="text" name="email" value="{{$data->email}}" class="form-control input-lg" >
  </div>
</div>
<div class="form-group">
  <label class=" text-left"><h5>Enter Room Number:</h5></label>
  <div>
    <input type="text" name="room" value="{{$data->room}}" class="form-control input-lg" >
  </div>
</div>
<div class="form-group">
  <label class="text-left"><h5>Select Profile Pic:</h5></label>
  <div class="col-md-8">
    <input type="file" name="image" />
    <img src="{{URL::to('/')}}/image/{{$data->image}}" class="img-thumbnail" width="100" />
    <input type="hidden" name="hidden_iamge" value="{{$data->image}}" />
  </div>
</div>
<br>
<div class="form-group text-center" style="margin-left: -900px;">
   <input type="submit" name="update" class="btn btn-primary input-lg" value="update">
</div>
</form>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>