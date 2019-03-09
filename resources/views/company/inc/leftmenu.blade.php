   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{ url('/company/login')}}">
       <img src="{{ asset('public/admin') }}/assets/images/logo.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">DoctorGhor</h5>
     </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">COMPANY DASHBOARD</li>
      <li>
        <a href="{{ url('/company/login')}}" class="waves-effect">
        <i class="icon-home"></i> <span> Dashboard</span> <i class=""></i> </a>
      </li>
      <li>
        <a href="{{ url('/medicine/add')}}" class="waves-effect">
        <i class="fa fa-medkit" aria-hidden="true"></i> <span> Add Medicine</span> <i class=""></i> </a>
      </li>
      <li>
        <a href="{{ url('/medicine/manage')}}" class="waves-effect">
        <i class="fa fa-list-alt" aria-hidden="true"></i> <span> All Medicine List</span> <i class=""></i> </a>
      </li>
   
   </div>
