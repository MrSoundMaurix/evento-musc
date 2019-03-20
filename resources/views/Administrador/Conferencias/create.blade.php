@extends('layouts.panel')
@section('title','EVENT MUSC| AGREGAR CONFERENCIA')
{{--  @section('nav')
    @include('layouts.nav')
@stop  --}}
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
                                        <li><a href="#">CONFERENCIAS</a> <span class="bread-slash">/</span>
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
                                <li class="active"><a href="#description">Detalles Conferencias</a></li>
                                <li><a href="#INFORMATION">Información Social</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="/upload" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="nombrecurso" type="text" class="form-control" placeholder="Nombre">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="fechacurso" id="finish" type="text" class="form-control" placeholder="Fecha Inicio">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="duracion" type="text" class="form-control" placeholder="Duración">
                                                                </div>
                                                                {{--  <div class="form-group">
                                                                    <input name="price" type="number" class="form-control" placeholder="Taller Price">
                                                                </div>  --}}
                                                                <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Suelta el adjunto aquí o haz clic para subir.</h2>
                                                                        <p class="edudropnone"><span class="note needsclick">(Archivos Adjuntos.)</span>
                                                                        </p>
                                                                        <input name="imageico" class="hd-pro-img" type="text" />
                                                                    </div>
                                                                </div>
                                                                   <hr>
                                                                <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Suelta la imagen aquí o haz clic para subir.</h2>
                                                                        <p class="edudropnone"><span class="note needsclick">(Imagen.)</span>
                                                                        </p>
                                                                        <input name="imageico" class="hd-pro-img" type="text" />
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15">
                                                                    <input name="carrera" type="text" class="form-control" placeholder="Carrera">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="descripcion" placeholder="Descripción"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="instructor" type="text" class="form-control" placeholder="Instructor">

                                                                </div>

                                                               {{--   <div class="form-group">
                                                                    <input id="year" name="year" type="text" class="form-control" placeholder="Year">
                                                                </div>  --}}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">GUARDAR</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
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
