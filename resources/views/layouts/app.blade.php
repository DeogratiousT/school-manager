<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mentor Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/landing/style.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

  <!-- =======================================================
  * Template Name: Mentor - v2.2.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <div id="app">
        <!-- ======= Header ======= -->
        @include('includes.navbar')
        <!-- End Header -->

        <main>
            @yield('content')
        </main>

        <!-- START FOOTER -->
        @include('includes.footer')
        <!-- END FOOTER -->
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landing/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('landing/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('landing/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('landing/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/landing/main.js') }}"></script>

</body>
</html>
