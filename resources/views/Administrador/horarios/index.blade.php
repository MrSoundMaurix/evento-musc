@extends('layouts.panel')
@section('title','CIMA| HORARIOS')
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
                                <li><a href="#">HORARIOS</a> <span class="bread-slash">/</span>
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
                        <h4>HORARIOS</h4>
                        @include('layouts.messages')
                        @include('Administrador.horarios.create')
                        <div class="add-product">

                            <a title="Nuevo Horario " data-toggle="modal" data-target="#modalCreate"
                            href="#" class=""></i>Registrar Nuevo</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>Hora Inicio</th>
                                    <th>Hora Fin</th>
                                </tr>
                                @foreach ($horarios as $horario)
                                <tr>
                                    <td>{{$horario->horainicio}}</td>
                                    <td>{{$horario->horafin}}</td>
                                </tr>
                                @endforeach

                            </table>
                            {{$horarios->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop




