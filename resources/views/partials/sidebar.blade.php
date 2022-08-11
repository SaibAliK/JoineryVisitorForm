<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand pb-0" href="{{route('admin.dashboard')}}">
        <img src="{{asset('/MJ new.png')}}" class="navbar-brand-img sidebar-image" alt="JOinery work Assessment">
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">

          <li class="nav-item @routeis('admin.dashboard') active @endrouteis">
            <a class="nav-link " href="{{route('admin.dashboard')}}">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item @routeis('language.index') active @endrouteis">
            <a class="nav-link " href="{{route('language.index')}}">
              <i class="ni ni-planet text-orange"></i>
              <span class="nav-link-text">Language setup</span>
            </a>
          </li>
          <li class="nav-item @routeis('zone.index') active @endrouteis">
            <a class="nav-link " href="{{route('zone.index')}}">
              <i class="ni ni-planet text-orange"></i>
              <span class="nav-link-text">Zone setup</span>
            </a>
          </li>
          <li class="nav-item @routeis('department.index') active @endrouteis">
            <a class="nav-link" href="{{route('department.index')}}">
              <i class="ni ni-planet text-orange"></i>
              <span class="nav-link-text">Department setup</span>
            </a>
          </li>
          <li class="nav-item @routeis('visitor_form_link') active @endrouteis">
            <a class="nav-link" href="{{route('visitor_form_link')}}">
              <i class="ni ni-planet text-orange"></i>
              <span class="nav-link-text"> Arrival forms</span>
            </a>
          </li>
          <li class="nav-item @routeis('personnel.list') active @endrouteis">
            <a class="nav-link" href="{{route('personnel.list')}}">
              <i class="fa fa-user text-info" aria-hidden="true"></i>
              <span class="nav-link-text">Visitor Form Setup</span>
            </a>
          </li>
          <li class="nav-item @routeis('fail_visitor') active @endrouteis">
            <a class="nav-link" href="{{route('fail_visitor')}}">
              <i class="fa fa-user text-danger" aria-hidden="true"></i>
              <span class="nav-link-text">Pending arrival</span>
            </a>
          </li>
          <!-- <li class="nav-item @routeis('success_assessment') active @endrouteis">
            <a class="nav-link" href="{{route('success_assessment')}}">
              <i class="fa fa-user text-success" aria-hidden="true"></i>
              <span class="nav-link-text">Passed Pre Temp assessment</span>
            </a>
          </li>
          <li class="nav-item @routeis('fail_visitor') active @endrouteis">
            <a class="nav-link" href="{{route('fail_visitor')}}">
              <i class="fa fa-user text-danger" aria-hidden="true"></i>
              <span class="nav-link-text">Failed Pre Temp assessment</span>
            </a>
          </li>
          <li class="nav-item @routeis('visitor_list') active @endrouteis">
            <a class="nav-link" href="{{route('visitor_list')}}">
              <i class="fa fa-user text-info" aria-hidden="true"></i>
              <span class="nav-link-text">All Pre temp assessment</span>
            </a>
          </li> -->
          <li class="nav-item @routeis('success_arrival') active @endrouteis">
            <a class="nav-link" href="{{route('success_arrival')}}">
              <i class="ni ni-single-copy-04 text-success"></i>
              <span class="nav-link-text">Admitted ok</span>
            </a>
          </li>
          <li class="nav-item @routeis('fail_arrival') active @endrouteis">
            <a class="nav-link" href="{{route('fail_arrival')}}">
              <i class="ni ni-single-copy-04 text-danger"></i>
              <span class="nav-link-text">Not admitted</span>
            </a>
          </li>
          <li class="nav-item @routeis('exception_arrival') active @endrouteis ">
            <a class="nav-link" href="{{route('exception_arrival')}}">
              <i class="ni ni-single-copy-04 text-danger"></i>
              <span class="nav-link-text">Admitted with exception</span>
            </a>
          </li>
          <li class="nav-item @routeis('arrival_list') active @endrouteis">
            <a class="nav-link" href="{{route('arrival_list')}}">
              <i class="ni ni-single-copy-04 text-info"></i>
              <span class="nav-link-text">All submitted</span>
            </a>
          </li>
          <li class="nav-item @routeis('setting') active @endrouteis">
            <a class="nav-link" href="{{route('setting')}}">
              <i class="ni ni-settings-gear-65 pt-1 text-info"></i>
              <span class="nav-link-text">Settings</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>