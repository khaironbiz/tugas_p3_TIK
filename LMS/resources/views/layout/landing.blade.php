<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{ $class }}</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Event and Conference Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Eventre HTML Template v1.0">

    <!-- PLUGINS CSS STYLE -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/theme/plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/theme/plugins/font-awsome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Magnific Popup -->
    <link href="{{ asset('assets/theme/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <!-- Slick Carousel -->
    <link href="{{ asset('assets/themep/lugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/themep/lugins/slick/slick-theme.css') }}" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="{{ asset('assets/theme/css/style.css') }}" rel="stylesheet">

    <!-- FAVICON -->
    <link href="https://ppni.or.id/simk/image/LOGO-PPNI.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->
<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
    <div class="container-fluid p-0">
        <!-- logo -->
        <a class="navbar-brand" href="{{ route('landing.home') }}">
            <h4><b class="text-danger">{{ env('APP_NAME') }}</b> </h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing.home') }}">Home
                        <span>/</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing.news') }}">News
                        <span>/</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing.events') }}">Events
                        <span>/</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing.photos') }}">Photos
                        <span>/</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing.faq') }}">Faq
                        <span>/</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing.price') }}">Price
                        <span>/</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing.contact') }}">Contact</a>
                </li>
            </ul>
            <a href="{{ route('auth.login') }}" class="ticket">

                <span>Login</span>
            </a>
        </div>
    </div>
</nav>

<!--====  End of Navigation Section  ====-->
<section class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>{{ $class }}</h3>
                </div>
                <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('landing.home') }}">{{ $title }}</a></li>
                    <li class="breadcrumb-item active">{{ $class }}</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--================================
=            Yield            =
=================================-->

@yield('content')
<!--============================
=            Footer            =
=============================-->

<footer class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <div class="footer-logo">
                        <img src="https://ppni.or.id/simk/image/LOGO-PPNI.png" alt="logo" class="img-fluid" width="200px">
                    </div>
                    <ul class="social-links-footer list-inline">
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-youtube-play"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://themefisher.com/"><i class="fa fa-vimeo"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
    <div class="container">
        <div class="row">
            <div class="col-md-8 align-self-center">
                <div class="copyright-text">
                    <p><a href="{{ route('landing.home') }}">DPK PPNI RS Pusat Otak Nasional Jakarta</a> &copy; 2016, Developed by <b class="text-danger">Khairon</b></p>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
    </div>
</footer>


<!-- JAVASCRIPTS -->
<!-- jQuey -->
<script src="{{ asset('assets/theme/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/theme/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- Shuffle -->
<script src="{{ asset('assets/theme/plugins/shuffle/shuffle.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('assets/theme/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<!-- Slick Carousel -->
<script src="{{ asset('assets/theme/plugins/slick/slick.min.js') }}"></script>
<!-- SyoTimer -->
<script src="{{ asset('assets/theme/plugins/syotimer/jquery.syotimer.min.js') }}"></script>
<!-- Google Mapl -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqkdFObO2sofmc8kPRXW6hn5at1fsnM1s"></script>
<script src="{{ asset('assets/theme/plugins/google-map/gmap.js') }}"></script>
<!-- Custom Script -->
<script src="{{ asset('assets/theme/js/script.js') }}"></script>
</body>

</html>
