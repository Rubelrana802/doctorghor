<header>
        <div id="fixed-header-dark" class="header-output fixed-header">
            <div class="container header-in">
                <div class="row">
                    <nav class="navbar navbar-expand-lg">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="" href="#" id="navbarDropdown" role=""  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bars" style="font-size: 20px; margin-top: 20px;"></i>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{ route('patient.login') }}">My Appointment</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('hospital.login') }}">Hospital Login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('company.login') }}">Medicine Company Login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Help</a>
        </div>
      </li>
                                            
                  <div class="col-lg-12">
                        <a id="logo" href="{{ url('/' )}}" class="d-inline-block margin-tb-15px"><img src="{{ asset('public/frontend') }}/assets/img/doctor.png" alt="logo" style="width: 200px;"></a>
                        <!-- <a class="mobile-toggle padding-13px background-main-color" href="#"><i class="fas fa-bars"></i></a> -->
                    </div>
                        
                    <div class="col-lg-8 position-inherit">
                        <ul id="menu-main" class="nav-menu float-lg-right link-padding-tb-20px">
                        <!-- add menu --> 
                        </ul>
                    </div> 
                    <div class="col-lg-10">
                        <a href="{{ url('/dctr/login') }}" class="margin-tb-20px d-inline-block text-up-small float-left float-lg-right" style="color: #DA2138; font-weight: bold; margin-right: 25px;"><i class="fa fa-user"></i>  Doctor Login</a>
                    </div>
                  </ul>

                </nav>
                </div>

  </div>   
</header>                                         