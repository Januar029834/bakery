<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="" name="keywords">
    <meta content="" name="description">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link href="template/foody/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="template/baker/lib/animate/animate.min.css" rel="stylesheet">
    <link href="template/baker/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="template/baker/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="template/baker/css/style.css" rel="stylesheet">

    <style>
        .text-orange {
            color:#EAA636 !important
        }

        .btn-orange, .bg-orange {
            background-color:#EAA636 !important
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @yield('styles')
    @yield('scripts')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-orange" role="status"></div>
    </div>
    <!-- Spinner End -->

    @include('includes.header')

    @yield('hero')

    @yield('content')


    @include('includes.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-orange btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="template/baker/lib/wow/wow.min.js"></script>
    <script src="template/baker/lib/easing/easing.min.js"></script>
    <script src="template/baker/lib/waypoints/waypoints.min.js"></script>
    <script src="template/baker/lib/counterup/counterup.min.js"></script>
    <script src="template/baker/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="template/baker/js/main.js"></script>
</body>

</html>
