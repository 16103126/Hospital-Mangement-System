<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Presception Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style type="text/css">
    .box{
    width:2000px;
    height: 850px;
    margin: 100px auto;
    border: 1px solid #ccc;
    background-color: #8B008B;
    padding: 20px;

  }
  </style>
</head>

<body>
	<h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Update Presception Information</h1>
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$errors}}</li>
		@endforeach
	</ul>
</div>
@endif
<div class="container box" style="color: white; font-weight: bold; ">
  <h1 style="text-align: center;">United Hospital Limited</h1>
  
  <hr style="color: white;">
  <h3 style="text-align: center;">Doctor Presception</h3>
  <br>
<form method="post" action="{{route('presception.update',['id'=>$pres->id])}}" style="font-size: 20px;">
	@csrf
	
	<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Doctor Name</label>
      <input type="text" class="form-control" name="d_name" id="validationDefault01" value="{{$pres->d_name}}"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Date</label>
      <input type="text" name="date" class="form-control" id="validationDefault02" value="{{$pres->date}}"  required>
    </div>
    
  </div>
	
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Patient Name</label>
      <input type="text" name="p_name" class="form-control" id="validationDefault01" value="{{$pres->p_name}}"   required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Age</label>
      <input type="text" name="age" class="form-control" id="validationDefault02" value="{{$pres->age}}"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Gender</label>
      <input type="text" name="gender" class="form-control" id="validationDefault02" value="{{$pres->gender}}"   required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Disease Description</label>
      <textarea textarea  type="text" name="diseas" class="form-control" id="validationDefault01" value="{{$pres->diseas}}"  required></textarea>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">On Examination</label>
      <textarea type="text" name="examination" class="form-control" id="validationDefault02" value="{{$pres->examination}}"   required></textarea>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Provisional Diagnosis</label>
      <textarea  type="text" name="provisional" class="form-control" id="validationDefault01" value="{{$pres->provisional}}"  required></textarea>
  </div>
</div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Differential Diagnosis</label>
       <textarea type="text" name="differential" value="{{$pres->differential}}"  class="form-control" id="validationDefault02" required></textarea>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Lab Test</label>
      
      <textarea type="text" name="lab" class="form-control" value="{{$pres->lab}}" id="validationDefault01"  required></textarea>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Advices</label>
      <textarea type="text" value="{{$pres->advice}}" name="advice" class="form-control" id="validationDefault02"  required></textarea> 
    </div>
  </div>
  <div class="col-md-6 mb-5">
      <label for="validationDefault02">Medicine Writing</label>
      <textarea type="text" value="{{$pres->medicine}}" name="medicine" class="form-control" id="validationDefault02"  required></textarea> 
    </div>

 
 
  
  <button class="btn btn-danger" type="submit">Submit</button>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>