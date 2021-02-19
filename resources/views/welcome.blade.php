<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Unitted Hospital Limited</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    @include('frontend.partials.header')
    @include('frontend.partials.nav')
    @include('frontend.partials.banner')
    @include('frontend.partials.about')
    @include('frontend.partials.department')
    @include('frontend.partials.contact')
    @include('frontend.partials.footer')

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>
<form method="post" action="{{route('doctor.store')}}" enctype="multipart/form-data" class="form-horizontal">
    <div class="form-group">
      <label class="col-md-4 text-right">Enter Name</label>
      <div class="col-sm-8">
        <input type="text" name="name" class="form-control-input-lg" />
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="form-group">
      <label class="col-md-4 text-right">Enter Specialist</label>
      <div class="col-md-8">
        <input type="text" name="spacialist" class="form-control-input-lg" />
      </div>
    </div>
     <br>
    <br>
    <br>
    <div class="form-group">
      <label class="col-md-4 text-right">Enter Qualification</label>
      <div class="col-md-8">
        <input type="text" name="qualification" class="form-control-input-lg" />
      </div>
    </div>
     <br>
    <br>
    <br>
    <div class="form-group">
      <label class="col-md-4 text-right">Enter Schedule</label>
      <div class="col-md-8">
        <input type="text" name="schedule" class="form-control-input-lg" />
      </div>
    </div>
     <br>
    <br>
    <br>
    <div class="form-group">
      <label class="col-md-4 text-right">Enter Contact</label>
      <div class="col-md-8">
        <input type="text" name="contact" class="form-control-input-lg" />
      </div>
    </div>
     <br>
    <br>
    <br>
    <div class="form-group">
      <label class="col-md-4 text-right">Enter Email</label>
      <div class="col-md-8">
        <input type="text" name="email" class="form-control-input-lg" />
      </div>
    </div>
     <br>
    <br>
    <br>
    <div class="form-group">
      <label class="col-md-4 text-right">Enter Room Number</label>
      <div class="col-md-8">
        <input type="text" name="room" class="form-control-input-lg" />
      </div>
    </div>
     <br>
    <br>
    <br>
    <div class="form-group">
      <label class="col-md-4 text-right">Select Profile Image</label>
      <div class="col-md-8">
        <input type="file" name="image" class="form-control-input-lg" />
      </div>
    </div>
     <br>
    <br>
    <br>
    <div class="form-group text-center">
        <input type="submit" name="Add" class="btn btn-primary input-lg" value="Add" />
      </div>
    </div>
</form>
<div align="right" style="margin-right: 200px; margin-top:
50px;"> 
<a href="{{route('doctor.index')}}" class="btn
btn-primary"><h1>Back</h1></a> </div>

