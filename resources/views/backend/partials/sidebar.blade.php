 
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
                Admin
                  <i class="fas fa-angle-left right"></i>
             
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="appointmentbyreception" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Appointment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="appointmentList" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Appointment List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="patientInformation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Patient Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="doctorinformation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Doctors</p>
                </a> 
              </li>
               <li class="nav-item">
                <a href="{{route('schedule.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Schedule</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('diagnostic.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diagnostics</p>
                </a> 
              </li>
               <li class="nav-item">
                <a href="{{route('room.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Room</p>
                </a> 
              </li>
               <li class="nav-item">
                <a href="{{route('payment.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment</p>
                </a> 
              </li>
              <li class="nav-item">
                <a href="{{route('contact.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a> 
              </li>
              
            </ul>
          </li>
        </ul>
      </nav>


 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <li class="nav-item has-treeview">
            <a href="{{route('login.create')}}" class="nav-link active">
              <i class="nav-icon "></i>
              <p>
                Reception
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="appointmentbyreception" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Appointment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="appointmentList" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Appointment List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="patientInformation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Patient Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="doctorinformation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Doctors</p>
                </a> 
              </li>
               <li class="nav-item">
                <a href="{{route('schedule.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Schedule</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('diagnostic.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diagnostics</p>
                </a> 
              </li>
               <li class="nav-item">
                <a href="{{route('room.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Room</p>
                </a> 
              </li>
          
              <li class="nav-item">
                <a href="{{route('payment.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment</p>
                </a> 
              </li>
               
              <li class="nav-item">
                <a href="{{route('contact.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a> 
              </li>
              
            </ul>
          </li>
        </ul>
      </nav>
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <li class="nav-item has-treeview">
            <a href="{{route('login.create')}}" class="nav-link active">
              <i class="nav-icon "></i>
              <p>
                Doctor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
             
              <li class="nav-item">
                <a href="patientInformation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Patient Information</p>
                </a>
              </li>
              
               <li class="nav-item">
                <a href="{{route('schedule.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Schedule</p>
                </a>
              </li>
               
              
            </ul>
          </li>
        </ul>
      </nav>
          
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
   
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!--<li class="nav-item has-treeview menu-open">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="appointmentbyreception" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Appointment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="appointmentList" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Appointment List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="patientInformation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Patient Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="doctorinformation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Doctors</p>
                </a> 
              </li>
               <li class="nav-item">
                <a href="{{route('schedule.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Schedule</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('diagnostic.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diagnostics</p>
                </a> 
              </li>
               <li class="nav-item">
                <a href="{{route('room.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Room</p>
                </a> 
              </li>
               <li class="nav-item">
                <a href="{{route('payment.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment</p>
                </a> 
              </li>
              <li class="nav-item">
                <a href="{{route('contact.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a> 
              </li>
            </ul>
          </li>
          -->
          </ul>
        </nav>
       </aside>