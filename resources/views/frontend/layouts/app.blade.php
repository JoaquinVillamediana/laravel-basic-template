<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="canonical" href="">
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:type" content="website">
    <meta itemprop="description" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:domain" content="">
    <meta name="csrf-token" content="{{ Session::token() }}">
    <title>Title</title>
    <link rel="stylesheet" href="{{ asset('/vendor/bootstrap.min.css') }}" crossorigin="anonymous">
    <link href="{{ asset('/vendor/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css">
    {{--
    <link rel="stylesheet" href="{{ asset('/css/frontend/general.css') }}" crossorigin="anonymous"> --}}
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <script src="{{ asset('/vendor/jquery-3.6.0.min.js') }}" crossorigin="anonymous"></script>

</head>

<body>

    @yield('content')

    {{-- <script src="{{ asset('/js/frontend/general.js') }}"></script> --}}

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/vendor/popper.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('/vendor/bootstrap.min.js') }}" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('/vendor/jquery.easing.compatibility.js') }}" crossorigin="anonymous"></script>

</body>

</html>