<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>@yield('title')</title>
  <link rel="icon" href="" type="image/png">
  {{-- External CSS Libraries --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/argon.css') }}" type="text/css">
  <link rel="stylesheet" href=" {{ asset('css/toastr.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap-clockpicker.min.css')}}"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/csstables/datatable/datatables.min.css')}}">
  <style>
    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
      margin: 2px 0;
      white-space: nowrap;
      justify-content: flex-end;
    }

    .page-item.previous .page-link {
      border: none;
    }

    .page-item.next .page-link {
      border: none;
    }
    #toast-container>.toast-success {
      opacity: 1 !important;
    }

    #toast-container>.toast-error {
      opacity: 1 !important;
    }
    .sidenav-toggler{
      position: absolute;
      right: 50px;
      z-index: 100;
    }
    .theme-bg{
      background: #cb302b !important;
    }
    .sidebar-image{
      max-width: 190px !important;
      max-height: 70px !important;
      margin-top: -11px !important;
    }
    .nav-item.active{
      background-color: #ececec !important;
    }
  </style>
  @yield('css')

</head>

<body>
  <!-- SideNav Bar -->
  @include('partials.sidebar')
  {{-- end SideNav Bar --}}
  <div class="main-content" id="panel">

    <!-- TopNav Bar -->
    @include('partials.topbar')
    <!-- End TopNav Bar -->

    {{-- Dashboard Panel content section --}}
    @yield('dashboard-bar')
    {{-- Dashboard Panel content section --}}

    {{-- Page Content section --}}
    <div class="header pb-6 pt-3">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row @yield('hide-content')">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-body">
                  {{-- content section  --}}
                  @yield('content')
                  {{-- end content body  --}}
                </div>
              </div>
            </div>
          </div>
          @yield('more-content')
        </div>
      </div>
    </div>
    <!-- end Page Content section -->
  </div>
  {{-- External JS Libraries --}}
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
  <script src="{{ asset('assets/js/argon.js') }}"></script>
  <script src="{{ asset('js/toastr.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{asset('assets/jstables/datatable/datatables.min.js')}}"></script>
  <script src="{{ asset('admin_theme/assets/js/plugins/sweetalert2.js') }}"></script>
  <script src="{{asset('assets/jstables/datatable/datatables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap-clockpicker.min.js')}}"></script>

  <script type="text/javascript">
    $('.data-list-view,.datatable').DataTable();
  </script>
  <script>
    @if(session('message'))
    toastr.success("{{ session('message') }}");
    @elseif(session('error_msg'))
    toastr.error("{{ session('error_msg') }}");
    @endif
    toastr.options = {
      "timeOut": "10000",
    }
    function deleteAlert(url)
    {
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          location.href = url;
        }
      });
    }
    $('#time').clockpicker({
      donetext: 'Done',
      autoclose: true,
    });
  </script>
  @yield('js')
</body>

</html>