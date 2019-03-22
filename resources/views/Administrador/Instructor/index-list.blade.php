@extends('layouts.panel')
@section('title','EVENT MUSC| INSTRUCTORES')
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
                    <h4>LISTADO INSTRUCTORES</h4>
                    <div class="add-product">
                        <a href="{{ url('admin-instructores/create') }}">Registrar Nuevo</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Nro</th>
                                <th>Fotografía</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Hoja de Vida</th>
                                <th>Correo</th>
                                <th>Nacionalidad</th>
                                <th>Opciones</th>
                            </tr>
                            <?php $a=1; ?>
                            @foreach($instructores as $inst)
                            
                            <tr>
                                <td>{{ $a }}</td>
                                <?php $a=$a+1; ?>
                                <td>
                                @if($inst->ins_foto == null)
                                    -
                                @else
                                    <img src="{{ "data:image/" . $inst->ins_fototype . ";base64," . $inst->ins_foto }}" style="max-width:75px;">
                                @endif
                                </td>
                                <td>{{ $inst->ins_nombres }}</td>
                                <td>{{ $inst->ins_apellidos }}</td>
                                <td>
                                    <a href="{{url('admin-instructores-pdf/'.$inst->ins_id.'')}}"><button class="pd-setting" style="font-size:20px">Ver <i class="fa fa-file-pdf-o"></i></button></a>
                                </td>
                                <td>{{ $inst->ins_email }}</td>
                                <td>{{ $inst->ins_pais }}</td>
                                <td>
                                    <a href="{{url('admin-instructores/'.$inst->ins_id.'/edit')}}"><button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                    <a href="{{url('admin-instructores-destroy/'.$inst->ins_id.'')}}"><button data-toggle="tooltip" title="Eliminar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    {{$instructores->render()}}
                </div>
            </div>
        </div>
    </div>
</div>

@stop
