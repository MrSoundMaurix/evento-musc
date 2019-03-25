@extends('layouts.panel')
@section('title','CIMA | Concursos')

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
    <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    @include('includes.messages')
            </div>
    </div>
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Concursos</h4>
                        <div class="add-product">
                            <a href="{{url('admin-concursos/create')}}">Registrar Nuevo</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>Nombre del Concurso</th>
                                    <th>Reglamento/PDF</th>
                                    <th>Status</th>
                                    <th>Opciones</th>
                                </tr>
                                @if(isset($concursos))
                                    @foreach($concursos as $css)
                                    <tr>
                                        <td>{{$css->css_nombre}}</td>
                                        <td>
                                           <object width="200px"  data="{{Storage::url($css->css_reglamento)}}"></object>
                                        </td>
                                        <td>
                                        @if ($css->css_status==true)
                                            Activo
                                        @else
                                            Inactivo
                                        @endif
                                        </td>

                                        <td>
                                            <a  href="{{URL::action('Administrador\ConcursoController@edit',$css->css_id)}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></button> </a>
                                    {{--         <a  href="{{URL::action('Administrador\ConcursoController@destroy',$css->css_id)}}"><button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button> </a> --}}
                                            <a href="{{url('admin-concursos-destroy/'.$css->css_id.'')}}"><button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                            {{-- <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> --}}
                                          {{-- <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button> --}}
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
