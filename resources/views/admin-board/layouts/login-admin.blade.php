<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Title -->
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.jpg') }}">

    <!-- Template -->
    <link rel="stylesheet" href="{{ asset('assets/admin/public/graindashboard/css/graindashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/public/graindashboard/css/main.css') }}">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    {{-- main.css --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/public/graindashboard/css/main.css') }}">

</head>


<body class="">


    <main class="main">
        @yield('content')
    </main>



    <script src="{{ asset('assets/admin/public/graindashboard/js/graindashboard.js') }}"></script>
    <script src="{{ asset('assets/admin/public/graindashboard/js/graindashboard.vendor.js') }}"></script>
</body>

</html>
