@extends('layouts.panel')
@section('title','CIMA| AGREGAR TALLER')
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
                                        <li><a href="#">TALLERES</a> <span class="bread-slash">/</span>
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
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Detalles Talleres</a></li>
                               {{--   <li><a href="#INFORMATION">Información Social</a></li>  --}}

                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                        @include('layouts.messages')
                                                        {!! Form::open(['url' => 'admin-talleres','files' => 'true']) !!}
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">Tema</span>
                                                                    <input name="tal_tema" type="text" class="form-control" placeholder="Mi taller" value="{{old('tal_tema')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                            <span class="input-group-addon">Fecha</span>
                                                                        <input name="tal_fecha"  type="date" class="form-control" value="{{old('tal_fecha')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">Hora Inicio</span>
                                                                    <input name="tal_horainicio" type="time" class="form-control"  value="{{old('tal_horainicio')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                            <span class="input-group-addon">Hora Fin</span>
                                                                        <input name="tal_horafin" type="time" class="form-control"  value="{{old('tal_horafin')}}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">Espacio</span>
                                                                        <select name="esp_id" class="form-control">
                                                                            <option value="" selected="" disabled="">--Seleccionar--</option>
                                                                            @foreach($espacios as $esp)
                                                                            <option value="{{$esp->esp_id}}">{{$esp->esp_nombre}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">Categoría</span>
                                                                        <select name="cat_id" class="form-control">
                                                                            <option value="" selected="" disabled="">--Seleccionar--</option>
                                                                            @foreach($categorias as $cat)
                                                                            <option value="{{$cat->cat_id}}">{{$cat->cat_nombre}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                            <span class="input-group-addon">Instructor</span>
                                                                            <select name="ins_id" class="form-control">
                                                                                <option value="" selected="" disabled="">--Seleccionar--</option>
                                                                                @foreach($instructores as $ins)
                                                                                <option value="{{$ins->ins_id}}">{{$ins->ins_nombres.' '}}{{$ins->ins_apellidos}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                      {{--    <i class="fa fa-download edudropnone" aria-hidden="true"></i>  --}}
                                                                        <h2 class="edudropnone">Haz clic para subir una imagen.</h2>


                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="tal_foto" type="file"  class="btn btn-default">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



                                                                <div class="form-group">
                                                                        <span class="input-group-addon"> Materiales</span>
                                                                    <textarea name="tal_materiales" placeholder=""></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                        <span class="input-group-addon"> Resúmen</span>
                                                                        <textarea name="tal_resumen" placeholder=""></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                        <span class="input-group-addon"> Previos</span>
                                                                        <textarea name="tal_cprevios" placeholder=""></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">GUARDAR</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                {!! Form::close() !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
												<div class="row">
													<div class="col-lg-12">
														<div class="devit-card-custom">
															<div class="form-group">
																<input type="url" class="form-control" name="fb" placeholder="Facebook URL">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" name="tw" placeholder="Twitter URL">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" name="gp" placeholder="Google Plus">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" name="lk" placeholder="Linkedin URL">
															</div>
															<button type="submit" class="btn btn-primary waves-effect waves-light">GUARDAR</button>
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
            </div>
        </div>



@stop
