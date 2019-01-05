@extends('client.template.app')

@section('content')
<!-- Loader -->
    <div class="loader-con">
        <div class="spinner center">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- End Loader -->

    <!-- MAIN NAVIGATION BAR -->
    <header class="nav-wrapper effect">
        <nav class="navbar-custom">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bm-navbar"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand effect" href="index.html">
                        <img src="img/logo.jpg" alt="">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bm-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home" class="scroll effect active" data-speed="800">HOME</a></li>
                        <li><a href="#about" class="scroll effect" data-speed="1000">ABOUT</a></li>
                        <li><a href="#services" class="scroll effect" data-speed="1400">SERVICES</a></li>
                        <li><a href="#work" class="scroll effect" data-speed="1400">WORK</a></li>
                        <li><a href="#clients" class="scroll effect" data-speed="1600">CLIENTS</a></li>
                        <li><a href="#contact" class="scroll effect" data-speed="1700">CONTACT</a></li>
                    </ul>
                </div><!-- End navbar-collapse -->

            </div><!-- End container -->
        </nav>
    </header>
    <!-- END MAIN NAVIGATION BAR -->

    <!-- HOME -->
    <section id="home" class="home-3 one-page-section">
        <div class="owl-carousel home-carousel">

            <div class="first-slide page-table parallax">
                <div class="table-cell text-center">
                    <h1 class="big-title">I'AM JASON DOE</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat arcu ut orci portaeget porttitor <br>felis suscipit. Sed a nisl ullamcorper, tempus augue at, rutrum lacus. Duis et turpis eros.</p>

                    <a href="#work" class="slider-btn effect scroll" data-speed="800">View Works</a>
                </div>
            </div>

            <div class="second-slide page-table parallax">
                <div class="table-cell text-center">
                    <h1 class="big-title">I AM PASSIONATE AND CREATIVE</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat arcu ut orci portaeget porttitor <br>felis suscipit. Sed a nisl ullamcorper, tempus augue at, rutrum lacus. Duis et turpis eros.</p>

                    <a href="#contact" class="slider-btn effect scroll" data-speed="800">contact me</a>
                </div>
            </div>

            <div class="third-slide page-table parallax">
                <div class="table-cell text-center">
                    <h1 class="big-title">I'M A PROFESSIONAL DEVELOPER</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat arcu ut orci portaeget porttitor <br>felis suscipit. Sed a nisl ullamcorper, tempus augue at, rutrum lacus. Duis et turpis eros.</p>

                    <a href="https://www.youtube.com/watch?v=lhwYc0eHCEY" class="slider-btn effect popup-youtube">CALL TO ACTION</a>
                </div>
            </div>

        </div>
    </section>
    <!-- END HOME -->

    <!-- ABOUT -->
    <section id="about" class="section one-page-section">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-md-6">
                    <div class="about-content">
                        <h2>Hi There! I'm Norman Doe</h2>
                        <p>I am a professional web designer from Manchester, England. I create beautiful professional websites using best practice accessibility. I enjoy turning complex problems into simple, beautiful and intuitive interface designs.</p>

                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li><span><i class="fa fa-envelope"></i> Email : </span>Norman@gmail.com</li>
                                    <li><span><i class="fa fa-map-marker"></i> Location : </span>4373, El Centro, CA.</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li><span><i class="fa fa-calendar"></i> Date of birth : </span>8 Juin 1995</li>
                                    <li><span><i class="fa fa-phone"></i> Phone : </span>+1-202-555-0138</li>
                                </ul>
                            </div>
                        </div>

                        <ul class="social-list">
                            <li><a href="#" class="effect"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="effect"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="effect"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="effect"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="effect"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="effect"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-xs-12 col-md-6 skills-section">

                    <div class="progress-bar-linear">
                        <p class="progress-bar-text">HTML5, CSS3</p>
                        <div class="progress-cont">
                            <span class="main-color progress-bar-text">98%</span>
                        </div>
                        <div class="progress-bar-skills">
                            <div class="progress-bar-line main-color-bg" data-percent="98"></div>
                        </div>
                    </div>
                    <div class="progress-bar-linear">
                        <p class="progress-bar-text">ADOBE PHOTOSHOP</p>
                        <div class="progress-cont">
                            <span class="main-color progress-bar-text">92%</span>
                        </div>
                        <div class="progress-bar-skills">
                            <div class="progress-bar-line main-color-bg" data-percent="92"></div>
                        </div>
                    </div>
                    <div class="progress-bar-linear">
                        <p class="progress-bar-text">PHP & MySQL</p>
                        <div class="progress-cont">
                            <span class="main-color progress-bar-text">86%</span>
                        </div>
                        <div class="progress-bar-skills">
                            <div class="progress-bar-line main-color-bg" data-percent="86"></div>
                        </div>
                    </div>
                    <div class="progress-bar-linear">
                        <p class="progress-bar-text">WORDPRESS</p>
                        <div class="progress-cont">
                            <span class="main-color progress-bar-text">94%</span>
                        </div>
                        <div class="progress-bar-skills">
                            <div class="progress-bar-line main-color-bg" data-percent="94"></div>
                        </div>
                    </div>

                </div>

            </div> <!-- End Row -->
        </div> <!-- End Container -->
    </section>
    <!-- END ABOUT -->

    <!-- ABOUT -->
    <section id="about" class="section one-page-section">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-md-6">
                    <div class="about-content">
                        <h2>Hi There! I'm Norman Doe</h2>
                        <p>I am a professional web designer from Manchester, England. I create beautiful professional
                            websites using best practice accessibility. I enjoy turning complex problems into simple,
                            beautiful and intuitive interface designs.</p>

                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li><span><i class="fa fa-envelope"></i> Email : </span>Norman@gmail.com</li>
                                    <li><span><i class="fa fa-map-marker"></i> Location : </span>4373, El Centro, CA.</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li><span><i class="fa fa-calendar"></i> Date of birth : </span>8 Juin 1995</li>
                                    <li><span><i class="fa fa-phone"></i> Phone : </span>+1-202-555-0138</li>
                                </ul>
                            </div>
                        </div>

                        <ul class="social-list">
                            <li><a href="#" class="effect"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="effect"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="effect"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="effect"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="effect"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="effect"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-xs-12 col-md-6 skills-section">

                    <div class="progress-bar-linear">
                        <p class="progress-bar-text">HTML5, CSS3</p>
                        <div class="progress-cont">
                            <span class="main-color progress-bar-text">98%</span>
                        </div>
                        <div class="progress-bar-skills">
                            <div class="progress-bar-line main-color-bg" data-percent="98"></div>
                        </div>
                    </div>
                    <div class="progress-bar-linear">
                        <p class="progress-bar-text">ADOBE PHOTOSHOP</p>
                        <div class="progress-cont">
                            <span class="main-color progress-bar-text">92%</span>
                        </div>
                        <div class="progress-bar-skills">
                            <div class="progress-bar-line main-color-bg" data-percent="92"></div>
                        </div>
                    </div>
                    <div class="progress-bar-linear">
                        <p class="progress-bar-text">PHP & MySQL</p>
                        <div class="progress-cont">
                            <span class="main-color progress-bar-text">86%</span>
                        </div>
                        <div class="progress-bar-skills">
                            <div class="progress-bar-line main-color-bg" data-percent="86"></div>
                        </div>
                    </div>
                    <div class="progress-bar-linear">
                        <p class="progress-bar-text">WORDPRESS</p>
                        <div class="progress-cont">
                            <span class="main-color progress-bar-text">94%</span>
                        </div>
                        <div class="progress-bar-skills">
                            <div class="progress-bar-line main-color-bg" data-percent="94"></div>
                        </div>
                    </div>

                </div>

            </div> <!-- End Row -->
        </div> <!-- End Container -->
    </section>
    <!-- END ABOUT -->

    <!-- SERVICES -->
    <section id="services" class="section one-page-section second-bg">
        <div class="container">
            <div class="section-title">
                <h2>My services</h2>
            </div>

            <div class="row">

                <div class="col-xs-12 col-md-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-html5 effect"></i>
                        </div>
                        <div class="service-content">
                            <h3>WEB DEVELOPMENT</h3>
                            <div class="s-line"></div>
                            <p>Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper
                                laoreet dapibus et quatre malesuada.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4">
                    <div class="single-service bordered">
                        <div class="service-icon">
                            <i class="fa fa-laptop effect"></i>
                        </div>
                        <div class="service-content">
                            <h3>WEBSITE DESIGN</h3>
                            <div class="s-line"></div>
                            <p>Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper
                                laoreet dapibus et quatre malesuada.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-mobile effect"></i>
                        </div>
                        <div class="service-content">
                            <h3>APP DEVELOPMENT</h3>
                            <div class="s-line"></div>
                            <p>Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper
                                laoreet dapibus et quatre malesuada.</p>
                        </div>
                    </div>
                </div>

                <div class="clear-float"></div>
                <div class="services-separator"></div>

                <div class="col-xs-12 col-md-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-picture-o effect"></i>
                        </div>
                        <div class="service-content">
                            <h3>GRAPHIC DESIGN</h3>
                            <div class="s-line"></div>
                            <p>Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper
                                laoreet dapibus et quatre malesuada.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4">
                    <div class="single-service bordered">
                        <div class="service-icon">
                            <i class="fa fa-camera-retro effect"></i>
                        </div>
                        <div class="service-content">
                            <h3>CREATIVE PHOTOGRAPHY</h3>
                            <div class="s-line"></div>
                            <p>Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper
                                laoreet dapibus et quatre malesuada.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-life-ring effect"></i>
                        </div>
                        <div class="service-content">
                            <h3>ONLINE SUPPORT</h3>
                            <div class="s-line"></div>
                            <p>Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper
                                laoreet dapibus et quatre malesuada.</p>
                        </div>
                    </div>
                </div>

            </div> <!-- End Row -->
        </div> <!-- End Container -->
    </section>
    <!-- END SERVICES -->

    <!-- WORK -->
    <section id="work" class="section one-page-section">
        <div class="container">
            <div class="section-title">
                <h2>My Portfolio</h2>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <ul id="work-list" class="text-center">
                        <li class="main-color">
                            <a href="#" class="filter filter-active effect" data-filter="*">all</a>
                        </li>
                        <li class="main-color">
                            <a href="#" class="filter effect" data-filter=".web">web</a>
                        </li>
                        <li class="main-color">
                            <a href="#" class="filter effect" data-filter=".design">design</a>
                        </li>
                        <li class="main-color">
                            <a href="#" class="filter effect" data-filter=".photography">photography</a>
                        </li>
                        <li class="main-color">
                            <a href="#" class="filter effect" data-filter=".music">Music</a>
                        </li>
                    </ul>
                </div>
            </div> <!-- End Row -->

            <div class="row filtr-container">

                <div class="col-sm-6 col-md-4 filtr-item design web">
                    <div class="single-work mb-30">
                        <a href="img/wok-1.jpg" class="popup-link">
                            <img class="effect" src="img/wok-1.jpg" alt="work-1">
                            <div class="work-overlay effect">
                                <h3>Project Title</h3>
                                <p>WEB DEVELOPMENT</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 filtr-item music design">
                    <div class="single-work mb-30">
                        <a href="img/wok-2.jpg" class="popup-link">
                            <img class="effect" src="img/wok-2.jpg" alt="work-2">
                            <div class="work-overlay effect">
                                <h3>Project Title</h3>
                                <p>MUSIC</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 filtr-item photography web">
                    <div class="single-work mb-30">
                        <a href="img/wok-3.jpg" class="popup-link">
                            <img class="effect" src="img/wok-3.jpg" alt="work-3">
                            <div class="work-overlay effect">
                                <h3>Project Title</h3>
                                <p>PHOTOGRAPHY</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 filtr-item web music">
                    <div class="single-work mb-30">
                        <a href="img/wok-4.jpg" class="popup-link">
                            <img class="effect" src="img/wok-4.jpg" alt="work-4">
                            <div class="work-overlay effect">
                                <h3>Project Title</h3>
                                <p>WEB DEVELOPMENT</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 filtr-item design photography">
                    <div class="single-work mb-30">
                        <a href="img/wok-2.jpg" class="popup-link">
                            <img class="effect" src="img/wok-2.jpg" alt="work-2">
                            <div class="work-overlay effect">
                                <h3>Project Title</h3>
                                <p>WEB DESIGN</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 filtr-item photography">
                    <div class="single-work mb-30">
                        <a href="img/wok-6.jpg" class="popup-link">
                            <img class="effect" src="img/wok-6.jpg" alt="work-6">
                            <div class="work-overlay effect">
                                <h3>Project Title</h3>
                                <p>PHOTOGRAPHY</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div><!-- end row -->
        </div> <!-- End Container -->
    </section>
    <!-- END WORK -->

    <!-- TESTIMONIALS -->
    <section id="clients" class="section one-page-section second-bg">
        <div class="container">
            <div class="section-title">
                <h2>Testimonials</h2>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="owl-carousel testimonial-slider">

                        <div class="one-testimonial">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare diam. Sed commodo nibh facilisis bibendum dolor feugiat.</p>
                            </div>
                            <div class="testimonial-person">
                                <figure>
                                    <img src="http://phydev.web44.net/erizo/img/t-5.jpg" alt="tes-img-5">
                                </figure>
                                <div class="testimonial-inf">
                                    <h4>Amber Cottle</h4>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="one-testimonial">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare diam. Sed commodo nibh facilisis bibendum dolor feugiat.</p>
                            </div>
                            <div class="testimonial-person">
                                <figure>
                                    <img src="http://phydev.web44.net/erizo/img/t-3.jpg" alt="tes-img-3">
                                </figure>
                                <div class="testimonial-inf">
                                    <h4>John Doe</h4>
                                    <p>Ceo Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="one-testimonial">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare diam. Sed commodo nibh facilisis bibendum dolor feugiat.</p>
                            </div>
                            <div class="testimonial-person">
                                <figure>
                                    <img src="http://phydev.web44.net/erizo/img/t-4.jpg" alt="tes-img-4">
                                </figure>
                                <div class="testimonial-inf">
                                    <h4>Alvin Jewel</h4>
                                    <p>Creative Head</p>
                                </div>
                            </div>
                        </div>
                        <div class="one-testimonial">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare diam. Sed commodo nibh facilisis bibendum dolor feugiat.</p>
                            </div>
                            <div class="testimonial-person">
                                <figure>
                                    <img src="http://phydev.web44.net/erizo/img/t-2.jpg" alt="tes-img-2">
                                </figure>
                                <div class="testimonial-inf">
                                    <h4>Rebecca Johansson</h4>
                                    <p>Project Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="one-testimonial">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare diam. Sed commodo nibh facilisis bibendum dolor feugiat.</p>
                            </div>
                            <div class="testimonial-person">
                                <figure>
                                    <img src="http://phydev.web44.net/erizo/img/t-1.jpg" alt="tes-img-1">
                                </figure>
                                <div class="testimonial-inf">
                                    <h4>Mark Smith</h4>
                                    <p>Creative Head</p>
                                </div>
                            </div>
                        </div>
                        <div class="one-testimonial">
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare diam. Sed commodo nibh facilisis bibendum dolor feugiat.</p>
                            </div>
                            <div class="testimonial-person">
                                <figure>
                                    <img src="http://phydev.web44.net/erizo/img/t-6.jpg" alt="tes-img-6">
                                </figure>
                                <div class="testimonial-inf">
                                    <h4>Audley Carson</h4>
                                    <p>Front End Developer</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- end row -->
        </div> <!-- End Container -->
    </section>
    <!-- END TESTIMONIALS -->

    <!-- CONTACT -->
    <section id="contact" class="section one-page-section">
        <div class="container">
            <div class="section-title">
                <h2>contact me</h2>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="col-xs-12 col-sm-4">
                        <div class="contact-item mb-30">
                            <div class="c-icon text-center">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="c-text">
                                <h5>PHONE</h5>
                                <h6>+1-202-555-0138</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="contact-item mb-30">
                            <div class="c-icon text-center">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="c-text">
                                <h5>LOCATION</h5>
                                <h6>4373, El Centro, CA.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="contact-item mb-30">
                            <div class="c-icon text-center">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="c-text">
                                <h5>EMAIL</h5>
                                <h6>Norman@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->

            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <form id="contact-form" method="post" action="mail/contact.php">
                        <div class="col-sm-6">
                            <input type="text" name="name" id="name" class="input-field" required="required"
                                placeholder="Name">
                            <span class="name-error text-center mb-30"></span>
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="email" id="email" class="input-field" required="required"
                                placeholder="Email">
                            <span class="email-error text-center mb-30"></span>
                        </div>
                        <div class="col-xs-12">
                            <textarea name="message" id="message" class="input-field" required="required" placeholder="Message"></textarea>
                            <span class="message-error text-center mb-30"></span>
                        </div>
                        <div id="form-message" class="error mb-30 text-center"></div>

                        <button type="submit" class="effect submit-btn">Send Message</button>

                    </form>
                </div>
            </div> <!-- end row -->
        </div> <!-- End Container -->
    </section>
    <!-- END CONTACT -->
@endsection