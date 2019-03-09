   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{ url('hospital/login')}}">
       <img src="{{ asset('public/admin') }}/assets/images/logo.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">DoctorGhor</h5>
     </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">HOSPITAL DASHBOARD</li>
      <li>
        <a href="{{ url('/hospital/login')}}" class="waves-effect">
        <i class="icon-home"></i> <span> Dashboard</span> <i class=""></i> </a>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-building-o" aria-hidden="true"></i>
          <span>Departments</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/hospitaldept/add') }}"><i class="fa fa-circle-o"></i> Add Department</a></li>
        <li><a href="{{ url('/hospitaldept/manage') }}"><i class="fa fa-circle-o"></i> Manage Department </a></li>
        </ul>
      </li>
      <li>
        <a href="{{ url('/doctor/add')}}" class="waves-effect">
        <i class="fa fa-user-md"></i></i> <span> Add Doctor</span> <i class=""></i> </a>
      </li>
      <li>
        <a href="{{ url('/doctor/manage')}}" class="waves-effect">
        <i class="fa fa-user-md"></i></i> <span> All Doctor</span> <i class=""></i> </a>
      </li>
   </div>
