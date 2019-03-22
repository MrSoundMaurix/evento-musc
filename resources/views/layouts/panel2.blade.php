<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title','CIMA | Inicio')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo-icon.png')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('kiaalap-master/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('kiaalap-master/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('kiaalap-master/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('kiaalap-master/css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('kiaalap-master/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('kiaalap-master/css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('kiaalap-master/css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('kiaalap-master/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('kiaalap-master/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('kiaalap-master/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('kiaalap-master/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('kiaalap-master/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('kiaalap-master/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('kiaalap-master/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="{{url('assistant-home')}}">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a title="Inscripción a Conferencias" href="{{url('assistant-conferencia/create')}}" aria-expanded="false">
                                <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> 
                                <span class="mini-click-non">Conferencias</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professors</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="all-professors.html"><span class="mini-sub-pro">All Professors</span></a></li>
                                <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Add Professor</span></a></li>
                                <li><a title="Edit Professor" href="edit-professor.html"><span class="mini-sub-pro">Edit Professor</span></a></li>
                                <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Professor Profile</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                </li>                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="img/product/pro4.jpg" alt="" />
                                                            <span class="admin-name">Prof.Anderson</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-money author-log-ic"></span>User Billing</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                                <span class="edu-icon edu-locked author-log-ic"></span>{{ __('Logout') }}
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                            <!--  <a href="#"><span class="edu-icon edu-locked author-log-ic"></span></a>-->
                                                        </li>
                                                    </ul>
                                                </li>                                             
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li>
                                            <a data-toggle="collapse" data-target="#Charts" href="#">Home 
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Inscripción a Conferencias" href="{{url('user-asistenteconferencia/create')}}" aria-expanded="false">
                                                <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> 
                                                <span class="mini-click-non">Conferencias</span>
                                            </a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.html">All Professors</a>
                                                </li>
                                                <li><a href="add-professor.html">Add Professor</a>
                                                </li>
                                                <li><a href="edit-professor.html">Edit Professor</a>
                                                </li>
                                                <li><a href="professor-profile.html">Professor Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            
            @yield('search')
            
        </div>


        @yield('content')


        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/wow.min.js')}}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('kiaalap-master/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('kiaalap-master/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('kiaalap-master/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('kiaalap-master/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/morrisjs/raphael-min.js')}}"></script>
    <script src="{{asset('kiaalap-master/js/morrisjs/morris.js')}}"></script>
    <script src="{{asset('kiaalap-master/js/morrisjs/morris-active.js')}}"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('kiaalap-master/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('kiaalap-master/js/sparkline/sparkline-active.js')}}"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/plugins.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('kiaalap-master/js/main.js')}}"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>