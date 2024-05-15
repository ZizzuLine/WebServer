<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ZizzuLine</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <style>
        .video-container {
            position: relative;
            width: 100%;
            height: auto;
        }
        .video-container video {
            width: 100%;
            height: auto;
        }
        .mute-button {
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>ZizzuLine</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="#servizi" class="nav-item nav-link">Services</a>
                <a href="team.php" class="nav-item nav-link">Team</a>


            </div>
            <a href="src/login.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Accedi<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">

                <div class="video-container">
                    <video id="carouselVideo" muted autoplay loop>
                        <source src="video/mercedes_bus_trim.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">ZizzuLine</h5>
                                <h1 class="display-3 text-white animated slideInDown">Servizio Di Trasporto Pubblico</h1>
                                <a href="#servizi" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Servizi</a>
                                <a href="src/login.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Accedi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- About Start -->
    <div  class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to eLEARNING</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div id="servizi" class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Servizi</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="percorso.php">
                                <img class="img-fluid" src="img/percorso.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Percorso</h5>
                                    <small class="text-primary"></small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="src/services.php?id_argument=1">
                                <img class="img-fluid" src="img/temperatura.avif" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Temperatura</h5>
                                    <small class="text-primary"></small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="src/services.php?id_argument=2">
                                <img class="img-fluid" src="img/umidita.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Umidità</h5>
                                    <small class="text-primary"></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="src/services.php?id_argument=4">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/carburante.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Carburante</h5>
                            <small class="text-primary"></small>
                        </div>
                    </a>
                </div>
                <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.9s">
                    <a class="position-relative d-block overflow-hidden" href="src/services.php?id_argument=3">
                        <img class="img-fluid" src="img/cat-public.jpg"  width="100%">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                            <h5 class="m-0">Velocità</h5>
                            <small class="text-primary"></small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <



    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Punti di forza</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <h5 class="mb-0">Stile Moderno e Dinamico</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Il nostro sito si distingue per uno stile moderno e animazioni fluide, offrendo un'esperienza visiva coinvolgente e senza sforzo.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <h5 class="mb-0">Comunicazione Affidabile Backend</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">La nostra comunicazione backend server-to-server garantisce tempi di caricamento rapidi e prestazioni costanti, indipendentemente dal carico del sito.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <h5 class="mb-0">Analisi Dati Intuitive</h5>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Grazie ai grafici interattivi, esplorare i dati diventa facile e coinvolgente, permettendo di scoprire informazioni dettagliate con semplicità.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                <a class="btn btn-link" href="#">About Us</a>
                <a class="btn btn-link" href="#">Contact Us</a>
                <a class="btn btn-link" href="#">Privacy Policy</a>
                <a class="btn btn-link" href="#">Terms & Condition</a>
                <a class="btn btn-link" href="#">FAQs & Help</a>
            </div>
            <div class="col-lg col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> via Santa Lucia 31, 18100 Imperia, Italia</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> 0183295958</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i> imis002001@istruzione.it</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" target=”_blank href="https://www.instagram.com/polotecnologicoimperiese/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" target=”_blank href="https://www.facebook.com/polotecnologicoimperiese"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" target=”_blank href="https://telegram.me/ptifamiglie"><i class="fab fa-telegram"></i></a>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">ZizzuLine</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>