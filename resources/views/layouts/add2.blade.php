<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
<!-- Bootstrap CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/bootstrap.min.css')}}">
<!-- Bootstrap CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/font-awesome.min.css')}}">
<!-- owl.carousel CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/owl.theme.css')}}">
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/owl.transitions.css')}}">
<!-- animate CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/animate.css')}}">
<!-- normalize CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/normalize.css')}}">
<!-- meanmenu icon CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/meanmenu.min.css')}}">
<!-- main CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/main.css')}}">
<!-- forms CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/form/all-type-forms.css')}}">
<!-- educate icon CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/educate-custon-icon.css')}}">
<!-- morrisjs CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/morrisjs/morris.css')}}">
<!-- dropzone CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/dropzone/dropzone.css')}}">
<!-- mCustomScrollbar CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
<!-- metisMenu CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/metisMenu/metisMenu.min.css')}}">
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/metisMenu/metisMenu-vertical.css')}}">
<!-- calendar CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/calendar/fullcalendar.min.css')}}">
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/calendar/fullcalendar.print.min.css')}}">
<!-- style CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/style.css')}}">
<!-- responsive CSS
    ============================================ -->
<link rel="stylesheet" href="{{ asset('kiaalap-master/css/responsive.css')}}">
<!-- modernizr JS
    ============================================ -->
<script src="{{ asset('kiaalap-master/js/vendor/modernizr-2.8.3.min.js')}}"></script>

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
                                            <input type="text" placeholder="Search..." class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">TALLERES-CONFERENCIAS</a> <span class="bread-slash">/</span>
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
                                <li class="active"><a href="#description">Talleres Details</a></li>
                                <li><a href="#reviews"> Acount Information</a></li>
                                <li><a href="#INFORMATION">Social Information</a></li>
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
                                                                    <input name="coursename" type="text" class="form-control" placeholder="Taller Name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="finish" id="finish" type="text" class="form-control" placeholder="Taller Start Date">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="duration" type="text" class="form-control" placeholder="Taller Duration">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="price" type="number" class="form-control" placeholder="Taller Price">
                                                                </div>
                                                                <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                        <p class="edudropnone"><span class="note needsclick">(This is just a demo dropzone. Selected image is <strong>not</strong> actually uploaded.)</span>
                                                                        </p>
                                                                        <input name="imageico" class="hd-pro-img" type="text" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15">
                                                                    <input name="department" type="text" class="form-control" placeholder="Department">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="description" placeholder="Description"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="crprofessor" type="text" class="form-control" placeholder="Professor">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="year" name="year" type="text" class="form-control" placeholder="Year">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" placeholder="Phone">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Confirm Password">
                                                            </div>
                                                            <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                        </div>
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
																<input type="url" class="form-control" placeholder="Facebook URL">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Twitter URL">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Google Plus">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Linkedin URL">
															</div>
															<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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

  <!-- maskedinput JS
    ============================================ -->
<script src="{{ asset('kiaalap-master/js/jquery.maskedinput.min.js')}}"></script>
<script src="{{ asset('kiaalap-master/js/masking-active.js')}}"></script>
<!-- datepicker JS
    ============================================ -->
<script src="{{ asset('kiaalap-master/js/datepicker/jquery-ui.min.js')}}"></script>
<script src="{{ asset('kiaalap-master/js/datepicker/datepicker-active.js')}}"></script>
<!-- form validate JS
    ============================================ -->
<script src="{{ asset('kiaalap-master/js/form-validation/jquery.form.min.js')}}"></script>
<script src="{{ asset('kiaalap-master/js/form-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('kiaalap-master/js/form-validation/form-active.js')}}"></script>
<!-- dropzone JS
    ============================================ -->
<script src="{{ asset('kiaalap-master/js/dropzone/dropzone.js')}}"></script>
<!-- tab JS
    ============================================ -->
<script src="{{ asset('kiaalap-master/js/tab.js')}}"></script>
