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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
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
        <h2>Leader in healthcare innovation, delivering compassionate <br>
            care and empowering communities to lead healthier lives.</h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
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
							<?php foreach ($why_us as $item): ?>
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
            <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                    <a href="#" class="glightbox play-btn mb-4"></a>
                </div>

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h3>Our Mission</h3>
                    <p>
                        To provide accessible and high-quality healthcare services to every individual, regardless of
                        their background or location.
                    </p>

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
                            Compassion
                            Excellence
                            Integrity
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
				<?php foreach ($count as $item): ?>
                    <div class="col-lg-3 col-md-6 <?= $item['class'] ?>">
                        <div class="count-box">
                            <i class="<?= $item['icon'] ?>"></i>
                            <span
                                    data-purecounter-start="0"
                                    data-purecounter-end="<?= $item['counter_end'] ?>"
                                    data-purecounter-duration="1"
                                    class="purecounter">
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
				<?php foreach ($services as $service): ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch <?= $service['class'] ?>">
                        <div class="icon-box">
                            <div class="icon"><i class="<?= $service['icon'] ?>"></i></div>
                            <h4><a href=""><?= $service['title'] ?></a></h4>
                            <p><?= $service['description'] ?></p>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </section><!-- End Services Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="faq-list">
                <ul>
					<?php foreach ($faqs as $faq): ?>
                        <li data-aos="fade-up" data-aos-delay="<?= $faq['aos_delay'] ?>">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a
                                    data-bs-toggle="collapse" data-bs-target="#faq-list-<?= $faq['id'] ?>"
                                    class="<?= $faq['collapsed'] ? 'collapsed' : 'collapse' ?>"
                            >
								<?= $faq['quiz'] ?>
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div
                                    id="faq-list-<?= $faq['id'] ?>" data-bs-parent=".faq-list"
                                    class="collapse <?= $faq['show'] ? 'show' : '' ?>"
                            >
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
                                <h3>James</h3>
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


    <section id="contact" class="container contact-form" style="font-family: 'IBM Plex Sans', sans-serif;">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
        </div>
        <form method="post" action="contact.php">
            <h3>Drop Us a Message</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value=""
                               onkeydown="return alphaOnly(event);" required/>
                    </div>
                    <div class="form-group">
                        <input type="email" name="txtEmail" class="form-control" placeholder="Your Email *" value=""
                               required/>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="txtPhone" class="form-control" placeholder="Your Phone Number *"
                               value="" minlength="10" maxlength="10" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Your Message *"
                                  style="width: 100%; height: 150px;" required></textarea>
                    </div>
                </div>
            </div>
        </form>
    </section>


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