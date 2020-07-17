@extends('parts.layout')
@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>About</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li class="active">About</li>
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

    <!-- Company Area -->
    <section class="home-company-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="company-content">
                        <div class="company-tittle">
                            <span>Our Company</span>
                            <h2>Innovative It Helping Service Allover the World</h2>

                            <p>It is a long established fact that a reader will be distracted by the rea dable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed to using Content here,content here normal distribution looking at its.</p>

                            <p>It is a long established fact that a reader will be distracted by the rea dable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more or less normal distribution of letters, as opposed to using Content here,content here normal distribution looking at its.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="company-img">
                        <img src="assets/images/company/company-img.jpg" alt="company" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Company Area -->

    <!-- Start Technology Area -->
    <section class="technology-area ptb-100 bg-color">
        <div class="container">
            <div class="row align-items-center choose-c">
                <div class="col-lg-6">
                    <div class="choose-img">
                        <img src="assets/images/choose-img1.jpg" alt="choose" />
                        <div class="technology-video">
                            <a href="https://www.youtube.com/watch?v=TdSA7gkVYU0" class="video-btn popup-youtube">
                                <i class='bx bx-play'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="technology-content">
                        <h2>Updated Technology</h2>
                        <p>You need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with.</p>

                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going There are many variations of passages of Lorem Ipsum available, but the.</p>

                        <a href="contact.html" class="box-btn">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Technology Area -->

    <!-- Feature Area -->
    <section class="feature-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contnet">
                        <div class="feature-tittle">
                            <span>Features</span>
                            <h2>We Have Also Some Features That Provided by Paso</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt consectetur, beatae quod eaque reprehenderit non ab quibusdam doloribus voluptatibus! Voluptatum aspernatur quasi id dolore doloremque quo vero</p>
                        </div>

                        <ul>
                            <li>
                                <i class="flaticon-correct"></i>
                                Freelancing Traning Course
                            </li>
                            <li>
                                <i class="flaticon-correct"></i>
                                Technological Consultation
                            </li>
                            <li>
                                <i class="flaticon-correct"></i>
                                Monthly Paid Workspace
                            </li>
                            <li>
                                <i class="flaticon-correct"></i>
                                IT Learning Institute
                            </li>
                            <li>
                                <i class="flaticon-correct"></i>
                                Digital Marketing
                            </li>
                        </ul>
                        <a href="about.html" class="box-btn">Lets Talk!</a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature-img">
                        <img src="assets/images/feature-img.png" alt="feature" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Area -->

    <!-- Start Client Area -->
    <section class="client-area ptb-100 bg-color">
        <div class="container">
            <div class="section-title">
                <span>Testimonials</span>
                <h2>What Our Client’s Say</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A facilis vel consequatur tempora atque blanditiis exercitationem incidunt, alias corporis quam assumenda dicta.</p>
            </div>

            <div class="client-wrap owl-carousel owl-theme">
                <div class="single-client">
                    <img src="assets/images/client/1.jpg" alt="img">

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem Ipsum is simply dummy text of the printing Quis suspendisse typesetting ipsum dolor sit amet,</p>

                    <h3>Steven Jony</h3>
                    <span>CEO of Company</span>
                </div>

                <div class="single-client">
                    <img src="assets/images/client/2.jpg" alt="img">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem Ipsum is simply dummy text of the printing Quis suspendisse typesetting ipsum dolor sit amet,</p>

                    <h3>Omit Jacson</h3>
                    <span>Company Founder</span>
                </div>
            </div>
        </div>
    </section>
    <!-- End Client Area -->
    @stop
