@extends('layouts.panel')
@section('title','EVENT MUSC| TALLERES')
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
<div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>LISTADO TALLERES</h4>
                        @include('layouts.messages')
                        <div class="add-product">
                            <a href="{{ url('admin-talleres/create') }}">Registrar Nuevo</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>Tema</th>

                                    <th>Fecha</th>
                                    <th>Hora Inicio</th>
                                    <th>Hora Fin</th>
                                    <th>Categoría</th>
                                    <th>Instructor</th>
                                    <th>Opciones</th>
                                </tr>
                                @foreach ($talleres as $taller)
                                <tr>
                                      <td><a href="{{route('admin-talleres.show',$taller->tal_id)}}" class="text-{{$taller->tal_estado === TRUE ? 'primary' :'danger' }}"
                                          title="{{$taller->tal_estado === TRUE ? 'disponible' :'agotado' }}">{{$taller->tal_tema}}</a></td>
                                    <td>{{$taller->tal_fecha}}</td>
                                    <td>{{$taller->tal_horainicio}}</td>
                                    <td>{{$taller->tal_horafin}}</td>
                                    <td>{{$taller->categoria->cat_nombre}}</td>
                                    <td>{{$taller->instructor->ins_nombres.' '}}{{$taller->instructor->ins_apellidos}}</td>
                                    <td>
                                        <a href="{{route('admin-talleres.edit',$taller->tal_id)}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                              {{--             <a href="{{route('admin-talleres.show',$taller->tal_id)}}"><button data-toggle="tooltip" title="Ver" class="pd-setting-ed"><i class="fa fa-folder-open" aria-hidden="true"></i></button></a>
  --}}
                                        <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                @endforeach

                            </table>
                            {{$talleres->links()}}
                        </div>
                       {{--   <div class="custom-pagination">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop


