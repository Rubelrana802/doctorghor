   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{ url('/patient')}}">
       <img src="{{ asset('public/admin') }}/assets/images/logo.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">DoctorGhor</h5>
     </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">PATIENT DASHBOARD</li>
      <li>
        <a href="{{ url('/patient')}}" class="waves-effect">
        <i class="icon-home"></i> <span> Dashboard</span> <i class=""></i> </a>
      </li> 
      <li>
        <a href="{{ url('patient/other/appointment')}}" class="waves-effect">
        <i class="fa fa-user-md"></i></i> <span> Add Appointment</span> <i class=""></i> </a>
      </li>
   </div>
