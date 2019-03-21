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
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Información Básica</a></li>
                                <li><a href="#reviews">Información Cuenta</a></li>
                                <li><a href="#INFORMATION">Información Social</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                        <input name="ci" id="ci" type="text" class="form-control" placeholder="Cédula" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="nombres" type="text" class="form-control" placeholder="Nombres Completos">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="nacionalidad" type="text" class="form-control" placeholder="Nacionalidad">
                                                                </div>

                                                                {{--  <div class="form-group">
                                                                    <input name="finish" id="finish" type="text" class="form-control" placeholder="Fecha de nacimiento">
                                                                </div>  --}}
                                                                {{--  <div class="form-group">
                                                                    <input name="postcode" id="postcode" type="text" class="form-control" placeholder="Postcode">
                                                                </div>  --}}
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


                                                                <div class="form-group">
                                                                    <select name="gender" class="form-control">
																		<option value="none" selected="" disabled="">Seleccionar Género</option>
																		<option value="0">Hombre</option>
																		<option value="1">Mujer</option>
																	</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="nacionalidad" class="form-control">
                                                                        <option value="none" selected="" disabled="">Seleccionar Nacionalidad</option>
                                                                        <option value="2" onclick="setCedula('ecuador')">Ecuador</option>
                                                                        <option value="3" onclick="setCedula('colombia')">Colombia</option>
                                                                        <option value="4" onclick="setCedula('mexico')">Mexico</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <select name="ciudad" class="form-control">
																			<option value="none" selected="" disabled="">Seleccionar Ciudad</option>
																			<option value="0">Ibarra</option>
																			<option value="1">Quito</option>
																			<option value="2">Ambato</option>
																			<option value="3">Guayaquil</option>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="website" type="text" class="form-control" placeholder="URL Sitio Web">
                                                                </div>
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="domicilio" placeholder="Descripción Domicilio"></textarea>
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
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <form id="acount-infor" action="#" class="acount-infor">
                                                            <div class="devit-card-custom">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="correo" placeholder="Correo electrónico">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="celular" type="text" class="form-control" placeholder="Celular">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="contraseña" type="password" class="form-control" placeholder="Contraseña">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="confarmcontraseña" type="password" class="form-control" placeholder="Confirmar Contraseña">
                                                                </div>
                                                                <a href="#" class="btn btn-primary waves-effect waves-light">GUARDAR</a>
                                                            </div>
                                                        </form>
                                                    </div>
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
        <script type="text/javascript">

            function setCedula(ciudad){
                if(ciudad == 'ecuador'){
                document.getElementById('ci').disabled=false;
                document.getElementById('ci').placeholder="Ingrese identificación Ecuatoriana";
                }
                else if(ciudad=='colombia'){
                document.getElementById('ci').disabled=false;
                document.getElementById('ci').placeholder="Ingrese identificación Colombiana";
                }
                else if(ciudad=='mexico'){
                document.getElementById('ci').disabled=false;
                document.getElementById('ci').placeholder="Ingrese identificación Mexicana ";
                }
            }
        </script>
@stop


