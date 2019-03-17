@extends('layouts.panel')
@section('title','EVENT MUSC| INSTRUCTORES')
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
                                <li><a href="#">INSTRUCTORES</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">LISTADO</span>
                                </li>
                            </ul>
                            <ul class="breadcome-menu">
                                    {{--  <li>
                                        <div class="social-media-in">
                                            <a title="Detalles Instructores" href="{{url('admin-instructores')}}"><i class="fa fa-user"></i></a>
                                        </div>
                                    </li>  --}}
                                    <li>
                                        <div class="social-media-in">
                                            <a title="Cambiar vista" href="{{url('admin-instructores-l')}}"><i class="fa fa-list"></i></a>
                                        </div>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contacts-area mg-b-15">

    <div class="container-fluid">
            <div class="product-status-wrap">
                    <h4>LISTADO INSTRUCTORES</h4>
            </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                    <div class="panel-body custom-panel-jw">
                        <div class="social-media-in">
                            <a href="https://www.facebook.com/cristopher.coronado.7" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <img alt="logo" class="img-circle m-b" src="kiaalap-master/img/contact/1.jpg">
                        <h3><a href="">Ing Cristopher Coronado</a></h3>
                        <p class="all-pro-ad">Ecuador, UTN</p>
                        <p>
                                Cristopher Coronado@gmail.com
                                <button class="btn btn-secondary">Hoja de Vida</button>
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="professor-stds-int">
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Likes: </span> <strong>956</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Comments: </span> <strong>350</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Views: </span> <strong>450</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                    <div class="panel-body custom-panel-jw">
                        <div class="social-media-in">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <img alt="logo" class="img-circle m-b" src="kiaalap-master/img/contact/2.jpg">
                        <h3><a href="">Amir dex</a></h3>
                        <p class="all-pro-ad">Pakistan, Los</p>
                        <p>
                                Cristopher Coronado@gmail.com
                                <button class="btn btn-secondary">Hoja de Vida</button>
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="professor-stds-int">
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Likes: </span> <strong>956</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Comments: </span> <strong>350</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Views: </span> <strong>450</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <div class="panel-body custom-panel-jw">
                        <div class="social-media-in">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <img alt="logo" class="img-circle m-b" src="kiaalap-master/img/contact/3.jpg">
                        <h3><a href="">Alva Adition</a></h3>
                        <p class="all-pro-ad">India, Col</p>
                        <p>
                                Cristopher Coronado@gmail.com
                                <button class="btn btn-secondary">Hoja de Vida</button>
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="professor-stds-int">
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Likes: </span> <strong>956</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Comments: </span> <strong>350</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Views: </span> <strong>450</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel hblue contact-panel contact-panel-cs res-tablet-mg-t-30 dk-res-t-pro-30">
                    <div class="panel-body custom-panel-jw">
                        <div class="social-media-in">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <img alt="logo" class="img-circle m-b" src="kiaalap-master/img/contact/4.jpg">
                        <h3><a href="">Sex Dog</a></h3>
                        <p class="all-pro-ad">Uk, LA</p>
                        <p>
                                Cristopher Coronado@gmail.com
                                <button class="btn btn-secondary">Hoja de Vida</button>
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="professor-stds-int">
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Likes: </span> <strong>956</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Comments: </span> <strong>350</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Views: </span> <strong>450</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel hblue contact-panel contact-panel-cs mg-t-30">
                    <div class="panel-body custom-panel-jw">
                        <div class="social-media-in">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <img alt="logo" class="img-circle m-b" src="kiaalap-master/img/contact/1.jpg">
                        <h3><a href="">Fox Well</a></h3>
                        <p class="all-pro-ad">California, LA</p>
                        <p>
                                Cristopher Coronado@gmail.com
                                <button class="btn btn-secondary">Hoja de Vida</button>
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="professor-stds-int">
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Likes: </span> <strong>956</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Comments: </span> <strong>350</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Views: </span> <strong>450</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel hblue contact-panel contact-panel-cs mg-t-30">
                    <div class="panel-body custom-panel-jw">
                        <div class="social-media-in">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <img alt="logo" class="img-circle m-b" src="kiaalap-master/img/contact/3.jpg">
                        <h3><a href="">Drom Simson</a></h3>
                        <p class="all-pro-ad">Austrolia, LA</p>
                        <p>
                                Cristopher Coronado@gmail.com
                                <button class="btn btn-secondary">Hoja de Vida</button>
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="professor-stds-int">
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Likes: </span> <strong>956</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Comments: </span> <strong>350</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Views: </span> <strong>450</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel hblue contact-panel contact-panel-cs mg-t-30">
                    <div class="panel-body custom-panel-jw">
                        <div class="social-media-in">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <img alt="logo" class="img-circle m-b" src="kiaalap-master/img/contact/2.jpg">
                        <h3><a href="">Sima son</a></h3>
                        <p class="all-pro-ad">Suiden, Cro</p>
                        <p>
                                Cristopher Coronado@gmail.com
                                <button class="btn btn-secondary">Hoja de Vida</button>
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="professor-stds-int">
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Likes: </span> <strong>956</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Comments: </span> <strong>350</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Views: </span> <strong>450</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel hblue contact-panel contact-panel-cs mg-t-30">
                    <div class="panel-body custom-panel-jw">
                        <div class="social-media-in">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <img alt="logo" class="img-circle m-b" src="kiaalap-master/img/contact/4.jpg">
                        <h3><a href="">Drama Son</a></h3>
                        <p class="all-pro-ad">USA, LA</p>
                        <p>
                                Cristopher Coronado@gmail.com
                                <button class="btn btn-secondary">Hoja de Vida</button>
                        </p>
                    </div>
                    <div class="panel-footer contact-footer">
                        <div class="professor-stds-int">
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Likes: </span> <strong>956</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Comments: </span> <strong>350</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Views: </span> <strong>450</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop


