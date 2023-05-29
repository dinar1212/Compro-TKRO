<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TKRO - ARYA SAPUTRA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('/images/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('temuser/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('temuser/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('temuser/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('temuser/css/style.css') }}" rel="stylesheet">
</head>

<body>
     <!-- NAVBAR START -->
@include('layouts.components2.navbar')
<!-- NAVBAR END -->

<!-- Main content -->

        @yield('content')
  
<!-- content -->

<!-- FOOTER START -->
@include('layouts.components2.footer')
<!-- FOOTER END -->
     


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="https://www.instagram.com/aryasptrad_/">Dinar Arya Saputra</a>, Si Kasep Kalem.
            </p>
           
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('temuser/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('temuser/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('temuser/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('temuser/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('temuser/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('temuser/js/main.js') }}"></script>
</body>

</html>