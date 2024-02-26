<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="../favicon.png">

    <meta name="description" content=""/>
    <meta name="keywords" content="bootstrap, bootstrap4"/>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>ClimbingZone</title>
</head>

<body>

<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="../index.php">ClimbingZone<span>.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item ">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nac-item active"><a class="nav-link" href="shop.html">Shop</a></li>
                <li><a class="nav-link" href="about.html">About us</a></li>
                <li><a class="nav-link" href="services.php">Services</a></li>
                <li><a class="nav-link" href="contact.html">Contact us</a></li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="logIn.php"><img src="/images/user.svg"></a></li>
                <li><a class="nav-link" href="cart.html"><img src="/images/cart.svg"></a></li>
            </ul>
        </div>
    </div>

</nav>
<!-- End Header/Navigation -->

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->


<!-- Start Product Section -->
<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">

            <?php include 'other-php/show_all_products.php'; ?>

        </div>
    </div>
</div>
<!-- End Product Section -->

<!-- Start Testimonial Slider -->
<div class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="section-title">Testimonials</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">

                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                        <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                    </div>

                    <div class="testimonial-slider">

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">
                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Exceptional quality! I recently purchased a set of climbing gear from ClimbingZone, and I am beyond impressed. The equipment is not only durable but also surprisingly lightweight. The customer service was excellent, making my overall experience with them outstanding.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="../images/person-1.png" alt="Sophie R." class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Sophie R.</h3>
                                            <span class="position d-block mb-3">Climbing Enthusiast</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END item -->

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;Fast shipping and top-notch products! I ordered my climbing essentials from ClimbingZone, and the delivery was unbelievably quick. The gear exceeded my expectations; each piece felt meticulously crafted. I highly recommend ClimbingZone for all climbing enthusiasts out there.&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="../images/person_1.jpg" alt="Alex M." class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Alex M.</h3>
                                            <span class="position d-block mb-3">Adventurer Extraordinaire</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END item -->

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;User-friendly website! As a beginner in climbing, I appreciated how easy it was to navigate ClimbingZone's website. The detailed product descriptions and smooth checkout process made my first purchase stress-free. Plus, the support team was quick to respond to my inquiries. Definitely my go-to for climbing gear!&rdquo;</p>
                                        </blockquote>

                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="../images/person_4.jpg" alt="Eva T." class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">Eva T.</h3>
                                            <span class="position d-block mb-3">Novice Climber turned Fan</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END item -->

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Slider -->

<!-- Start Footer Section -->
<footer class="footer-section">
    <div class="container relative">
        <div class="row">
            <div class="col-lg-8">
                <div class="subscription-form">
                    <h3 class="d-flex align-items-center"><span class="me-1"><img src="../images/envelope-outline.svg"
                                                                                 class="img-fluid"></span><span>Subscribe to Newsletter</span>
                    </h3>
                    <form action="#" class="row g-3">
                        <div class="col-auto">
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="col-auto">
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="border-top copyright">
            <p class="mb-2">Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All Rights Reserved
            </p>
        </div>

    </div>
</footer>
<!-- End Footer Section -->


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/tiny-slider.js"></script>
<script src="js/custom.js"></script>
</body>

</html>