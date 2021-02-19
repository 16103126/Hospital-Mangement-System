@include('backend.partials.dashboard')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background: #008080;">
   <div class="row" style="margin-left: 0px;">
<div class="col-sm-12">
    <h1 style="text-align: center; margin-top: 0px; margin-left: -100px; background: #66CDAA; padding: 20px;">Patient Information</h1>    
    <div style="margin-left: 150px; margin-right: 150px;">
  <table class="table table-striped" style="margin-left: 200px; color: white; font-weight: bold; width: 1600px;">
    <thead style="color: yellow;">
  
        <tr>
          <td>S.L</td>
          <td>Patient Name</td>
          <td>Address</td>
          <td>Age</td>
          <td>Gender</td>
          <td>Phone</td>
          <td>Email</td>
          <td>Doctor Name</td>
          <td>Diseas</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($appointment as $appointment)
        <tr>
            <td>{{$appointment->id}}</td>
            <td>{{$appointment->patient_name}}</td>
            <td>{{$appointment->address}}</td>
            <td>{{$appointment->old}}</td>
            <td>{{$appointment->gender}}</td>
            <td>{{$appointment->phone}}</td>
            <td>{{$appointment->email}}</td>
            <td>{{$appointment->doctor}}</td>
            <td>{{$appointment->diseas}}</td>
            <td>
                <a href="{{ route('appointment.edit',$appointment->id)}}" class="btn btn-primary">Edit</a>
            </td>
           
           
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
<div>
</div>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>