
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ZizzuLine</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <style>
        .container-fluid {
            position: relative;
            overflow: hidden;
        }
        .video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .content {
            position: relative;
            z-index: 1;
        }
        .mute-button {
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            z-index: 2;
        }
    </style>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
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
        <a href="../index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">ZizzuLine</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="../index.php" class="nav-item nav-link">Home</a>
                <a href="../index.php#servizi" class="nav-item nav-link active">Servizi</a>
            </div>
            <a href="../index.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="video-container">
            <video id="carouselVideo" muted autoplay loop>
                <source src="../video/mercedes_bus_trim.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container py-5 content">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Service</h1>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-10 text-center">
                    <button id="muteButton" class="mute-button">Unmute</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <script>
        const video = document.getElementById('carouselVideo');
        const muteButton = document.getElementById('muteButton');

        muteButton.addEventListener('click', () => {
            if (video.muted) {
                video.muted = false;
                muteButton.textContent = 'Mute';
            } else {
                video.muted = true;
                muteButton.textContent = 'Unmute';
            }
        });
    </script>

    <?php

if (isset($_GET['id_argument'])) {
    $id_argument = $_GET['id_argument'];

    // Modifica il titolo in base al valore di id_argument
    if ($id_argument === '1') {
        echo '
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Visualization of:</h6>
            <h1 class="mb-5">Temperature</h1>
        </div>';
    } elseif ($id_argument === '2') {
        echo '
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Visualization of:</h6>
            <h1 class="mb-5">Humidity</h1>
        </div>';
    } elseif ($id_argument === '3') {
        echo '
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Visualization of:</h6>
            <h1 class="mb-5">Speed</h1>
        </div>';
    } elseif ($id_argument === '4') {
        echo '
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Visualization of:</h6>
            <h1 class="mb-5">Fuel</h1>
        </div>';
    }  else {
        echo '
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Visualization of:</h6>
            <h1 class="mb-5">Invalid Argument</h1>
        </div>';
    }
} else {
    echo '
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Visualization of:</h6>
        <h1 class="mb-5">No Argument Provided</h1>
    </div>';
}



//start call function file update_data to update thingspeak-db values in background
include "update_data.php";

$channel_id = "2497042"; 
$api_key = "H6Y216Q86ERLFYI1"; 
$field_to_table_mapping = array(
    'field1' => 'temperature',
    'field2' => 'humidity',
    'field3' => 'speed',
    'field4' => 'fuel',
);


updateDatabaseFromThingSpeak($channel_id, $api_key, $field_to_table_mapping);
//end


//graphic
$_GET['idselector']="$id_argument";
include '../graphic.php';

?>  

    <!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <!-- Replace the image section with the included graphic.php -->
                    
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Details</h6>
                <h1 class="mb-4">Welcome to ZizzuLine</h1>
                <p class="mb-4">Questo grafico interattivo offre una gamma di funzionalità progettate per migliorare la tua esperienza di analisi dei dati:</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Zoom In and Out</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Selection</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Highlight Values:</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Compare Data on Hover</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- footer -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                <a class="btn btn-link" href="../index.php">Home</a>
                <a class="btn btn-link" href="../team.php">Team</a>
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
    <script src="../js/main.js"></script>

</body>

</html>