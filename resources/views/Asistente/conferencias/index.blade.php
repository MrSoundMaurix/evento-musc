@extends('layouts.panel')
@section('title','CIMA | Conferencias')

@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15"></div>
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
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Registros</h4>
                        <div class="add-product">
                            <a href="{{url('admin-espacios/create')}}">Registrar Nuevo</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>Auditorio/Laboratorio</th>
                                    <th>Imagen</th>
                                    <th>Capacidad</th>
                                    <th>Status</th>
                                    <th>Opciones</th>
                                </tr>
                                @if(isset($espacios))
                                    @foreach($espacios as $esp)
                                    <tr>
                                        <td>{{$esp->esp_nombre}}</td>
                                        <td>
                                            @if($esp->esp_foto == null)
                                                -
                                            @else
                                                <img src="{{ "data:image/" . $esp->esp_fototype . ";base64," . $esp->esp_foto }}" style="max-width:75px;">
                                            @endif
                                        </td>
                                        <td>{{$esp->esp_capacidad}}</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
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

@endsection
