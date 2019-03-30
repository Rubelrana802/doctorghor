   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{ url('/superadmin')}}">
       <img src="{{ asset('public/admin') }}/assets/images/logo.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">DoctorGhor</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">ADMIN DASHBOARD</li>
        <li><a href="{{ url('/superadmin')}}" class="waves-effect">
          <i class="icon-home"></i> <span> Dashboard</span> <i class=""></i>
        </a></li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-area-chart" aria-hidden="true"></i>
          <span>District</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/district/save') }}"><i class="fa fa-circle-o"></i> Add District</a></li>
        <li><a href="{{ url('/district/manage') }}"><i class="fa fa-circle-o"></i> Manage District</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-area-chart" aria-hidden="true"></i>
          <span>Thana</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/thana/save') }}"><i class="fa fa-circle-o"></i> Add Thana</a></li>
        <li><a href="{{ url('/thana/manage') }}"><i class="fa fa-circle-o"></i> Manage Thana</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-hospital-o"></i>
          <span>Hospital</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/hospital/add') }}"><i class="fa fa-circle-o"></i> Add Hospital</a></li>
        <li><a href="{{ url('/hospital/manage') }}"><i class="fa fa-circle-o"></i> Manage Hospital</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-building-o" aria-hidden="true"></i>
          <span>Department</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/department/add') }}"><i class="fa fa-circle-o"></i> Add Department</a></li>
        <li><a href="{{ url('/department/manage') }}"><i class="fa fa-circle-o"></i> Manage Department </a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-user-md"></i>
          <span>Doctor</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/admindoctor/add') }}"><i class="fa fa-circle-o"></i> Add Doctor</a></li>
        <li><a href="{{ url('/admindoctor/manage') }}"><i class="fa fa-circle-o"></i> Manage Doctor</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-user"></i>
          <span>Register Doctor</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{ url('/reg/doctor/view') }}"><i class="fa fa-circle-o"></i> Add Doctor</a></li>
        </ul>
      </li>    
   </div>