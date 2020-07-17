@extends('parts.layout')
@section('content')


    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
        <div class="page-shape">
            <div class="shape1">
                <img src="assets/images/shape/1.png" alt="shape" />
            </div>
            <div class="shape3">
                <img src="assets/images/shape/3.png" alt="shape" />
            </div>
            <div class="shape4">
                <img src="assets/images/shape/4.png" alt="shape" />
            </div>
            <div class="shape5">
                <img src="assets/images/shape/5.png" alt="shape" />
            </div>
            <div class="shape6">
                <img src="assets/images/shape/6.png" alt="shape" />
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Contact  -->
    <section class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact">
                        <div class="icon">
                            <i class='bx bx-time'></i>
                        </div>
                        <div class="content">
                            <h3>Opening Hours</h3>
                            <p>Sun - Thu : 10:00 AM - 06:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact">
                        <div class="icon">
                            <i class='bx bx-location-plus'></i>
                        </div>
                        <div class="content">
                            <h3>Address</h3>
                            <p>28/A Street, New York City, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single-contact">
                        <div class="icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <div class="content">
                            <h3>Phone</h3>
                            <p>+1 (321) 984 754</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact  -->

    <!-- Home Contact Area -->
    <section class="home-contact-area home-2-contact pb-100">
        <div class="container">
            <div class="section-title">
                <span>Contact Us</span>
                <h2>Let Us Know About Your Project Idea!</h2>
                <p>It is a long established fact that a reader will be distracted by the rea dable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more.</p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="content">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn page-btn box-btn">
                                        Submit
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="contact-img contact-img-2">
                        <img src="assets/images/contact-img2.jpg" alt="contact" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
    @stop
