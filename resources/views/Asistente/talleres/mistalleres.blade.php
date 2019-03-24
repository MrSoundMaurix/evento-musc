@extends('layouts.panel')
@section('title','CIMA| TALLERES')
@section('content')
<div class="single-pro-review-area mt-t-10 mg-b-10"></div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            {{--  <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>  --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">TALLER</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">INFORMACIÓN</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($mistalleres as $taller)
            @foreach ($taller->asistentes as $asistente)

            <div class="single-pro-review-area mt-t-30 mg-b-15">
                @include('layouts.messages')
                <div class="container-fluid">
                    <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="profile-info-inner">
                                    <div class="profile-img" style="text-align:center;">
                                        @if($taller->tal_foto == null)

                                        @else
                                            <img src="{{ "data:image/" . $taller->tal_fototype . ";base64," . $taller->tal_foto }}" style="max-width:175px;">
                                        @endif
                                    </div>
                                    <div class="profile-details-hr">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="address-hr">
                                                    <p><b>Instructor</b><br /> {{$taller->instructor->ins_nombres.' '}}{{$taller->instructor->ins_apellidos}}</p>
                                                </div>
                                            </div>
                                            <div class="row">

                                                </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                <div class="address-hr">
                                                        <p><b>Categoría</b><br /> {{$taller->categoria->cat_nombre}}</p>
                                                    </div>
                                                </div>

                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                    <p><b>Fecha</b><br /> {{$taller->tal_fecha}}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                    <p><b>Hora Inicio</b><br /> {{$taller->tal_horainicio}}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                    <p><b>Hora Fin</b><br /> {{$taller->tal_horafin}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                        <p><b>Espacio</b><br /> {{$taller->espacio->esp_nombre}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                                    <div class="row">
                                        <H1 class="text-primary">{{$taller->tal_tema}}</H1>
                                    </div>

                                    <ul id="myTabedu1" class="tab-review-design">
                                       {{--   <li class="active"><a href="#reviews"> {{$taller->tal_tema}}</a></li>  --}}
                                    </ul>
                                    <div id="myTabContent" class="tab-content custom-product-edit">
                                        <div class="product-tab-list tab-pane fade active in" id="reviews">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="review-content-section">

                                                        <div class="row mg-b-15">
                                                                <div class="col-lg-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="skill-title">
                                                                                <h2>Resúmen</h2>
                                                                                <hr/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="content-profile">
                                                                            <p ALIGN="justify">{{$taller->tal_resumen}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mg-b-15">
                                                            <div class="col-lg-12">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="skill-title">
                                                                            <h2>Materiales</h2>
                                                                            <hr />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="content-profile">
                                                                            <p ALIGN="justify">{{$taller->tal_materiales}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row mg-b-15">
                                                            <div class="col-lg-12">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="skill-title">
                                                                            <h2>Previos</h2>
                                                                            <hr />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ex-pro">
                                                                        <p ALIGN="justify">{{$taller->tal_cprevios}}</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                {{--          <a class="media" href="{{ asset('kiaalap-master/pdf/mamunur.pdf')}}"></a>

                                                          --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                    </div>
                </div>
            </div>
            @endforeach
            @endforeach
@stop
