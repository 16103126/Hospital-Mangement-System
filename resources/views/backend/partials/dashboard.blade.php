@include('backend.reception')
<style type="text/css">
  a{
    font-size: 20px;
  }
  
</style>



 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>
    <li class="nav-item ">
            <a href="{{route('admin')}}" class="nav-link active bg-primary" >
                Admin
                
                </a>
              </li>
              <li class="nav-item ">
            <a href="{{route('reception')}}" class="nav-link active bg-warning" >
                Receptionist
                
                </a>
              </li>
              <li class="nav-item ">
            <a href="{{route('doctor')}}" class="nav-link active bg-success" >
                Doctor
                
                </a>
              </li>
    <li class="nav-item ">
            <a href="{{route('logout')}}" class="nav-link active bg-danger" >
                Logout
                
                </a>
              </li>
     </aside>
