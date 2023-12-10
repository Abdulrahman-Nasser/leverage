@extends('layouts.app')

@section('content')
    {{-- start laoder --}}
    @include('loading.loader')
    {{-- end loader --}}

    <!-- start home and header-->
    <section class="home sec" >

        <div class="overlay"></div>



        <!-- start header -->
        @include('header.header')
        <!-- end header -->

        <div class="container col-md-8 ">
            <div class="home_content">
                <h1 class="home_main_title animate__animated animate__backInDown">L E V E R A G E</h1>
                <p class="home_title mt-3 animate__animated animate__fadeIn">Transforming Dreams into
                    Reality</p>
                <div class="home_button">
                    <a href="#about" class="btn animate__animated animate__jello">Get Started</a>
                </div>
            </div>

        </div>
    </section>
    <!-- end home and header-->

    <!-- Features Section - Home Page -->
    <section id="about_us" class="features p-70 sec">

        <!--  Section Title -->
        <div class="container section-title text-center" data-aos="fade-up">
            <h2 class="secTitleLight" data-aos="fade-in">About us</h2>
            <p>We are your Way to Transform your Dreams to Reality. </p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 align-items-center features-item justify-content-md-center">
                <div class="col-lg-7 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-light">About Leverage</h3>
                    <p>
                        At Leverage Software Solutions, we believe in building strong and long-lasting partnerships with our
                        clients. We strive to provide exceptional customer service, timely support, and continuous updates
                        to ensure that our clients achieve sustainable growth and thrive in the ever-evolving digital
                        landscape.
                    </p>

                    <p>
                        We pride ourselves on delivering high-quality solutions that not only meet the required
                        specifications but also exceed client expectations. Our collaborative approach ensures that we
                        understand our clients' goals, challenges, and vision for success
                    </p>


                </div>
                <div class="col-lg-5 col-md-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <div class="image-stack">
                        <img src="assets/img/android.jpg" width="80px" alt="not found" class="stack-front">
                        <img src="assets/img/web2.jpg" alt="not found" class="stack-back">
                    </div>
                </div>
            </div><!-- Features Item -->


        </div>

    </section><!-- End Features Section -->

    <!-- Services Start -->
    {{-- <div class="container-fluid services py-5 " id="services">
        <div class="container py-5"> --}}

    {{-- <div class="row g-5 services-inner">


                <div class="col-md-6 col-lg-4">
                    <div class="services-item " data-aos="fade-up">
                        <div class="p-5 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-code fa-4x mb-4 "></i>
                                <h3 class="mb-3">Web Design</h3>
                                <p class="mb-4">
                                    Our talented team of designers and developers work hand in hand to craft visually
                                    stunning websites that are intuitive to navigate and responsive across all devices.
                                </p>
                                <a href="" class="btn  px-5  rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="services-item " data-aos="fade-up">
                        <div class="p-5 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-file-code fa-4x mb-4 "></i>
                                <h3 class="mb-3">Web Development</h3>
                                <p class="mb-4">
                                    creating dynamic websites that are tailored to your
                                    specific needs. Our team of skilled developers combines the latest technologies with
                                    industry best practices to deliver websites.
                                </p>
                                <a href="" class="btn  px-5  rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="services-item " data-aos="fade-up">
                        <div class="p-5 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-external-link-alt fa-4x mb-4 "></i>
                                <h3 class="mb-3">UI/UX Design</h3>
                                <p class="mb-4">
                                    we're passionate about crafting visually stunning and user-friendly
                                    interfaces that engage and delight your audience. Our talented team of designers
                                    meticulously considers user.
                                </p>
                                <a href="" class="btn px-5  rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="services-item " data-aos="fade-up">
                        <div class="p-5 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fas fa-user-secret fa-4x mb-4 "></i>
                                <h3 class="mb-3">Network & cyber Security</h3>
                                <p class="mb-4">
                                    Networks are the backbone of our digital world, connecting people, devices, and
                                    information across vast distances. Whether it's the internet, local area networks
                                    (LANs).
                                </p>
                                <a href="" class="btn  px-5  rounded-pill">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="services-item " data-aos="fade-up">
                        <div class="p-5 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-envelope-open fa-4x mb-4 "></i>
                                <h3 class="mb-3">Software Development</h3>
                                <p class="mb-4">
                                    Software development is the creative process of designing, coding, and testing computer
                                    programs that enable various applications and functionalities.
                                </p>
                                <a href="" class="btn  px-5  rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="services-item " data-aos="fade-up">
                        <div class="p-5 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fas fa-laptop fa-4x mb-4 "></i>
                                <h3 class="mb-3">Kids Programming</h3>
                                <p class="mb-4">
                                    Kids programming introduces young minds to the exciting world of coding and
                                    computational thinking. It empowers children to explore their creativity,
                                    problem-solving abilities.
                                </p>
                                <a href="" class="btn px-5  rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
    {{-- </div>
    </div> --}}
    <!-- Services End -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services p-70 sec">
        <div class="container">

            <!--  Section Title -->
            <div class="container section-title text-center" data-aos="fade-up">
                <h2 class="secTitleDark" data-aos="fade-in">Our Services</h2>
                <p class="parTitle">We work with you to achieve your goals </p>
            </div><!-- End Section Title -->

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="flip-right">
                    <div class="icon-box">
                        <div class="icon"><i class="fa fa-code fa-4x mb-4 "></i></div>
                        <h4 class="title"><a href="">Web Development</a></h4>
                        <p class="description">Our talented team of designers and developers work hand in hand to craft
                            visually
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="flip-right">
                    <div class="icon-box">
                        <div class="icon"> <i class="fa fa-external-link-alt fa-4x mb-4 "></i>
                        </div>
                        <h4 class="title"><a href="">UI/UX Design</a></h4>
                        <p class="description">we're passionate about crafting visually stunning and user-friendly
                            interfaces
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="flip-right">
                    <div class="icon-box">
                        <div class="icon"> <i class="fas fa-user-secret fa-4x mb-4 "></i>
                        </div>
                        <h4 class="title"><a href="">Network & Cyber Security</a></h4>
                        <p class="description"> Networks are the backbone of our digital world, connecting people.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="flip-right">
                    <div class="icon-box">
                        <div class="icon"> <i class="fa fa-file-code fa-4x mb-4 "></i></div>
                        <h4 class="title"><a href="">Software Development</a></h4>
                        <p class="description"> Software development is the creative process of designing, coding, and testing computer
                        </p>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 mt-3" data-aos="flip-right">
                    <div class="icon-box">
                        <div class="icon"> <i class="bi bi-person mb-4 "></i></div>
                        <h4 class="title"><a href="">K.K <br> Kids Coding</a></h4>
                        <p class="description">   Kids programming introduces young minds to the exciting world of coding
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->



    <!-- Social section -->
    <section id="social" class="parallax pt-5">
        <div class="overlay">

        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="container section-title text-center" data-aos="fade-up">
                        <h2 class="secTitleDark" data-aos="fade-in" style="color: #">Follow Us</h2>
                        <p class="parTitle">Follow Us To Git The Latest News</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <ul class="social-button mt-5 ">
                        <li class="wow animated zoomIn"><a href="https://www.facebook.com/profile.php?id=100094573805747"><i
                                    class="bi bi-facebook"></i></a>
                        </li>
                        <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i
                                    class="bi bi-linkedin"></i></a></li>
                        <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i
                                    class="bi bi-skype"></i></a></li>
                        <li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i
                                    class="bi bi-twitter"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- end Social section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact  section-bg sec">
        <div class="container">

            <div class="container section-title text-center" data-aos="fade-up">
                <h2 class="secTitleDark" data-aos="fade-in">Contact Us</h2>
                <p class="parTitle">Get In Touch With Us</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-6">
                    <div class="info-box mb-5">
                        <i class="bi bi-map"></i>
                        <h3>Our Address</h3>
                        <p>Elgmhoria Street, GMAT Center, Sohag</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bi bi-mailbox"></i>
                        <h3>Email Us</h3>
                        <p>info@leverage-technology.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bi bi-phone"></i>
                        <h3>Call Us</h3>
                        <p>+20 11111 92 330</p>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6 " data-aos="fade-in">
                    <iframe class="mb-4 mb-lg-0 iframe-gps"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14273.206609868479!2d31.6949612!3d26.5746938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144f5ff6b9d24901%3A0xad5644ac580237fd!2z2LPZhtiq2LEg2KzZitmF2KfYqg!5e0!3m2!1sar!2seg!4v1698686818740!5m2!1sar!2seg"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-6" data-aos="fade-up">



                    <div class="container-form iframe-gps">
                        <div class="contact-head">
                            <div class="brand-logo">
                                <i class="bi bi-chat contact-icon"></i>
                            </div>
                            <p class="mt-3">Don't hesitate to contact us ..</p>
                        </div>

                        <form>
                            <div class="inputs">
                                <label>Your Name</label>
                                <input type="email" placeholder="leverage software solutions" />
                                <label>E-mail</label>
                                <input type="email" placeholder="example@test.com" />
                                <label>Subject</label>
                                <input type="password" placeholder="Min 6 charaters long" />
                                <label>Message</label>
                                <textarea placeholder="type your msg here ..."></textarea>

                                <button type="submit">Send</button>
                            </div>
                        </form>
                    </div>






                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->



    {{-- @include('practlise_js.main') --}}
    @include('footer.footer')
@endsection
