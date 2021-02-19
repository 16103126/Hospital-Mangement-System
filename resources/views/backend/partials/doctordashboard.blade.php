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
    <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <li class="nav-item has-treeview">
            <a href="" class="nav-link active">
                Doctor
                  <i class="fas fa-angle-left right"></i>
             
            </a>
            <ul class="nav nav-treeview">
             
              
              <li class="nav-item">
                <a href="{{route('appointmentshow')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Patient Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('doctorinformation')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Doctor </p>
                </a> 
              </li>
               <li class="nav-item">
                <a href="{{route('schedule.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Schedule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('presception.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Presception</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <li class="nav-item ">
            <a href="{{route('logout')}}" class="nav-link active bg-danger" >
                Logout
                
                </a>
              </li>
     </aside>

