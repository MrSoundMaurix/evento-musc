@extends('layouts.panel')
@section('title','CIMA | Editar Concurso')

@section('content')
<div class="single-pro-review-area mt-t-10 mg-b-10"></div>
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Search..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Concursos</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Index</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Editar Concurso | Detalles del Concurso</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                    {!!Form::model($concurso,['method'=>'PATCH','route'=>['admin-concursos.update',$concurso->css_id], 'files'=>'true'])!!}
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                            <label for="css_nombre">Nombre del Concurso :</label><input name="css_nombre" type="text" class="form-control" value="{{$concurso->css_nombre}}" placeholder="Nombre del Concurso">
                                                            </div>
                                                            <label for="css_nombre">Estado :</label>
                                                            <div class="form-group">
                                                            {{-- <select name="" id="{{$concurso->css_status}}"> --}}
                                                            {{-- <option  value="{{false}}">Inactivo</option>
                                                            <option value="{{true}}">Activo</option> --}}
                                                            {{-- </select> --}}
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="css_reglamento">Reglamento del concurso en PDF:</label>
                                                            <input name="css_reglamento" type="file" placeholder="ingrese reglamento" value="{{$concurso->css_reglamento}}" class="form-control">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Editar</button>
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
