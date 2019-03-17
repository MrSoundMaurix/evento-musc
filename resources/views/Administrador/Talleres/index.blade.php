@extends('layouts.panel')
@section('title','EVENT MUSC| TALLERES')
@section('nav')
    @include('layouts.nav')
@stop
@section('content')

<!-- Mobile Menu end -->
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Buscar..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">TALLERES</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">LISTADO</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="courses-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="courses-inner res-mg-b-30">
                    <div class="courses-title">
                        <a href="#"><img src="kiaalap-master/img/courses/1.jpg" alt=""></a>
                        <h2>Seguridad en Base de Datos SQL Server</h2>
                    </div>
                    <div class="courses-alaltic">
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        <a href="{{url('admin-talleres/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        </a>
                    </div>
                    <div class="course-des">
                        <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 2 horas</p>
                        <p><span><i class="fa fa-clock"></i></span> <b>Instructor:</b> Jayli</p>
                        <p><span><i class="fa fa-clock"></i></span> <b>Estudiantes:</b> 100+</p>
                    </div>
                    <div class="product-buttons">
                        <button type="button" class="button-default cart-btn">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="courses-inner">
                    <div class="courses-title">
                        <a href="#"><img src="kiaalap-master/img/courses/2.jpg" alt=""></a>
                        <h2>Base de Datos Postgresql</h2>
                    </div>
                    <div class="courses-alaltic">
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        <a href="{{url('admin-talleres/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        </a>
                    </div>
                    <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 2 horas</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Instructor:</b> Jayli</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Estudiantes:</b> 100+</p>
                    </div>
                    <div class="product-buttons">
                        <button type="button" class="button-default cart-btn">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="courses-inner res-mg-t-30 dk-res-t-pro-30">
                    <div class="courses-title">
                        <a href="#"><img src="kiaalap-master/img/courses/3.jpg" alt=""></a>
                        <h2>Laravel 5.8</h2>
                    </div>
                    <div class="courses-alaltic">
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        <a href="{{url('admin-talleres/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        </a>
                    </div>
                    <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 2 horas</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Instructor:</b> Jayli</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Estudiantes:</b> 100+</p>
                    </div>
                    <div class="product-buttons">
                        <button type="button" class="button-default cart-btn">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="courses-inner res-mg-t-30 dk-res-t-pro-30">
                    <div class="courses-title">
                        <a href="#"><img src="kiaalap-master/img/courses/1.jpg" alt=""></a>
                        <h2>PHP con GIT</h2>
                    </div>
                    <div class="courses-alaltic">
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        <a href="{{url('admin-talleres/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        </a>
                    </div>
                    <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 2 horas</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Instructor:</b> Jayli</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Estudiantes:</b> 100+</p>
                    </div>
                    <div class="product-buttons">
                        <button type="button" class="button-default cart-btn">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mg-b-15">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="courses-inner mg-t-30">
                    <div class="courses-title">
                        <a href="#"><img src="kiaalap-master/img/courses/1.jpg" alt=""></a>
                        <h2>Apps Development</h2>
                    </div>
                    <div class="courses-alaltic">
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        <a href="{{url('admin-talleres/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        </a>
                    </div>
                    <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 2 horas</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Instructor:</b> Jayli</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Estudiantes:</b> 100+</p>
                    </div>
                    <div class="product-buttons">
                        <button type="button" class="button-default cart-btn">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="courses-inner mg-t-30">
                    <div class="courses-title">
                        <a href="#"><img src="kiaalap-master/img/courses/2.jpg" alt=""></a>
                        <h2>Illustrator CC 2018</h2>
                    </div>
                    <div class="courses-alaltic">
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        <a href="{{url('admin-talleres/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        </a>
                    </div>
                    <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 2 horas</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Instructor:</b> Jayli</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Estudiantes:</b> 100+</p>
                    </div>
                    <div class="product-buttons">
                        <button type="button" class="button-default cart-btn">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="courses-inner mg-t-30">
                    <div class="courses-title">
                        <a href="#"><img src="kiaalap-master/img/courses/3.jpg" alt=""></a>
                        <h2>Indesign cs6 2018</h2>
                    </div>
                    <div class="courses-alaltic">
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        <a href="{{url('admin-talleres/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        </a>
                    </div>
                    <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 2 horas</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Instructor:</b> Jayli</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Estudiantes:</b> 100+</p>
                    </div>
                    <div class="product-buttons">
                        <button type="button" class="button-default cart-btn">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="courses-inner mg-t-30">
                    <div class="courses-title">
                        <a href="#"><img src="kiaalap-master/img/courses/1.jpg" alt=""></a>
                        <h2>Web Development</h2>
                    </div>
                    <div class="courses-alaltic">
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        <a href="{{url('admin-talleres/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        </a>
                    </div>
                    <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duración:</b> 2 horas</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Instructor:</b> Jayli</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Estudiantes:</b> 100+</p>
                    </div>
                    <div class="product-buttons">
                        <button type="button" class="button-default cart-btn">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop


