@extends('layouts.panel')
@section('title','CIMA | Nueva Conferencia')
@section('search')
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
                                <li><a href="#">Conferencias</a> <span class="bread-slash">/</span>
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
@stop
@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Nueva Conferencia | Detalles Conferencia</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                {!! Form::open(['url' => 'admin-conferencias']) !!}
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="con_tema" type="text" class="form-control" placeholder="Tema de la conferencia">
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="ins_id" class="form-control">
                                                                    @if(isset($instructores))
                                                                        @foreach($instructores as $ins)
                                                                            <option value="{{$ins->ins_id}}">{{$ins->ins_nombres}} {{$ins->ins_apellidos}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="esp_id" class="form-control">
                                                                    @if(isset($espacios))
                                                                        @foreach($espacios as $esp)
                                                                            <option value="{{$esp->esp_id}}">{{$esp->esp_nombre}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="con_fecha" type="date" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="con_horainicio" type="time" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="con_horafin" type="time" class="form-control" >
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
