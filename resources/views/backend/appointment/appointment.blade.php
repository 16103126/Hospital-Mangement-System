<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Make Appointment</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  
    <h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Make Appointment</h1>
 
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{route('appointment')}}" style="margin-right: 400px; margin-left: 400px; margin-top: 50px;">
          @csrf
          <div class="form-group">    
              <label for="patient_name"><h5>Patient Name:</h5></label>
              <input type="text" class="form-control" name="patient_name" required/>
          </div>
          <div class="form-group">    
              <label for="address"><h5>Address:</h5></label>
              <input type="text" class="form-control" name="address" required/>
          </div>
          <div class="form-group">
              <label for="age"><h5>Age:</h5></label>
              <input type="number" class="form-control" name="old" required/>
          </div>
          <div class="form-group">
              <label for="gender"><h5>Gender:</h5></label>
              <input type="text" class="form-control" name="gender" required/>
          </div>
          <div class="form-group">
              <label for="phone"><h5>Phone:</h5></label>
              <input type="number" class="form-control" name="phone" required/>
          </div>
          <div class="form-group">
              <label for="email"><h5>Email:</h5></label>
              <input type="email" class="form-control" name="email" required/>
          </div>
          <div class="form-group">
              <label for="doctor"><h5>Doctor Name:</h5></label>
              <input type="text" class="form-control" name="doctor" required/>
          </div>
          
          <div class="form-group">
              <label for="diseas"><h5>Diseas:</h5></label>
              <input type="text" class="form-control" name="diseas" required/>
          </div>

                                  
          <button type="submit" class="btn btn-warning">Submit</button>
                  
      </form>
  </div>
</div>
</div>
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>


 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>