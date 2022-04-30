<!DOCTYPE html>
<html lang="en">

<head>

    <title>CGE | Consultores</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('modal/css/lunar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/templatemo-style.css') }}">
</head>

<body>

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="index.html" class="navbar-brand"><img src="{{ asset('site/images/logo.png') }}" /></a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="#inicio" class="smoothScroll">Inicio</a></li>
                    <li><a href="#novedades" class="smoothScroll">Novedades</a></li>
                    <li><a href="#proyectos" class="smoothScroll">Proyectos</a></li>
                    <li><a href="#nosotros" class="smoothScroll">Nosotros</a></li>
                    <li><a href="#servicios" class="smoothScroll">Servicios</a></li>
                    <li><a href="#asociados" class="smoothScroll">Asociados</a></li>
                    <li><a href="#contact" class="smoothScroll">Contacto</a></li>
                </ul>
            </div>

        </div>
    </section>

    <!-- INICIO -->
    <section id="inicio" class="slider" data-stellar-background-ratio="0.5">
        @include('public.inicio')
    </section>
    <!-- Novedades -->
    <section id="novedades" data-stellar-background-ratio="0.5">
        @include('public.novedades')
    </section>
    <!-- PROYECTOS -->
    <section id="proyectos" data-stellar-background-ratio="0.5">
        @include('public.proyectos')
    </section>
    <!-- NOSOTROS -->
    <section id="nosotros" data-stellar-background-ratio="0.5">
        @include('public.nosotros')
    </section>
    <!-- TESTIMONIAL -->
    <section id="testimonial" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>CGE | Consultores</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICIOS -->
    <section id="servicios" data-stellar-background-ratio="0.5">
        @include('public.servicios')
    </section>
    <!-- NOSOTROS -->
    <section id="asociados" data-stellar-background-ratio="0.5">
        @include('public.asociados')
    </section>

    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
        @include('public.contacto')
    </section>


    <!-- FOOTER -->
    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-8">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">CGE | Consultores</h2>
                    </div>
                    <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                        <li><a href="#" class="fa fa-home"></a>Rebollo 2171 - N3300CMT - Posadas - Provincia de
                            Misiones - Argentina</li>
                        <br>
                        <li><a class="fa fa-phone"></a>+54 376-4424686</li>
                        <br>
                        <li><a href="#" class="fa fa-envelope"></a>informacion@cgeconsultores.com</li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-8">
                    <div class="footer-info footer-open-hour">
                    </div>
                </div>

            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="{{ asset('site/js/jquery.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('site/js/wow.min.js') }}"></script>
    <script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('site/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('site/js/custom.js') }}"></script>



    <script>

    </script>

</body>

</html>
