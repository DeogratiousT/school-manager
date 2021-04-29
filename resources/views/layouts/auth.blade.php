<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Log In | School Manager</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('css/creative/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/creative/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('css/creative/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-left">
                            <a href="{{ route('dashboard') }}" class="logo-dark">
                                <span><img src="{{ asset('images/logo-dark.png') }}" alt="" height="18"></span>
                            </a>
                            {{-- <a href="{{ route('dashboard') }}" class="logo-light">
                                <span><img src="{{ asset('images/logo.png') }}" alt="" height="18"></span>
                            </a> --}}
                        </div>

                        <!-- Start Content -->

                        @yield('content')

                        <!-- End Content -->

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3">Explore, Learn!</h2>
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i> Good Skills, Better Life! . <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <p>
                        - School Manager
                    </p>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->

        <!-- bundle -->
        <script src="{{ asset('js/creative/vendor.min.js') }}"></script>
        <script src="{{ asset('js/creative/app.min.js') }}"></script>

    </body>

</html>