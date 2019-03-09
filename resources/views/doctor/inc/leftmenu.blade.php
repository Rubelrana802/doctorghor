   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{ url('/dctr')}}">
       <img src="{{ asset('public/admin') }}/assets/images/logo.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">DoctorGhor</h5>
     </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">DOCTOR DASHBOARD</li>
      <li>
        <a href="{{ url('/dctr')}}" class="waves-effect">
        <i class="icon-home"></i> <span> Dashboard</span> <i class=""></i> </a>
      </li>
      <li>
        <a href="{{ url('/patient/view')}}" class="waves-effect">
        <i class="fa fa-male"></i> <span> All Patient List</span> <i class=""></i> </a>
      </li>
      <li>
        <a href="{{ url('/docotorm/manage')}}" class="waves-effect">
        <i class="fa fa-medkit" aria-hidden="true"></i> <span> All Medicine List</span> <i class=""></i> </a>
      </li>
   
   </div>
