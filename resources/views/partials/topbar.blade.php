<nav class="navbar navbar-top navbar-expand navbar-dark theme-bg border-bottom">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!--top heading-->
      <h1 class="page-heading">@yield('page-heading')</h1>
      <!--top heading-->

      <!-- Navbar links -->
      <ul class="navbar-nav align-items-center  ml-md-auto ">
        <li class="nav-item d-xl-none">
          <!-- Sidenav toggler -->
          <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
        <li class="nav-item">
        <a href="{{ route('logout') }}" class="text-white">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>