<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Login | Joinery Visitor </title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/argon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
    <style>
        .home-logo {
            max-width: 300px !important;
            max-height: 80px !important;
            margin-top: 0px;
            margin-bottom: 20px;
        }
        .text-heading{
            color: #8898aa !important;
        }
        .card-color{
            background-color: #f9f9f9 !important;
            box-shadow: 0px 0px 20px #ccc;
            border-radius: 20px;
        }
        .button-color{
            border-color: #cb302b !important;
            background-color: #cb302b !important;
        }
    </style>
</head>

<body class="bg-white">

    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-white py-7 ">
            <div class="container">
                <div class="header-body text-center mb-5 mt-0">
                    <div class="mt-0">
                        <img src="{{asset('/MJ new.png')}}" class="navbar-brand-img home-logo" alt="JOinery work Assessment">
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 ">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary card-color border-0 mb-0">

                        <div class="card-body px-lg-5">
                            <div class="text-center text-muted mb-4">
                            <h1 class="text-heading mb-0">Welcome!</h1>
                            <p class="text-heading ">Covid-19 Visitor health assessment system.</p>
                                <small>Sign in with credentials</small>
                            </div>

                            <div class="text-danger">
                                @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                                @endif
                            </div>

                            <form method="POST" action="">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Email" type="email" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password" name="password" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary button-color">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <script src="{{ asset('assets/js/argon.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>