@include('backend.partials.dashboard')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background: #008080;">
   <div class="row" style="margin-left: 300px;">
<div class="col-sm-12">
    <h1 style="text-align: center; margin-top: 0px; margin-left: -350px; background: #66CDAA; padding: 20px;">Appointment List</h1> 
    <div style="margin-left: 200px;">
    <div class="col-sm-12" style="margin-left: -150px; margin-right: 200px;">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>  
  <table class="table border table-striped" style="margin-left: -150px; color: white; font-weight: bold;">
    <thead style="color: yellow;">
        <tr>
          <td>S.L</td>
          <td>Patient Name</td>
          <td>Address</td>
          <td>Age</td>
          <td>Gender</td>
          <td>Phone</td>
          <td>Email</td>
          <td>Doctor</td>
          <td>Diseas</td>
          <td colspan = 4>Actions</td>
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
                <a href="{{route('sendemail.index')}}" class="btn btn-success">Sent Mail</a>
            </td>
            <td>
                <a href="{{ route('appointment.edit',$appointment->id)}}" class="btn btn-primary">Edit</a>
            </td>
            
            <td>
                <form action="{{ route('appointment.destroy', $appointment->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            
        </tr>
        @endforeach
    </tbody>
  </table>
 </div>
 </div> 
</div>


 

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>