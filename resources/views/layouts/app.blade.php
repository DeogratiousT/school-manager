<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('css/creative/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/creative/app-creative.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('includes.navbar')

        <main>
            @yield('content')
        </main>

        <!-- START FOOTER -->
        @include('includes.footer')
        <!-- END FOOTER -->
    </div>

    <!-- bundle -->
    <script src="{{ asset('js/creative/vendor.min.js') }}"></script>
    <script src="{{ asset('js/creative/app.min.js') }}"></script>

</body>
</html>
