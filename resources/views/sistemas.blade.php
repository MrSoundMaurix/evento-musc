<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TheEvent - Bootstrap Event Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Home</a></li>
                    <li><a href="{{ url('sistemas') }}">Sistemas</a></li>
                    <li><a href="#speakers">Speakers</a></li>
                    <li><a href="#schedule">Schedule</a></li>
                    <li><a href="#venue">Venue</a></li>
                    <li><a href="#hotels">Hotels</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#sponsors">Sponsors</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">The Annual<br><span>Marketing</span> Conference</h1>
            <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            <a href="#about" class="about-btn scrollto">About The Event</a>
        </div>
    </section>

    <main id="main">
        <!--==========================
      schedule Section
    ============================-->
        <section id="schedule" class="section-with-bg">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h2>Event schedule</h2>
                    <p>Here is our event schedule</p>
                </div>

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#conferencias" role="tab" data-toggle="tab">Conferencias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#talleres" role="tab" data-toggle="tab">Talleres</a>
                    </li>
                </ul>


                    <ul role="tabpanel" class="nav nav-tabs tab-pane fade show active" role="tablist" style="width: 1240px;" id="conferencias">
                        <li class="nav-item">
                            <a class="nav-link active" href="#day-1c" role="tab" data-toggle="tab">Day 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#day-2c" role="tab" data-toggle="tab">Day 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#day-3c" role="tab" data-toggle="tab">Day 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#day-4c" role="tab" data-toggle="tab">Day 4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#day-5c" role="tab" data-toggle="tab">Day 5</a>
                        </li>
                    </ul>



                    <ul role="tabpanel" class="nav nav-tabs tab-pane fade" role="tablist" id="talleres">
                        <li class="nav-item">
                            <a class="nav-link active" href="#day-1t" role="tab" data-toggle="tab">Day 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#day-2t" role="tab" data-toggle="tab">Day 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#day-3t" role="tab" data-toggle="tab">Day 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#day-4t" role="tab" data-toggle="tab">Day 4</a>
                        </li>
                    </ul>


                <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius necessitatibus voluptatem
                    quis labore perspiciatis quia.</h3>

                <div class="tab-content row justify-content-center">
{{-- conferencias --}}
                    <!-- Schdule Day 1 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1c">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>09:30 AM</time></div>
                            <div class="col-md-10">
                                <h4>Registration</h4>
                                <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/1.jpg" alt="Brenden Legros">
                                </div>
                                <h4>Keynote <span>Brenden Legros</span></h4>
                                <p>Facere provident incidunt quos voluptas.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                                </div>
                                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                                </div>
                                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>02:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                                </div>
                                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>03:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                                </div>
                                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>04:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/6.jpg" alt="Willow Trantow">
                                </div>
                                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                            </div>
                        </div>

                    </div>
                    <!-- End Schdule Day 1 -->

                    <!-- Schdule Day 2 -->
                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2c">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/1.jpg" alt="Brenden Legros">
                                </div>
                                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                                <p>Facere provident incidunt quos voluptas.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                                </div>
                                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                                </div>
                                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>02:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                                </div>
                                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>03:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                                </div>
                                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>04:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/6.jpg" alt="Willow Trantow">
                                </div>
                                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                            </div>
                        </div>

                    </div>
                    <!-- End Schdule Day 2 -->

                    <!-- Schdule Day 3 -->
                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3c">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                                </div>
                                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                                </div>
                                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/1.jpg" alt="Brenden Legros">
                                </div>
                                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                                <p>Facere provident incidunt quos voluptas.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>02:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                                </div>
                                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>03:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                                </div>
                                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>04:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/6.jpg" alt="Willow Trantow">
                                </div>
                                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                            </div>
                        </div>

                    </div>
                    <!-- End Schdule Day 3 -->

                    <!-- Schdule Day 4 -->
                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-4c">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                                </div>
                                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                                </div>
                                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/1.jpg" alt="Brenden Legros">
                                </div>
                                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                                <p>Facere provident incidunt quos voluptas.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>02:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                                </div>
                                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>03:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                                </div>
                                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>04:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/6.jpg" alt="Willow Trantow">
                                </div>
                                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                            </div>
                        </div>

                    </div>
                    <!-- End Schdule Day 4 -->

                    <!-- Schdule Day 5 -->
                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-5c">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                                </div>
                                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                                </div>
                                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/1.jpg" alt="Brenden Legros">
                                </div>
                                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                                <p>Facere provident incidunt quos voluptas.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>02:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                                </div>
                                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>03:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                                </div>
                                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>04:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/6.jpg" alt="Willow Trantow">
                                </div>
                                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                            </div>
                        </div>

                    </div>
                    <!-- End Schdule Day 5 -->

