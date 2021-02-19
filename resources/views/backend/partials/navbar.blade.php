
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light" style="height: 70px; ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('dashboard')}}" class="nav-link " style="font-weight: bold; font-size: 30px; margin-top: -15px; color: red;">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('admin')}}" class="nav-link " style="font-weight: bold; font-size: 30px; margin-top: -15px; color: red;">Admin</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('reception')}}" class="nav-link " style="font-weight: bold; font-size: 30px; margin-top: -15px; color: red;">Receptionist</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('doctor')}}" class="nav-link " style="font-weight: bold; font-size: 30px; margin-top: -15px; color: red;">Doctor</a>
      </li>
  

      <li class="nav-item">
        <a href="logout" class="nav-link" style="font-weight: bold; font-size: 30px; margin-left: 1000px; margin-top: -15px; color: red;">Log Out</a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->