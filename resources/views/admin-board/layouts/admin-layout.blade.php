<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>@yield('title')</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.jpg') }}">


    <!-- DEMO CHARTS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/public/demo/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/public/demo/chartist-plugin-tooltip.css') }}">

    <!-- Template -->
    <link rel="stylesheet" href="{{ asset('assets/admin/public/graindashboard/css/graindashboard.css') }}">

    {{-- main.css --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/public/css/style.css') }}">

    {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}"> --}}

    {{-- notify laravel --}}
    @notifyCss

</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
    {{-- @include('admin-board.loader.admin-loader') --}}
    @yield('content')


    <script src="{{ asset('assets/admin/public/graindashboard/js/graindashboard.js') }}"></script>
    <script src="{{ asset('assets/admin/public/graindashboard/js/graindashboard.vendor.js') }}"></script>

    <!-- DEMO CHARTS -->
    <script src="{{ asset('assets/admin/public/demo/resizeSensor.js') }}"></script>
    <script src="{{ asset('assets/admin/public/demo/chartist.js') }}"></script>
    <script src="{{ asset('assets/admin/public/demo/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('assets/admin/public/demo/gd.chartist-area.js') }}"></script>
    <script src="{{ asset('assets/admin/public/demo/gd.chartist-bar.js') }}"></script>
    <script src="{{ asset('assets/admin/public/demo/gd.chartist-donut.js') }}"></script>

    {{-- jquery --}}
    {{-- <script src="{{ asset('assets/vendor/jQuery/jquery-3.6.1.min.js') }}"></script> --}}

    {{-- main js --}}
    <script>
        $.GDCore.components.GDChartistArea.init('.js-area-chart');
        $.GDCore.components.GDChartistBar.init('.js-bar-chart');
        $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
    </script>
    <script src="{{ asset('assets/admin/public/js/main.js') }}"></script>





    {{-- </x:notify-darkify> --}}
    {{-- notify js laravel --}}
    <x-notify::notify />
    @notifyJs


</body>

</html>
