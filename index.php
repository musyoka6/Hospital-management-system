<?php

require_once 'data/constants.php';

global $why_us, $count, $services, $faqs, $testimonials;

//exit;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Jamy Hospital</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets1/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <?php include_once "include/top-bar.php" ?>

    <!-- ======= Header ======= -->
    <?php include_once 'include/header.php' ?>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1 class="text-danger">Welcome to Jamy Hospital</h1>
            <strong>
                <h2 style="color: navy;">Leader in healthcare innovation, delivering compassionate
            </strong> <br>
            <strong> care and empowering communities to lead healthier lives.</strong></h2>
            <!-- <a href="pregister.php" class="btn-get-started scrollto" style="text-decoration: none;"><strong>Get Started</strong></a> -->
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content" style="background-color:maroon;">
                            <h3>Why Choose Jamy Hospital?</h3>
                            <p>
                                We provide accessible and high-quality healthcare services
                                to every individual, regardless of their background or location.
                            </p>
                            <div class="text-center">
                                <a href="#services" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <?php foreach ($why_us as $item) : ?>
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class="<?= $item['icon'] ?>"></i>
                                            <h4><?= $item['title'] ?></h4>
                                            <p><?= $item['description'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">
                <div class="section-title">
                    <h2>About</h2>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                        <a href="" class="glightbox play-btn mb-4"></a>
                        <div class="container-fluid">
                            <div class="row justify-content-center align-items-center" style="height: 100vh;">
                                <div class="col-xl-5 col-lg-6">
                                    <!-- Video container -->
                                    <div class="video-container">
                                        <!-- Image placeholder -->
                                        <img src="../final project/images/doc2.jpg" alt="Image" class="img-fluid">
                                        <!-- Video player -->
                                        <video id="videoPlayer" class="embed-responsive-item" style="width: 100%; height: auto; display: none;" controls>
                                            <source src="../final project/videos/vd.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bootstrap JS (Optional, if you need JavaScript features) -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
                        <!-- GLightbox JS (Optional, if you want to use lightbox for video playback) -->
                        <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

                        <script>
                            // Get the video element
                            const videoPlayer = document.getElementById('videoPlayer');

                            // Add click event listener to the video container
                            document.querySelector('.video-container').addEventListener('click', function() {
                                // Toggle the display of the video
                                videoPlayer.style.display = videoPlayer.style.display === 'none' ? 'block' : 'none';
                                // Play the video if it's displayed
                                if (videoPlayer.style.display === 'block') {
                                    videoPlayer.play();
                                } else {
                                    videoPlayer.pause();
                                }
                            });
                        </script>

                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-heart"></i></div>
                            <h4 class="title"><a href=""> Our Mision</a></h4>
                            <p class="description">
                                To provide accessible and high-quality healthcare services to every individual, regardless of
                                their background or location.
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href=""> Our Vision</a></h4>
                            <p class="description">
                                To be a leader in healthcare innovation, delivering compassionate care and empowering
                                communities to lead healthier lives.
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">Our Values</a></h4>
                            <p class="description">
                                <strong>Dedication:</strong> We are dedicated to offering patients and their families efficient service and great value for their money. <br>
                                <strong>Empathy:</strong> We are devoted to providing a warm, friendly and caring environment in which patients can recover.
                                <br>
                                <strong>Inspiration:</strong> We are an organization that inspires our staff to achieve the extraordinary and develop the best careers.
                                <br>
                                <strong>Quality:</strong> We pursue superior performance and quality in all we do, to build and preserve the Hospital’s clinical, organizational and financial strength.
                                <br>
                                <strong>Partnerships:</strong> We recognize the value of strong internal and external partnerships to accomplish our goals.
                                <br>
                                <strong>Integrity & Accountability:</strong> We ensure to do what we say we will do, and corresponding virtue of holding up well under high levels of accountability.

                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">
                <div class="row">
                    <?php foreach ($count as $item) : ?>
                        <div class="col-lg-3 col-md-6 <?= $item['class'] ?>">
                            <div class="count-box">
                                <i class="<?= $item['icon'] ?>"></i>
                                <span data-purecounter-start="0" data-purecounter-end="<?= $item['counter_end'] ?>" data-purecounter-duration="1" class="purecounter">
                                </span>
                                <p><?= $item['title'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title">
                    <h2>Services</h2>
                </div>

                <div class="row">
                    <?php foreach ($services as $service) : ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch <?= $service['class'] ?>">
                            <div class="icon-box">
                                <div class="icon"><i class="<?= $service['icon'] ?>"></i></div>
                                <h4><a href="consultation.php"><?= $service['title'] ?></a></h4>
                                <p><?= $service['description'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!-- End Services Section -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-jpRj5+5VPLfi6qs9eP4IYJmaOfnq8dG86c0v1f8+uKDi53ZwPgg5nqZaE6UJ+j6uI5EGk1dzlXPCa17zMPRqEw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            /* Custom CSS */
            .gallery-icon {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
            }

            .gallery-line {
                flex-grow: 1;
                border: none;
                border-top: 4px solid black;
                margin: 0 10px;

            }

            .gallery-img {
                width: 100%;
                height: auto;
                border-radius: 10px;
                transition: transform 0.3s ease;
            }

            .gallery-img:hover {
                transform: scale(1.05);
            }

            .gallery-item {
                margin-bottom: 20px;
            }

            /* Media Query for smaller devices */
            @media (max-width: 768px) {
                .gallery-img {
                    height: 40vh;
                    /* Adjusted height for smaller screens */
                }
            }
        </style>
        <!-- Gallery Section -->
        <section id="gallery" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase text-blue"><strong>Gallery</strong></h2>
                        <div class="gallery-icon">
                            <hr class="gallery-line">
                            <i class="fa fa-picture-o fa-2x text-warning"></i>
                            <hr class="gallery-line">
                        </div>
                    </div>
                </div>
                <!-- Image Gallery -->
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="gallery-item">
                            <img src="img/dummy/img-1.png" class="img-fluid gallery-img" alt="Gallery Image 1">
                        </div>
                        <div class="gallery-item">
                            <img src="img/dummy/img-5.png" class="img-fluid gallery-img" alt="Gallery Image 2">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="gallery-item">
                            <img src="img/dummy/img-3.png" class="img-fluid gallery-img" alt="Gallery Image 3">
                        </div>
                        <div class="gallery-item">
                            <img src="img/dummy/img-4.png" class="img-fluid gallery-img" alt="Gallery Image 4">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="gallery-item">
                            <img src="img/dummy/img-1.png" class="img-fluid gallery-img" alt="Gallery Image 5">
                        </div>
                        <div class="gallery-item">
                            <img src="img/dummy/img-6.png" class="img-fluid gallery-img" alt="Gallery Image 6">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="gallery-item">
                            <img src="images/fu.jpg" class="img-fluid gallery-img" alt="Gallery Image 5">
                        </div>
                        <div class="gallery-item">
                            <img src="images/da.jpg" class="img-fluid gallery-img" alt="Gallery Image 6">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="gallery-item">
                            <img src="images/gu.webp" class="img-fluid gallery-img" alt="Gallery Image 5">
                        </div>
                        <div class="gallery-item">
                            <img src="images/hsptl.jpg" class="img-fluid gallery-img" alt="Gallery Image 6">
                        </div>
                        <div class="gallery-item">
                            <img src="images/ps2.jpg" class="img-fluid gallery-img" alt="Gallery Image 5">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="gallery-item">
                            <img src="images/ps2.jpg" class="img-fluid gallery-img" alt="Gallery Image 5">
                        </div>
                        <div class="gallery-item">
                            <img src="images/ps1.jpg" class="img-fluid gallery-img" alt="Gallery Image 6">
                        </div>
                        <div class="gallery-item">
                            <img src="images/ps2.jpg" class="img-fluid gallery-img" alt="Gallery Image 5">
                        </div>
                        <div class="gallery-item">
                            <img src="images/ps2.jpg" class="img-fluid gallery-img" alt="Gallery Image 5">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        <?php foreach ($faqs as $faq) : ?>
                            <li data-aos="fade-up" data-aos-delay="<?= $faq['aos_delay'] ?>">
                                <i class="bx bx-help-circle icon-help"></i>
                                <a data-bs-toggle="collapse" data-bs-target="#faq-list-<?= $faq['id'] ?>" class="<?= $faq['collapsed'] ? 'collapsed' : 'collapse' ?>">
                                    <?= $faq['quiz'] ?>
                                    <i class="bx bx-chevron-down icon-show"></i>
                                    <i class="bx bx-chevron-up icon-close"></i>
                                </a>
                                <div id="faq-list-<?= $faq['id'] ?>" data-bs-parent=".faq-list" class="collapse <?= $faq['show'] ? 'show' : '' ?>">
                                    <p><?= $faq['response'] ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="section-title">
                    <h2>Testimonials</h2>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="img/testimonials/1.jpg" class="testimonial-img" alt="">
                                    <h3>Winfred Morris</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Very Trustworthy healthcare
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="img/testimonials/2.jpg" class="testimonial-img" alt="">
                                    <h3>Main Njenga</h3>
                                    <h4>Optician</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Modern Equipment for Optical Helthcare services
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                    <h3>Doris Achieng</h3>
                                    <h4>Store Owner</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        I was attended too well with much care and respect
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        I was operated, within one week I started walking and doing my daily activities
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" style="background-color:maroon">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Jamy</h3>
                        <p>
                            Nairobi <br>
                            Kenya<br>
                            <strong>Phone:</strong> +254 70000000<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Medical Surgary</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Opticals</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Baby Care</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright text-white">
                    &copy; Copyright <strong><span>Jamy</span></strong>. All Rights Reserved
                </div>
                <div class="credits text-white">
                    Designed by <a href="#">Jamy Hospital</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="assets1/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets1/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets1/js/main.js"></script>
</body>

</html>