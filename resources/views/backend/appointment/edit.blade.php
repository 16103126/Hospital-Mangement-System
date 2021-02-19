
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment Update</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: #66CDAA;">
  
        <h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Update Appointment Information</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{route('appointment.update', $appointment->id)}}" style="margin-right: 400px; margin-left: 400px; margin-top: 50px;">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="patient_name"><h5>Patient Name:</h5></label>
                <input type="text" class="form-control" name="patient_name" value={{ $appointment->patient_name }} />
            </div>

            <div class="form-group">
                <label for="address"><h5>Address:</h5></label>
                <input type="text" class="form-control" name="address" value={{ $appointment->address }} />
            </div>

            <div class="form-group">
                <label for="age"><h5>Age:</h5></label>
                <input type="text" class="form-control" name="old" value={{ $appointment->old }} />
            </div>
            <div class="form-group">
                <label for="gender"><h5>Gender:</h5></label>
                <input type="text" class="form-control" name="gender" value={{ $appointment->gender }} />
            </div>
            <div class="form-group">
                <label for="phone"><h5>Phone:</h5></label>
                <input type="text" class="form-control" name="phone" value={{ $appointment->phone }} />
            </div>
            <div class="form-group">
                <label for="email"><h5>Email:</h5></label>
                <input type="text" class="form-control" name="email" value={{ $appointment->email }} />
            </div>
            <div class="form-group">
                <label for="diseas"><h5>Doctor:</h5></label>
                <input type="text" class="form-control" name="doctor" value={{ $appointment->doctor }} />
            </div>
            <div class="form-group">
                <label for="diseas"><h5>Diseas:</h5></label>
                <input type="text" class="form-control" name="diseas" value={{ $appointment->diseas }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>