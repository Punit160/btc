<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Broad Trading Co.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('web/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('web/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('web/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary"><img class="img-fluid me-2" src="{{asset('web/img/icon-1.png')}}" alt=""
                    style="width: 45px;">Broad Trading Co.</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
            <a href="{{route('home')}}" class="nav-item nav-link">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link active">About</a>
                <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                <a href="{{route('register')}}" class="nav-item nav-link">Signup</a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-0" href=""><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">Broad Trading Co. Business for Success</h1>
                    <p class="animated slideInDown">Our Plan is Dyanamic in present Era which can educate every individual to gain financial Freedom</p>
                    <a href="" class="btn btn-primary py-3 px-4 animated slideInDown">Explore More</a>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="{{asset('web/img/hero-1.png')}}"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{asset('web/img/about.png')}}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">About Us</h1>
                        <p class="text-primary fs-5 mb-4">The Most Trusted  Platform</p>
                        <p>Welcome to Broad Trading Co., your number one autofill source for your Income. We're dedicated to giving you the very best of unique concept than anything else. Since our beginnings in 2020, Overstock has evolved from a fledging startup to a online digital pull as a result of creative team
                            We are passionate about doing our part to make life better. We provide high-quality merchandise, great value, and exceptional service. We connect people with multiple levels and services in new and unexpected ways. We do our part to create dreams for all.
                            Our Mission is to provide the best customer service to our clients by maintaining a superb client centric culture. In this way we will achieve our Vision of maintaining our position as a Algo Trading Leader known for our superior customer Services.
                            
                            
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Analysis</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Marketing</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Finance</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Support</span>
                        </div>
                        <a class="btn btn-primary py-3 px-4" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid mb-4" src="{{asset('web/img/icon-9.png')}}" alt="">
                    <h1 class="display-4" data-toggle="counter-up">23456</h1>
                    <p class="fs-5 text-primary mb-0">Data & Analysis</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid mb-4" src="{{asset('img/icon-10.png')}}" alt="">
                    <h1 class="display-4" data-toggle="counter-up">3456</h1>
                    <p class="fs-5 text-primary mb-0">Happy Clients</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid mb-4" src="{{asset('web/img/icon-2.png')}}" alt="">
                    <h1 class="display-4" data-toggle="counter-up">41234</h1>
                    <p class="fs-5 text-primary mb-0">Problem Solved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Why Us!</h1>
                <p class="text-primary fs-5 mb-5">The Best In The Industry</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{asset('web/img/icon-7.png')}}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Easy To Start</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{asset('web/img/icon-6.png')}}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Safe & Secure</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{asset('web/img/icon-5.png')}}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Proper Planning</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{asset('web/img/icon-4.png')}}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Secure Storage</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{asset('web/img/icon-3.png')}}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Expert Support</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="{{asset('web/img/icon-8.png')}}" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">24/7 Support</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                clita duo justo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Services</h1>
                <p class="text-primary fs-5 mb-5">Buy, Sell And Exchange Cryptocurrency</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{asset('web/img/icon-7.png')}}" alt="">
                        <h5 class="mb-3">Currency Wallet</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{asset('web/img/icon-3.png')}}" alt="">
                        <h5 class="mb-3">Currency Transaction</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{asset('web/img/icon-9.png')}}" alt="">
                        <h5 class="mb-3">Bitcoin Investment</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{asset('web/img/icon-5.png')}}" alt="">
                        <h5 class="mb-3">Currency Exchange</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{asset('web/img/icon-2.png')}}" alt="">
                        <h5 class="mb-3">Bitcoin Escrow</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{asset('web/img/icon-8.png')}}" alt="">
                        <h5 class="mb-3">Token Sale</h5>
                        <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                            justo</p>
                        <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Roadmap Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Roadmap</h1>
                <p class="text-primary fs-5 mb-5">We Translate Your Dream Into Reality</p>
            </div>
            <div class="owl-carousel roadmap-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>January 2022</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>March 2023</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>May 2024</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>July 2025</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>September 2026</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>November 2027</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Roadmap End -->


   

   


    <!-- Footer Start -->
    <div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <h1 class="text-primary mb-4"><img class="img-fluid me-2" src="{{asset('web/img/icon-1.png')}}" alt=""
                            style="width: 45px;">Broad Trading Co.</h1>
                    <span>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                        stet lorem sit clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum
                        et lorem et sit.</span>
                </div>
                <div class="col-md-6">
                    <h5 class="mb-4">Newsletter</h5>
                    <p>Clita erat ipsum et lorem et sit, sed stet lorem sit clita.</p>
                    <div class="position-relative">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Our Services</h5>
                    <a class="btn btn-link" href="">Currency Wallet</a>
                    <a class="btn btn-link" href="">Currency Transaction</a>
                    <a class="btn btn-link" href="">Bitcoin Investment</a>
                    <a class="btn btn-link" href="">Token Sale</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Follow Us</h5>
                    <div class="d-flex">
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">BTC</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By  <a href="#">ETS Networks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('web/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('web/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('web/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('web/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('web/lib/counterup/counterup.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('web/js/main.js')}}"></script>
</body>

</html>