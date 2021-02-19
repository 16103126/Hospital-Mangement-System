<!DOCTYPE html>
<html>
<head>
	<title>Doctor Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: #66CDAA;">
   <h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Add Doctor Information</h1>
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$errors}}</li>
		@endforeach
	</ul>
	
</div>
@endif

    <form method="post" action="{{route('doctors.store')}}" style="margin-right: 400px; margin-left: 400px; margin-top: 50px;" enctype="multipart/form-data">
          @csrf
          <div class="form-group" >    
              <label for="name"><h5>Name:</h5></label>
              <input  type="text" class="form-control" name="name" required/>
          </div>
          <div class="form-group" >    
              <label  for="spacialist"><h5>Specialist:</h5></label>
              <input  type="text" class="form-control" name="spacialist" required/>
          </div>
          <div class="form-group" >
              <label for="qualification"><h5>Qualification:</h5></label>
              <input  type="text" class="form-control" name="qualification" required/>
          </div>
          <div class="form-group" >
              <label for="schedule"><h5>Schedule:</h5></label>
              <input  type="text" class="form-control" name="schedule" required/>
          </div>
          <div class="form-group" >
              <label for="contact"><h5>Phone Number:</h5></label>
              <input type="number" class="form-control" name="contact" required/>
          </div>
          <div class="form-group" >
              <label for="email"><h5>Email:</h5></label>
              <input  type="email" class="form-control" name="email" required/>
          </div>
          <div class="form-group" >
              <label for="room"><h5>Room Number:</h5></label>
              <input  type="number" class="form-control" name="room" required/>
          </div>
           <div class="form-group" >
      <label for="image"><h5>Select Profile Image</h5></label>
      <div class="col-md-8">
        <input type="file" name="image" required/>
      </div>
    </div>                             
    <br>
    
    <div class="form-group text-center" style="width: 200px;">
            <input style="width: 150px; font-size:30px;" type="submit" name="Add" class="btn btn-primary input-lg" value="Add" />
         
        </div>
         
      </form>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>