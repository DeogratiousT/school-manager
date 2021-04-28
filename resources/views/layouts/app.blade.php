<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/hyper/creative/layouts-detached.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2019 12:46:41 GMT -->
<head>
    <meta charset="utf-8" />
    <title>School Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('css/creative/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/creative/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('css/creative/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />

    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    @yield('head-imports')

    </head>

    <body data-layout="detached" class="loading">
        <!-- Topbar Start -->
        @include('includes.topnav')
        <!-- end Topbar -->

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Begin page -->
            <div class="wrapper">

                <!-- ========== Left Sidebar Start ========== -->
                    @include('includes.leftsidebar')
                <!-- Left Sidebar End -->

                <div class="content-page">
                    <div class="content">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12 py-2">                                
                                <div class="float-left">
                                    @yield('breadcrumbs')
                                </div>
                                <div class="float-right">
                                    @yield('page-right')
                                </div>
                                <div class="clearfix"></div>                              
                            </div>
                        </div>     
                        <!-- end page title -->

                        <!-- Messages --> 
                        @include('includes.messages')
                        <!-- End Messages -->

                        @yield('content')

                    </div> <!-- End Content -->

                    <!-- Footer Start -->
                    @include('includes.footer')
                    <!-- end Footer -->
                </div> <!-- content-page -->

            </div> <!-- end wrapper-->
        </div>
        <!-- END Container -->

        <!-- Right Sidebar -->
            @include('includes.rightsidebar')
        <!-- /Right-bar -->

        <!-- bundle -->
        <script src="{{ asset('js/creative/vendor.min.js') }}"></script>
        <script src="{{ asset('js/creative/app.min.js') }}"></script>

        @stack('scripts')

        <script type="text/javascript">
            setTimeout(() => document.querySelector('.alert').remove(), 10000);
        </script>

        <!-- Apex js -->
        {{-- <script src="assets/js/vendor/apexcharts.min.js"></script> --}}

        <!-- Todo js -->
        {{-- <script src="assets/js/ui/component.todo.js"></script> --}}

        <!-- demo app -->
        {{-- <script src="assets/js/pages/demo.dashboard-crm.js"></script> --}}
        <!-- end demo js-->
        
    </body>

<!-- Mirrored from coderthemes.com/hyper/creative/layouts-detached.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2019 12:46:42 GMT -->
</html>