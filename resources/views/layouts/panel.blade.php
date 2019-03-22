<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title','Admin-Home | Event - MUSC')</title>
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
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/main.css')}}">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/dropzone/dropzone.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/calendar/fullcalendar.print.min.css')}}">
    <!-- touchspin CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/touchspin/jquery.bootstrap-touchspin.min.css')}}">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/datapicker/datepicker3.css')}}">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/form/themesaller-forms.css')}}">
    <!-- colorpicker CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/colorpicker/colorpicker.css')}}">
    <!-- select2 CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/select2/select2.min.css')}}">
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/chosen/bootstrap-chosen.css')}}">
    <!-- ionRangeSlider CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/ionRangeSlider/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/ionRangeSlider/ion.rangeSlider.skinFlat.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap-master/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/vendor/modernizr-2.8.3.min.js')}}"></script>


</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                  <a href="#"><img class="main-logo" src="{{ asset('img/logo.png')}}" style="width:200px;height:50px;" alt="" /></a>
             {{-- <a href=""><h1 style="font-family:Times;">MUSC</h1></a> --}}
                <strong><a href="#"><img src="{{ asset('img/logo-icon.png')}}" style="width:55px;height:50px;" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    @role(['administrador','root'])
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="index.html">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non"><label class=".text-primary">MUSC</label></span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="{{url('/')}}"><span class="mini-sub-pro">Ver Portal</span></a></li>
                               {{--   <li><a title="Dashboard v.2" href="index-1.html"><span class="mini-sub-pro">Dashboard v.2</span></a></li>
                                <li><a title="Dashboard v.3" href="index-2.html"><span class="mini-sub-pro">Dashboard v.3</span></a></li>
                                <li><a title="Analytics" href="analytics.html"><span class="mini-sub-pro">Analytics</span></a></li>
                                <li><a title="Widgets" href="widgets.html"><span class="mini-sub-pro">Widgets</span></a></li>  --}}
                            </ul>
                        </li>
                        <li>
                            <a title="Landing Page" href="{{url('admin-calendario')}}" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Calendario</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Instructores</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="{{ url('admin-instructores-l') }}"><span class="mini-sub-pro">Listado</span></a></li>
                                <li><a title="Add Professor" href="{{ url('admin-instructores/create') }}"><span class="mini-sub-pro">Agregar</span></a></li>
                                {{-- <li><a title="Edit Professor" href="#"><span class="mini-sub-pro">Editar</span></a></li> --}}
                               {{--   <li><a title="Professor Profile" href="{{url('admin-instructores/1')}}"><span class="mini-sub-pro">Perfil</span></a></li>  --}}
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Usuarios</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{url('admin-usuarios')}}"><span class="mini-sub-pro">Listado</span></a></li>
                                <li><a title="Add Students" href="{{url('admin-usuarios/create')}}"><span class="mini-sub-pro">Agregar</span></a></li>
                                {{-- <li><a title="Edit Students" href="#"><span class="mini-sub-pro">Edit Student</span></a></li>
                                <li><a title="Students Profile" href="#"><span class="mini-sub-pro">Student Profile</span></a></li> --}}
                            </ul>
                        </li>
                        <li>
                            <a class="" href="{{url('admin-talleres')}}" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Talleres</span></a>
                           {{--   <ul class="submenu-angle" aria-expanded="false">
                               {{-- <li><a title="All Courses" href="{{url('admin-talleres')}}"><span class="mini-sub-pro">Listado</span></a></li>
                                <li><a title="Add Courses" href="{{url('admin-talleres/create')}}"><span class="mini-sub-pro">Agregar</span></a></li>
                                 <li><a title="Edit Courses" href="#"><span class="mini-sub-pro">Edit Course</span></a></li>
                                <li><a title="Courses Profile" href="#"><span class="mini-sub-pro">Courses Info</span></a></li>
                                <li><a title="course Payment" href="#"><span class="mini-sub-pro">Courses Payment</span></a></li>
                            </ul>  --}}
                        </li>
                        <li>
                            <a class="" href="{{url('admin-conferencias')}}" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Conferencias</span></a>
                            {{-- <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="{{url('admin-conferencias')}}"><span class="mini-sub-pro">Listado</span></a></li>
                                <li><a title="Add Library" href="{{url('admin-conferencias/create')}}"><span class="mini-sub-pro">Agregar</span></a></li>
                                <li><a title="Edit Library" href="edit-library-assets.html"><span class="mini-sub-pro">Edit Library Asset</span></a></li>
                            </ul> --}}
                        </li>
                        <li>
                            <a class="" href="{{url('admin-espacios')}}" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Espacios</span></a>
                            {{-- <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Departments List" href="departments.html"><span class="mini-sub-pro">Departments List</span></a></li>
                                <li><a title="Add Departments" href="add-department.html"><span class="mini-sub-pro">Add Departments</span></a></li>
                                <li><a title="Edit Departments" href="edit-department.html"><span class="mini-sub-pro">Edit Departments</span></a></li>
                            </ul> --}}
                        </li>                       
                    </ul>
                    @endrole
                    @role('usuario')
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a title="Inscripción a Conferencias" href="{{url('asistente-conferencia/create')}}" aria-expanded="false">
                                <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> 
                                <span class="mini-click-non">Conferencias</span>
                            </a>
                        </li>
                        <li>
                            <a class="" href="{{url('asistente-talleres')}}" aria-expanded="false">
                                <span class="educate-icon educate-course icon-wrap"></span>
                                <span class="mini-click-non">Mis Talleres</span>
                            </a>
                        </li>
                    </ul>
                    @endrole
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
                        {{-- imagen cuando la pagina se ve en celulares //below 900px --}}
                        {{-- <a href="index.html"><img class="main-logo" src="{{ asset('img/logo.png')}}" alt="" /></a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            {{-- @yield('nav') --}}
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
                                                    @role(['administrador','root'])
                                                    <li class="nav-item">
                                                        <a href="{{url('admin-home')}}" class="nav-link">HOME</a>
                                                    </li>
                                                    @endrole
                                                    @role('usuario')
                                                    <li class="nav-item">
                                                            <a href="{{url('/')}}" class="nav-link">PORTADA</a>
                                                        </li>
                                                    @endrole

                                                {{-- <li class="nav-item">
                                                    <a href="#" class="nav-link">About</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Services</a>
                                                </li> --}}
                                                {{-- <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="#" class="dropdown-item">Documentation</a>
                                                        <a href="#" class="dropdown-item">Expert Backend</a>
                                                        <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                        <a href="#" class="dropdown-item">Contact Support</a>
                                                    </div>
                                                </li> --}}
                                                {{-- <li class="nav-item"> --}}
                                                    {{-- <a href="#" class="nav-link">Support</a> --}}
                                                {{-- </li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                {{-- Message & Notifications --}}
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="{{ asset('kiaalap-master/img/product/pro4.jpg')}}" alt="" />
                                                            <span class="admin-name">{{Auth::user()->name}}</span>
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
                                    @role(['administrador','root'])
                                    <ul class="mobile-menu-nav">
                                        <li>
                                            <a class="has-arrow" href="index.html">
                                                <span class="educate-icon educate-home icon-wrap"></span>
                                                <span class="mini-click-non"><label class=".text-primary">MUSC</label></span>
                                            </a>
                                            <ul class="submenu-angle" aria-expanded="true">
                                                <li><a title="Dashboard v.1" href="{{url('/')}}"><span class="mini-sub-pro">Ver Portal</span></a></li>
                                            {{--   <li><a title="Dashboard v.2" href="index-1.html"><span class="mini-sub-pro">Dashboard v.2</span></a></li>
                                                <li><a title="Dashboard v.3" href="index-2.html"><span class="mini-sub-pro">Dashboard v.3</span></a></li>
                                                <li><a title="Analytics" href="analytics.html"><span class="mini-sub-pro">Analytics</span></a></li>
                                                <li><a title="Widgets" href="widgets.html"><span class="mini-sub-pro">Widgets</span></a></li>  --}}
                                            </ul>
                                        </li>
                                        <li>
                                            <a title="Landing Page" href="{{url('admin-calendario')}}" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Calendario</span></a>
                                        </li>
                                        <li>
                                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Instructores</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="All Professors" href="{{ url('admin-instructores-l') }}"><span class="mini-sub-pro">Listado</span></a></li>
                                                <li><a title="Add Professor" href="{{ url('admin-instructores/create') }}"><span class="mini-sub-pro">Agregar</span></a></li>
                                                {{-- <li><a title="Edit Professor" href="#"><span class="mini-sub-pro">Editar</span></a></li> --}}
                                            {{--   <li><a title="Professor Profile" href="{{url('admin-instructores/1')}}"><span class="mini-sub-pro">Perfil</span></a></li>  --}}
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Usuarios</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="All Students" href="{{url('admin-usuarios')}}"><span class="mini-sub-pro">Listado</span></a></li>
                                                <li><a title="Add Students" href="{{url('admin-usuarios/create')}}"><span class="mini-sub-pro">Agregar</span></a></li>
                                                {{-- <li><a title="Edit Students" href="#"><span class="mini-sub-pro">Edit Student</span></a></li>
                                                <li><a title="Students Profile" href="#"><span class="mini-sub-pro">Student Profile</span></a></li> --}}
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="" href="{{url('admin-talleres')}}" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Talleres</span></a>
                                        {{--   <ul class="submenu-angle" aria-expanded="false">
                                            {{-- <li><a title="All Courses" href="{{url('admin-talleres')}}"><span class="mini-sub-pro">Listado</span></a></li>
                                                <li><a title="Add Courses" href="{{url('admin-talleres/create')}}"><span class="mini-sub-pro">Agregar</span></a></li>
                                                <li><a title="Edit Courses" href="#"><span class="mini-sub-pro">Edit Course</span></a></li>
                                                <li><a title="Courses Profile" href="#"><span class="mini-sub-pro">Courses Info</span></a></li>
                                                <li><a title="course Payment" href="#"><span class="mini-sub-pro">Courses Payment</span></a></li>
                                            </ul>  --}}
                                        </li>
                                        <li>
                                            <a class="" href="{{url('admin-conferencias')}}" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Conferencias</span></a>
                                            {{-- <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="All Library" href="{{url('admin-conferencias')}}"><span class="mini-sub-pro">Listado</span></a></li>
                                                <li><a title="Add Library" href="{{url('admin-conferencias/create')}}"><span class="mini-sub-pro">Agregar</span></a></li>
                                                <li><a title="Edit Library" href="edit-library-assets.html"><span class="mini-sub-pro">Edit Library Asset</span></a></li>
                                            </ul> --}}
                                        </li>
                                        <li>
                                            <a class="" href="{{url('admin-espacios')}}" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Espacios</span></a>
                                            {{-- <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="Departments List" href="departments.html"><span class="mini-sub-pro">Departments List</span></a></li>
                                                <li><a title="Add Departments" href="add-department.html"><span class="mini-sub-pro">Add Departments</span></a></li>
                                                <li><a title="Edit Departments" href="edit-department.html"><span class="mini-sub-pro">Edit Departments</span></a></li>
                                            </ul> --}}
                                        </li>                       
                                    </ul>
                                    @endrole
                                    @role('usuario')
                                    <ul class="mobile-menu-nav">
                                        <li>
                                            <a title="Inscripción a Conferencias" href="{{url('asistente-conferencia/create')}}" aria-expanded="false">
                                                <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> 
                                                <span class="mini-click-non">Conferencias</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="" href="{{url('asistente-talleres')}}" aria-expanded="false">
                                                <span class="educate-icon educate-course icon-wrap"></span>
                                                <span class="mini-click-non">Mis Talleres</span>
                                            </a>
                                        </li>
                                    </ul>
                                    @endrole
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('search')
        </div>
        {{-- <div class="container-fluid"> --}}
            @yield('content')
        {{-- </div> --}}
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2019. Microsoft UTN Student Community</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('kiaalap-master/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('kiaalap-master/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('kiaalap-master/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('kiaalap-master/js/sparkline/sparkline-active.js') }}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('kiaalap-master/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('kiaalap-master/js/calendar/fullcalendar-active.js') }}"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('kiaalap-master/js/masking-active.js') }}"></script>
    <!-- datepicker JS
        ============================================ -->
    <script src="{{ asset('kiaalap-master/js/datepicker/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('kiaalap-master/js/datapicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('kiaalap-master/js/datapicker/datepicker-active.js') }}"></script>
    <!-- form validate JS
        ============================================ -->
    <script src="{{ asset('kiaalap-master/js/form-validation/jquery.form.min.js') }}"></script>
    <script src="{{ asset('kiaalap-master/js/form-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('kiaalap-master/js/form-validation/form-active.js') }}"></script>
    <!-- dropzone JS
        ============================================ -->
    <script src="{{ asset('kiaalap-master/js/dropzone/dropzone.js') }}"></script>
    <!-- tab JS
        ============================================ -->
    <script src="{{ asset('kiaalap-master/js/tab.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('kiaalap-master/js/main.js') }}"></script>
    <!-- tawk chat JS
		============================================ -->
    {{-- <script src="{{ asset('kiaalap-master/js/tawk-chat.js') }}"></script> --}}

</body>

</html>
