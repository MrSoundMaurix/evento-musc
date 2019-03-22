@extends('layouts.panel')
@section('title','CIMA| TALLERES')
@section('content')
{{--
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

                                        <button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                @endforeach

                            </table>
                            {{$talleres->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}

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

    <div class="contacts-area mg-b-15">

            <div class="container-fluid">
                    <div class="product-status-wrap">
                            <h4>LISTADO DE TALLERES</h4>
                    </div>
                    @foreach ($talleres as $taller)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                            <div class="panel-body custom-panel-jw">
                                <div class="courses-title">
                                        @if($taller->tal_foto == null)
                                        <img src="{{ asset('img/logo-icon.png')}}" title="Ícono evento" style="max-width:175px;height:150px;"/>
                                        @else
                                            <img title="{{$taller->tal_tema}}" src="{{ "data:image/" . $taller->tal_fototype . ";base64," . $taller->tal_foto }}" style="max-width:190px;height:150px;">
                                        @endif
                                        <hr>
                                    <h2>
                                            <a href="{{route('asistente-talleres.show',$taller->tal_id)}}" class="text-{{$taller->tal_estado === TRUE ? 'primary' :'danger' }}"
                                            title="{{$taller->tal_estado === TRUE ? 'disponible' :'agotado' }}">
                                            {{$taller->tal_tema}}
                                            </a>

                                    </h2>

                                </div>
                                <div class="courses-alaltic" style="background-color: {{$taller->tal_estado === TRUE ? '#aed6f1' :' #e6b0aa ' }}   ; padding:15px 5px;opacity:0.6;">
                                    <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-calendar"></i></span> {{$taller->tal_fecha}}</span><br>
                                    <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-home"></i></span> {{$taller->espacio->esp_nombre}}</span>
                                </div>
                                <div class="course-des">
                                    <p><span><i class="fa fa-clock"></i></span> <b class="text-primary">Hora Inicio:</b> {{$taller->tal_horainicio}}</p>
                                    <p><span><i class="fa fa-clock"></i></span> <b class="text-primary">Hora Fin:</b> {{$taller->tal_horafin}}</p>
                                    <p><span><i class="fa fa-clock"></i></span> <b class="text-primary">Instructor:</b> {{$taller->instructor->ins_nombres}}</p>
                                </div>
                                <div class="product-buttons">
                                    {{--  <button type="button" class="button-default cart-btn"> Red</button>  --}}

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>

@stop