{{-- talleres --}}
                    <!-- Schdule Day 1 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade" id="day-1t">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>09:30 AM</time></div>
                            <div class="col-md-10">
                                <h4>Registration</h4>
                                <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/1.jpg" alt="Brenden Legros">
                                </div>
                                <h4>Keynote <span>Brenden Legros</span></h4>
                                <p>Facere provident incidunt quos voluptas.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                                </div>
                                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                                </div>
                                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>02:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                                </div>
                                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>03:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                                </div>
                                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>04:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/6.jpg" alt="Willow Trantow">
                                </div>
                                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                            </div>
                        </div>

                    </div>
                    <!-- End Schdule Day 1 -->

                    <!-- Schdule Day 2 -->
                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2t">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/1.jpg" alt="Brenden Legros">
                                </div>
                                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                                <p>Facere provident incidunt quos voluptas.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                                </div>
                                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                                </div>
                                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>02:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                                </div>
                                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>03:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                                </div>
                                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>04:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/6.jpg" alt="Willow Trantow">
                                </div>
                                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                            </div>
                        </div>

                    </div>
                    <!-- End Schdule Day 2 -->

                    <!-- Schdule Day 3 -->
                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3t">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                                </div>
                                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                                </div>
                                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/1.jpg" alt="Brenden Legros">
                                </div>
                                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                                <p>Facere provident incidunt quos voluptas.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>02:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                                </div>
                                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>03:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                                </div>
                                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>04:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/6.jpg" alt="Willow Trantow">
                                </div>
                                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                            </div>
                        </div>

                    </div>
                    <!-- End Schdule Day 3 -->

                    <!-- Schdule Day 4 -->
                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-4t">

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>10:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                                </div>
                                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>11:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                                </div>
                                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>12:00 AM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/1.jpg" alt="Brenden Legros">
                                </div>
                                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                                <p>Facere provident incidunt quos voluptas.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>02:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                                </div>
                                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>03:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                                </div>
                                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2"><time>04:00 PM</time></div>
                            <div class="col-md-10">
                                <div class="speaker">
                                    <img src="img/speakers/6.jpg" alt="Willow Trantow">
                                </div>
                                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
                            </div>
                        </div>

                    </div>
                    <!-- End Schdule Day 4 -->
                    
                </div>

            </div>

        </section>

        <!--==========================
      Buy Ticket Section
    ============================-->
        <section id="buy-tickets" class="section-with-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h2>Buy Tickets</h2>
                    <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                                <h6 class="card-price text-center">$150</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                                <h6 class="card-price text-center">$250</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pro Tier -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                                <h6 class="card-price text-center">$350</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Modal Order Form -->
            <div id="buy-ticket-modal" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Buy Tickets</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <select id="ticket-type" name="ticket-type" class="form-control">
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn">Buy Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

        </section>

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="section-bg wow fadeInUp">

            <div class="container">

                <div class="section-header">
                    <h2>Contact Us</h2>
                    <p>Nihil officia ut sint molestiae tenetur.</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Address</h3>
                            <address>A108 Adam Street, NY 535022, USA</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">info@example.com</a></p>
                        </div>
                    </div>

                </div>

                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                                />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"
                                />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"
                            />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>
        </section>
        <!-- #contact -->

    </main>


    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="img/logo.png" alt="TheEvenet">
                        <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam
                            porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In
                            inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br> New York, NY 535022<br> United States <br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
</body>

</html>
