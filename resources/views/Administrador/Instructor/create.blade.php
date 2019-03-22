@extends('layouts.panel')
@section('title','EVENT MUSC| AGREGAR INSTRUCTOR')
@section('content')
<div class="single-pro-review-area mt-t-10 mg-b-10"></div>
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
                                <li><span class="bread-blod">AGREGAR</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
        @include('includes.messages')
    </div>
</div>
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Información Básica</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            {!! Form::open(['url' => 'admin-instructores','files' => 'true']) !!}
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input name="ins_nombres" required type="text" class="form-control"
                                                        value="{{old('ins_nombres')}}" placeholder="Nombres" >
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="ins_apellidos" required type="text" class="form-control"
                                                            placeholder="Apellidos" value="{{old('ins_apellidos')}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="tema" type="text" required class="form-control"
                                                            placeholder="Tema" value="{{old('tema')}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="hojav" required
                                                            placeholder="Hoja de Vida">{{old('hojav')}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="resumen" required
                                                            placeholder="Resumen">{{old('resumen')}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="ins_foto" required type="file" class="form-control" value="{{old('ins_foto')}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <select name="ins_pais" required class="form-control">
                                                            <option value="" selected="" disabled="">Seleccionar
                                                                Nacionalidad</option>
                                                            <option value="Ecuador" onclick="setCedula('ecuador')">
                                                                Ecuador
                                                            </option>
                                                            <option value="Colombia" onclick="setCedula('colombia')">
                                                                Colombia</option>
                                                            <option value="Mexico" onclick="setCedula('mexico')">Mexico
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="ins_cedula" required id="ci" type="text"
                                                            class="form-control" value="{{old('ins_cedula')}}" placeholder="Cédula">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="ins_email" required type="text" class="form-control"
                                                            placeholder="Dirección de correo eléctronico" value="{{old('ins_email')}}">
                                                    </div>
                                                    <div class="form-group res-mg-t-15">
                                                        <textarea name="materiales" required placeholder="Materiales">{{old('materiales')}}</textarea>
                                                    </div>
                                                    <div class="form-group res-mg-t-15">
                                                        <textarea name="conocimientosp"
                                                            placeholder="Conocimientos Previos" required>{{old('conocimientosp')}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="payment-adress">
                                                        <button type="submit"
                                                            class="btn btn-primary waves-effect waves-light">GUARDAR</button>
                                                    </div>
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
<script type="text/javascript">
function setCedula(ciudad) {
    if (ciudad == 'ecuador') {
        document.getElementById('ci').disabled = false;
        document.getElementById('ci').placeholder = "Ingrese identificación Ecuatoriana";
    } else if (ciudad == 'colombia') {
        document.getElementById('ci').disabled = false;
        document.getElementById('ci').placeholder = "Ingrese identificación Colombiana";
    } else if (ciudad == 'mexico') {
        document.getElementById('ci').disabled = false;
        document.getElementById('ci').placeholder = "Ingrese identificación Mexicana ";
    }
}
</script>
@stop