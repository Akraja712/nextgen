<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Nextgen</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">


    <!-- =======================================================
  * Template Name: Nextgen
  * Template URL: https://bootstrapmade.com/Hi ma-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    .box {
        background-color: white;
        border-radius: 15px;
        padding: 20px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .gold-price-box,
    .price-box {
        width: 100%;
        position: absolute;
        left: 0;
        border-radius: 0 0 15px 15px;
    }

    .gold-price-box {
        background-color: #FFC107;
        padding: 15px 0;
        bottom: -10px;
    }

    .gold-price,
    .price {
        font-size: 18px;
        font-weight: bold;
        color: black;
    }

    .price-box {
        background-color: #FFCCE5;
        padding: 0px 0 5px 0;
        /* Further reduced height */
        bottom: 0;
    }

    .price {
        color: #D0021B;
        margin-top: 15px;
    }

    .coin-image {
        width: 40px;
        margin-bottom: 10px;
    }

    .number {
        font-size: 24px;
        font-weight: bold;
        color: black;
    }

    .coins {
        font-size: 16px;
        color: gray;
    }

    .box {
        padding-top: 25px;
        position: relative;
    }
   
/* Responsive Design */
@media (max-width: 1200px) {
    .box p {
        font-size: 14px;  /* Smaller text for medium screens */
    }
    .price {
        font-size: 16px;
    }
}

/* Mobile Layout: 3 boxes in one row + 1 below */
@media (max-width: 768px) {
    .container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
    }
    
    .box {
        width: 100%;
    }

    .box:nth-child(4) {
        grid-column: span 3;  /* Last box spans the entire row */
    }
}

/* Further adjust for very small screens */
@media (max-width: 576px) {
    .container {
        grid-template-columns: 1fr;  /* Stack vertically */
    }
}
</style>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Nextgen</h1>
            </a>

                   <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="Terms.html">Terms and conditions</a></li>
                <li><a href="privacy.html">Privacy policy</a></li>
                <li><a href="Refund.html">Refund policy</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>

            <!-- Icon with Bootstrap or Font Awesome -->
            <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
        </nav>

    </div>
</header>


    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/LMS1.png" class="img-fluid animated" alt="">
                    </div>

                    <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
                        <h1>Learn, Connect, and Grow with Innovation</h1>
                    </div>

                </div>
            </div>

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

        </section>
        <!-- /Hero Section -->


        <div class="container py-5">
            <div class="row g-4">

                <!-- Box 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="box">
                        <p><strong>E-Commerce Course</strong></p>
                        <p>Enroll Now</p>
                        <br><br>
                        <div class="price-box">
                            <p class="price">₹4999</p>
                        </div>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="box">
                        <p><strong>Retail Management Course</strong></p>
                        <p>Enroll Now</p>
                        <br><br>
                        <div class="price-box">
                            <p class="price">₹9999</p>
                        </div>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="box">
                        <p><strong>WellBeing Course</strong></p>
                        <p>Enroll Now</p>
                        <br><br>
                        <div class="price-box">
                            <p class="price">₹499</p>
                        </div>
                    </div>
                </div>

                <!-- Box 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="box">
                        <p><strong>Learn International Language</strong></p>
                        <p>Enroll Now</p>
                        <br><br>
                        <div class="price-box">
                            <p class="price">₹4999</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-emoji-smile"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="8500" data-purecounter-end="15456" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Users</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-journal-richtext"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="12854" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Active users</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-headset"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="5421" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-people"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="9851" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                </div>

            </div>

        </section>
        <!-- /Stats Section -->

        <!-- Details Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Details</h2>
                <div><span>Check Our</span> <span class="description-title">Details</span></div>
            </div>
            <!-- End Section Title -->

            <div class="container">

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/details-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                        <h3>Nextgen Digital Course Platform offers innovative, interactive, and scalable online learning solutions, empowering educators and learners with cutting-edge technology and engaging content.</h3>
                        <p class="fst-italic">
                            With interest-based networking, virtual events, and expert-led discussions, Nextgen fosters insightful conversations and collaboration.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i><span> Our Mission – Empowering education through innovative digital learning solutions.</span></li>
                            <li><i class="bi bi-check"></i> <span>Who We Are – A leading platform for interactive and scalable online courses.</span></li>
                            <li><i class="bi bi-check"></i><span> What We Offer – Engaging content, user-friendly technology, and seamless learning experiences.</span></li>
                            <li><i class="bi bi-check"></i><span> Our Vision – Making education accessible, efficient, and future-ready for all.</span></li>    


                        </ul>
                    </div>
                </div>
                <!-- Features Item -->



            </div>

        </section>
        <!-- /Details Section -->



        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <div><span>Check Our</span> <span class="description-title">Contact</span></div>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>No. 3 Ragavendra garden , Thiruvanai Kovil , Trichy, LPG Auto Gas Opposite Road Tiruchirappalli - 620005 Tamil Nadu, India</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+91 90353 77173</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>support@nextgencareer.in</p>
                            </div>
                        </div>
                        <!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->

                </div>

            </div>

        </section>
        <!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer dark-background">


        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Nextgen</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by Nextgen</a>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>
    
    <script>
        document.querySelectorAll('.payButton').forEach(button => {
            button.addEventListener('click', function () {
                let priceText = this.querySelector('.gold-price, .price').innerText.replace('₹', '').trim();
                let amountInPaisa = parseInt(priceText) * 100; // Convert ₹ to paise
    
                // Create Payment Request Data
                let requestData = {
                    merchantId: "YOUR_PHONEPE_MERCHANT_ID",
                    transactionId: "TXN" + new Date().getTime(),
                    amount: amountInPaisa,
                    mobileNumber: "8939580642", // User's mobile number
                    email: "himaapp123@gmail.com",
                    callbackUrl: "https://yourwebsite.com/payment-success",
                    redirectUrl: "https://yourwebsite.com/payment-status",
                    paymentInstrument: {
                        type: "UPI_INTENT"
                    }
                };
    
                // Convert data to Base64
                let requestBody = btoa(JSON.stringify(requestData));
    
                // Send request to PhonePe
                fetch("https://api.phonepe.com/apis/hermes/pg/v1/pay", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-VERIFY": "GENERATED_HASH_HERE", // Generate hash using PhonePe algorithm
                    },
                    body: JSON.stringify({ request: requestBody }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Redirect user to PhonePe payment page
                        window.location.href = data.data.instrumentResponse.redirectInfo.url;
                    } else {
                        alert("Payment failed: " + data.message);
                    }
                })
                .catch(error => {
                    console.error("Payment Error:", error);
                    alert("Payment initiation failed.");
                });
            });
        });
    </script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>


    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <nav>
    <href="privacy.html">
    
    </nav>
    <href="Terms.html">
    
    </nav>
    <href="Refund.html">
    

</body>

        