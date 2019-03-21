<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CIMA - Congreso Internacional  Multiacadémico</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    {{-- <link href="https://scontent.fuio1-1.fna.fbcdn.net/v/t1.0-9/19149226_664521647079400_7057188107885065268_n.jpg?_nc_cat=105&_nc_ht=scontent.fuio1-1.fna&oh=5b1796a9cccf80edd19eb1365d444200&oe=5D1F4D0E" rel="icon"> --}}
    <link href="{{ asset('img/logo-icon.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                <a href="#intro" class="scrollto"><img src="{{ asset('img/logo.png')}}" alt="" title=""></a>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                @role('administrador')<li class="active"><a href="{{ url('admin-home') }}">Admin</a></li>@endrole
                    </ul>
                </nav>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="{{ Request::path() == '/' ? 'menu-active' : ''}}"><a href="/">Inicio</a></li>
                    {{-- <li><a href="{{ url('sistemas') }}">Sistemas</a></li> --}}

                    <li class="nav-item dropdown {{strpos(Request::path(), 'sistemas/') !== false ? 'menu-active' : ''}}">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sistemas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" style="color: black" href="{{ url('sistemas/conferencias') }}">Conferencias</a></li>
                            <li><a class="dropdown-item" style="color: black" href="{{ url('sistemas/talleres') }}">Talleres</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown {{strpos(Request::path(), 'publicidad/') !== false ? 'menu-active' : ''}}">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Publicidad
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" style="color: black" href="{{ url('publicidad/conferencias') }}">Conferencias</a></li>
                            <li><a class="dropdown-item" style="color: black" href="{{ url('publicidad/talleres') }}">Talleres</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown {{strpos(Request::path(), 'contabilidad/') !== false ? 'menu-active' : ''}}">
                        <a class="menu-active nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contabilidad
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" style="color: black" href="{{ url('contabilidad/conferencias') }}">Conferencias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown {{strpos(Request::path(), 'biotecnologia/') !== false ? 'menu-active' : ''}}">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Biotecnología
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" style="color: black" href="{{ url('biotecnologia/conferencias') }}">Conferencias</a></li>
                        </ul>
                    </li>
                    <li class="buy-tickets"><a href="{{ route('register') }}">Inscríbete</a></li>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">Congreso<br><span style="color: #294D88;">Internacional</span> Multiacadémico</h1>
            <p class="mb-4 pb-0" style="font-size: 18px">17 - 21 Junio, Universidad Técnica del Norte, Ibarra</p>
            <a href="https://www.youtube.com/watch?v=T_HQyQo7xyU" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            <a href="#about" class="about-btn scrollto">Acerca del evento</a>
        </div>
    </section>

    <!--==========================
    About Section
    ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Información del evento</h2>
                    <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius
                        aut accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt
                        inventore in est ut optio sequi unde.</p>
                </div>
                <div class="col-lg-3">
                    <h3>Lugar</h3>
                    <p>Universidad Técnica del Norte, Ibarra - Ecuador</p>
                </div>
                <div class="col-lg-3">
                    <h3>Fecha</h3>
                    <p>Lunes a Viernes<br>17 - 21 Junio</p>
                </div>
            </div>
        </div>
    </section>

    <main id="main">
        @yield('contenido')
    </main>


    <!--==========================
    Footer
    ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="img/logo.png" alt="TheEvenet">
                        <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam
                            porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In
                            inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Av. 17 de Julio <br> Ibarra, EC 100105<br> Ecuador <br>
                            <strong>Phone:</strong> +593 99 999 9999<br>
                            <strong>Email:</strong> musc@utn.edu.ec<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/MUSCUTN/" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>2019</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
                Designed by <a href="#">MUSC</a>
            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Form JavaScript File -->
    <script src="{{asset('contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
