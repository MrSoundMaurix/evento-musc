@extends('layouts.panel')
@section('title','CIMA | Registro Conferencia')
@section('search')
    <div class="single-pro-review-area mt-t-30 mg-b-15"></div>
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    {{-- <form role="search" class="sr-input-func"> --}}
                                        {{-- <input type="text" placeholder="Search..." class="search-int form-control"> --}}
                                        {{-- <a href="#"><i class="fa fa-search"></i></a> --}}
                                    {{-- </form> --}}
                                    <label for="info">Por favor, comprueba tus datos personales y si es necesario editalos. Realiza el pago de la inscripción al evento</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Conferencias</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Inicio</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Registro Conferencia</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                {!! Form::open(['url' => 'asistente-conferencia','files' => 'true']) !!}
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="asc_nrodocumento" type="text" class="form-control" placeholder="Nro. de documento del depósito o transacción">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="asc_foto" type="file" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                {!! Form::close() !!}
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
    </div>
@endsection
