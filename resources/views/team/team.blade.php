@extends('layouts.app')

@section('content')
    {{-- start lodaer --}}
    @include('loading.loader')
    {{-- end loader --}}



    <!-- Team Start -->
    <section id="team" class="team-sec">

        {{-- start header --}}
        @include('header.header-web')
        {{-- end header --}}

        <div class="container p-70 px-2 mt-n2">
            <div class="container section-title text-center" data-aos="fade-up">
                <h2 class="secTitleLight" data-aos="fade-in">Our Team</h2>
                <p class="text-light">Exclusive Our Team</p>
            </div>

            <div class="row mb-5">

                {{-- <div class="owl-carousel owl-theme"> --}}

                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="assets/img/aboud.JPG" class="glightbox">
                            <img class="img-fluid " src="assets/img/aboud.JPG" alt="">

                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Abdlrahman Naser</h3>
                                <p>Full Stack Developer</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="{{ asset('assets/img/alaa.jpg') }}" class="glightbox">
                            <img class="img-fluid "
                                src="{{ asset('assets/img/alaa.jpg') }}" alt="">
                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Alaa Ayman</h3>
                                <p>Marketing</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="assets/img/mariam.jpg" class="glightbox">
                            <img class="img-fluid " src="assets/img/mariam.jpg" alt="">

                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Mariam Nabil</h3>
                                <p>Front-End developer</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="assets/img/nidal.jpg" class="glightbox">
                            <img class="img-fluid " src="assets/img/nidal.jpg" alt="">

                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Nidal Sherif</h3>
                                <p>Network Engineer</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="assets/img/mahmoud.jpg" class="glightbox">
                            <img class="img-fluid " src="assets/img/mahmoud.jpg" alt="">
                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Mahmmoud Abdlrahem</h3>
                                <p>Backend developer</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="assets/img/hassna.JPEG" class="glightbox">
                            <img class="img-fluid " src="assets/img/hassna.JPEG" alt="">
                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Hassna Mohammad</h3>
                                <p>Front-End developer</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="assets/img/reham.jpg" class="glightbox">
                            <img class="img-fluid " src="assets/img/reham.jpg" alt="">
                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Reham Esam</h3>
                                <p>Network Engineer</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="assets/img/manar.jpg" class="glightbox">
                            <img class="img-fluid " src="assets/img/manar.jpg" alt="">
                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Manar Hassan</h3>
                                <p>Network Engineer</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid " src="assets/img/omar.jpg" alt="">
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Omar Alaa</h3>
                                <p>Graphic Designer</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="assets/img/ebrahim.jpg"" class="glightbox">
                            <img class="img-fluid " src="assets/img/ebrahim.jpg" alt="">
                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Ebrahim Mohammed</h3>
                                <p>PR Specialist</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="{{ asset('assets/img/refat.jpg') }}" class="glightbox">
                            <img class="img-fluid " src="{{ asset('assets/img/refat.jpg') }}" alt="">
                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0"> Mohammed Refat</h3>
                                <p>PR Specialist</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="assets/img/emad.jpg" class="glightbox">
                            <img class="img-fluid " src="assets/img/emad.jpg" alt="">
                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Emad Ramadan</h3>
                                <p>React Js developer</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="assets/img/mohammed.jpg" class="glightbox">
                            <img class="img-fluid " src="assets/img/mohammed.jpg" alt="">
                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Mohammed Awara</h3>
                                <p>React Js developer</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="assets/img/amira.jpg" class="glightbox">
                            <img class="img-fluid " src="assets/img/amira.jpg" alt="">

                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Amira Mohammed</h3>
                                <p>Front-end developer</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <a href="assets/img/hesham.jpg" class="glightbox">
                            <img class="img-fluid " src="assets/img/hesham.jpg" alt="">
                        </a>
                        <div class="team-text">
                            <div>
                                <h3 class="mb-0">Hesham Abdallah</h3>
                                <p>Network Engineer</p>
                            </div>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-facebook"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href=""><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>



        {{-- </div> --}}
    </section>
    <!-- Team End -->


@endsection

