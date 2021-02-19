
<!DOCTYPE html>
<html>
<head>
	<title>Presception</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
	<div class="container box" style="color: white; font-weight: bold; ">
	<h1 style="text-align: center;">United Hospital Limited</h1>
	
	<hr style="color: white;">
	<h3 style="text-align: center;">Doctor Presception</h3>
	<br>
<form method="post" action="{{route('presception.store')}}"  style="font-size: 20px;">
	  @csrf
	<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Doctor Name</label>
      <input type="text" class="form-control" name="d_name" id="validationDefault01"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Date</label>
      <input type="text" name="date" class="form-control" id="validationDefault02"  required>
    </div>
    
  </div>
	
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Patient Name</label>
      <input type="text" name="p_name" class="form-control" id="validationDefault01"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Age</label>
      <input type="text" name="age" class="form-control" id="validationDefault02" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Gender</label>
      <input type="text" name="gender" class="form-control" id="validationDefault02"  required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Disease Description</label>
      <textarea textarea  type="text" name="diseas" class="form-control" id="validationDefault01"  required></textarea>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">On Examination</label>
      <textarea type="text" name="examination" class="form-control" id="validationDefault02"  required></textarea>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Provisional Diagnosis</label>
      <textarea  type="text" name="provisional" class="form-control" id="validationDefault01"  required></textarea>
  </div>
</div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Differential Diagnosis</label>
       <textarea type="text" name="differential" class="form-control" id="validationDefault02" required></textarea>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Lab Test</label>
      
      <textarea type="text" name="lab" class="form-control" id="validationDefault01" required></textarea>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Advices</label>
      <textarea type="text" name="advice" class="form-control" id="validationDefault02"  required></textarea> 
    </div>
  </div>
  <div class="col-md-6 mb-5">
      <label for="validationDefault02">Medicine Writing</label>
      <textarea type="text" name="medicine" class="form-control" id="validationDefault02"  required></textarea> 
    </div>

 
 
  
  <button class="btn btn-danger" type="submit">Submit</button>
</form>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>