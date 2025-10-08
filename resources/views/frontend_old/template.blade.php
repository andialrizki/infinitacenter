<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $settings->title }} | @if (Request::segment(1) == '')
            home @else{{ Request::segment(1) }}
        @endif
    </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset($settings->favicon) }}" rel="icon">
    <link href="{{ asset($settings->favicon) }}" rel="apple-touch-icon">


    <!-- Vendor CSS Files -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL'0,
                'wght'400,
                'GRAD'0,
                'opsz'48
        }
    </style>
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/') }}/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/') }}/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: SoftLand - v4.9.1
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    {{-- for header --}}
    @include('frontend.components.header')

    @include('frontend.components.hero')

    {{-- yield content --}}
    <main id="main">
        @yield('content')
    </main><!-- End #main -->

    @include('frontend.components.footer')

    <div id="preloader"></div>
   <a href="https://wa.me/{{ str_replace('-', '', str_replace(' ', '', $settings->mobile_phone)) }}"
        class="whatsapppop d-flex align-items-center justify-content-center" target="blank">
        <img src="../../storage/photos/home/whatsapp-60.png" alt="chat to admin hiera whatsapp" class="rounded"
            style="width: 100%">
    </a>
  

    <!-- Vendor JS Files -->
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/') }}/js/main.js"></script>
    @stack('js')

</body>

</html>
