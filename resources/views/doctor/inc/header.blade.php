
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top gradient-scooter">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="icon-bell"></i><span class="badge badge-primary badge-up"> </span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have  Notifications
          <span class="badge badge-primary"> </span>
          </li>
        @if(Auth::check())
          <li class="list-group-item">
            <a href="javaScript:void();">
              <div class="media">
                <i class="icon-people fa-2x mr-3 text-info"></i>
                <div class="media-body">
                  <h6 class="mt-0 msg-title">New Registered Users</h6>
                  <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                </div>
              </div>
            </a>
          </li>
        @endif
          <li class="list-group-item"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo Auth::guard('doctor')->user()->name ?></h6>
             <p class="user-subtitle"></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Profile Update</li>
        <li class="dropdown-divider"></li>
        <li> <a class="dropdown-item" href="{{ url('/dctr/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="icon-power mr-2"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ url('/dctr/logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </li>
      </ul>
    </li>
  </ul>
</nav>
</header>