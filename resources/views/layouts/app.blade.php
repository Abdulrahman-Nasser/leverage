<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Leverage', 'Leverage') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.jpg') }}" type="image/x-icon">
    <!-- cdn font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- vendor files -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/wow/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/plyr.min.css') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">


    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    {{-- main css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @notifyCss

</head>

<body>
    <div id="app">

        <main class="">
            @yield('content')
        </main>


        <!-- whatsApp  Button -->
        <a href="https://wa.me/qr/UJYYOOK2XBMWA1" target="_blanc" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center whats_logo"><i class="bi bi-whatsapp"></i></a>

        <!-- whatsApp  Button -->
        <a href="#" id="scroll-top2" class="top d-flex align-items-center justify-content-center  mt-5"><i class="bi bi-chevron-up"></i></a>

    </div>



    <!-- vendor files js -->
    <script src="{{ asset('assets/vendor/jQuery/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>


    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <x-notify::notify />
    @notifyJs
</body>

</html>
