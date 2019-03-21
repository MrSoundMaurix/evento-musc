@extends('index')
@section('contenido')
    <!--==========================
    schedule Section
    ============================-->
        <section id="schedule" class="section-with-bg">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h2>Conferencias</h2>
                    <p>Here is our event schedule</p>
                </div>

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Día 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Día 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Día 3</a>
                    </li>                  
                </ul>

                <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius necessitatibus voluptatem
                    quis labore perspiciatis quia.</h3>

                <div class="tab-content row justify-content-center">

                    <!-- Schdule Day 1 -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

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
                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

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
                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

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
@endsection