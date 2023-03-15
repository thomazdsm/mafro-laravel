<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MAfroEduc') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ URL::asset('blog/img/mafro_logo.png') }}" rel="icon">
    <link href="{{ URL::asset('blog/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('blog/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('blog/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('blog/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('blog/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('blog/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('blog/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('blog/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ URL::asset('css/app.css') }}">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('blog/css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.html" style="text-decoration: none">{{ config('app.name', 'MAfroEduc') }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Sobre Nós</a></li>
                    <li><a class="nav-link scrollto" href="#observatorio">Observatório</a></li>
                    <li><a class="nav-link scrollto " href="#biblioteca">Biblioteca</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
                    <li><a class="nav-link" href="{{route('admin.home')}}">Administrativo</a></li>
                    <li><a class="getstarted" href="#" style="text-decoration: none">Eventos</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Bettter Digital Experience With Techie</h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                    <div><a href="#about" class="btn-get-started scrollto no-link-outline">Get Started</a></div>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ URL::asset('blog/img/mafroeduc_l.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

x'
    <main class="main">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>{{ config('app.name', 'MAfroEduc') }}</h3>
                        <p>
                            Av. dos Portugueses <br>
                            Sá Viana, São Luís - MA<br>
                            Brasil <br><br>
                            <strong>Telefone:</strong> +55 (98) 991234-5678<br>
                            <strong>Email:</strong> contato@mafroeduc.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Links Úteis</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right scrollto"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Eventos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Conheça</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Neperge</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Gemge</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Coperge</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Encontro de Educadores</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Gesepe</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">

            <div class="copyright-wrap d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>TSM Web Developer</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="https://bootstrapmade.com/">TSM Web Developer</a> based on <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="#" class="twitter"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/4d3192896f.js" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('blog/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ URL::asset('blog/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('blog/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('blog/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('blog/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('blog/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('blog/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('blog/js/main.js') }}"></script>
</body>
</html>
