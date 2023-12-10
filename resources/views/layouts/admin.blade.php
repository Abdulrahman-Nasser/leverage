<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Title -->
    <title>Leverage | Admin</title>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">

    <!-- Template -->
    <link rel="stylesheet" href="{{ asset('assets/admin/public/graindashboard/css/graindashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/public/graindashboard/css/main.css') }}">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    {{-- main.css --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/public/graindashboard/css/main.css') }}">

</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
    <div id="app">


            @yield('content')



    </div>




    <script src="{{ asset('assets/admin/public/graindashboard/js/graindashboard.js') }}"></script>
    <script src="{{ asset('assets/admin/public/graindashboard/js/graindashboard.vendor.js') }}"></script>



    <!-- DEMO CHARTS -->
    <script src="{{ asset('assets/admin/public/demo/resizeSensor.js') }}"></script>
    <script src="{{ asset('assets/admin/public/demo/chartist.js') }}"></script>
    <script src="{{ asset('assets/admin/public/demo/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('assets/admin/public/demo/gd.chartist-area.js') }}"></script>
    <script src="{{ asset('assets/admin/public/demo/gd.chartist-bar.js') }}"></script>
    <script src="{{ asset('assets/admin/public/demo/gd.chartist-donut.js') }}"></script>
    <script>
        $.GDCore.components.GDChartistArea.init('.js-area-chart');
        $.GDCore.components.GDChartistBar.init('.js-bar-chart');
        $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
    </script>

</body>

</html>
