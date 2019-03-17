@extends('layouts.panel')
@section('title','EVENT MUSC| INSTRUCTORES')
@section('nav')
    @include('layouts.nav')
@stop
@section('content')


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
                                    <li>
                                        <div class="social-media-in">
                                            <a title="Cambiar vista" href="{{url('admin-instructores')}}"><i class="fa fa-user"></i></a>
                                        </div>
                                    </li>
                                   {{--   <li>
                                        <div class="social-media-in">
                                            <a title="Listado Instructores" href="{{url('admin-instructores-l')}}"><i class="fa fa-list"></i></a>
                                        </div>
                                    </li>  --}}
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
                <div class="product-status-wrap">
                    <h4>LISTADO INSTRUCTORES</h4>
                    <div class="add-product">
                        <a href="{{ url('admin-instructores/create') }}">Registrar Nuevo</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Nro</th>
                                <th>Fotografía</th>
                                <th>Nombres y Apellidos</th>
                                <th>Hoja de Vida</th>
                                <th>Correo</th>
                                <th>Nacionalidad</th>

                                <th>Opciones</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="kiaalap-master/img/contact/1.jpg" alt="" /></td>
                                <td>Web Development Book</td>
                                <td>
                                    <button class="pd-setting">Ver</button>
                                </td>
                                <td>micorreo@dominio.com</td>
                                <td>Ecuador</td>
                                <td>
                                    <a href="{{url('admin-instructores/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="kiaalap-master/img/contact/2.jpg" alt="" /></td>
                                <td>Quality Bol pen</td>
                                <td>
                                    <button class="pd-setting">Ver</button>
                                </td>
                                <td>micorreo@dominio.com</td>
                                <td>Ecuador</td>
                                <td>
                                    <a href="{{url('admin-instructores/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="kiaalap-master/img/contact/3.jpg" alt="" /></td>
                                <td>Box of pendrive</td>
                                <td>
                                    <button class="pd-setting">Ver</button>
                                </td>
                                <td>micorreo@dominio.com</td>
                                <td>Ecuador</td>
                                <td>
                                        <a href="{{url('admin-instructores/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="kiaalap-master/img/contact/4.jpg" alt="" /></td>
                                <td>Quality Bol pen</td>
                                <td>
                                    <button class="pd-setting">Ver</button>
                                </td>
                                <td>micorreo@dominio.com</td>
                                <td>Ecuador</td>
                                <td>
                                        <a href="{{url('admin-instructores/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img src="kiaalap-master/img/contact/1.jpg" alt="" /></td>
                                <td>Web Development Book</td>
                                <td>
                                    <button class="pd-setting">Ver</button>
                                </td>
                                <td>micorreo@dominio.com</td>
                                <td>Ecuador</td>
                                <td>
                                        <a href="{{url('admin-instructores/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><img src="kiaalap-master/img/contact/2.jpg" alt="" /></td>
                                <td>Quality Bol pen</td>
                                <td>
                                    <button class="pd-setting">Ver</button>
                                </td>
                                <td>micorreo@dominio.com</td>
                                <td>Ecuador</td>
                                <td>
                                        <a href="{{url('admin-instructores/1/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
