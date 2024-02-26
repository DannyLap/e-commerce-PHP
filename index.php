<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content=""/>
    <meta name="keywords" content="bootstrap, bootstrap4"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="www/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="www/css/tiny-slider.css">
    <link rel="stylesheet" href="www/css/style.css">
    <link rel="stylesheet" href="www/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="www/css/tiny-slider.css">
    <link rel="stylesheet" href="www/css/style.css">
    <title>ClimbingZone</title>
    <? include '/www/other-php/check_logIn.php'; ?>
</head>

<body>

<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">ClimbingZone<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                <li><a class="nav-link" href="www/shop.php">Shop</a></li>
                <li><a class="nav-link" href="www/about.html">About us</a></li>
                <li><a class="nav-link" href="www/services.html">Services</a></li>
                <li><a class="nav-link" href="www/contact.html">Contact us</a></li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="www/logIn.php"><img src="images/user.svg" alt=""></a></li>
                <li><a class="nav-link" href="www/cart.html"><img src="images/cart.svg"></a></li>
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
                    <h1><span class="d-block">Quality Climbing Gear </span></h1>
                    <p class="mb-4">Browse through our comprehensive range of climbing equipment, thoughtfully curated for durability and innovation, ensuring you tackle every ascent with confidence and style.</p>
                    <p><a href="www/shop.php" class="btn btn-white-outline">Explore</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<!-- Start Product Section -->
<div class="product-section">
    <div class="container">
        <div class="p-5">
            <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
            <p class="mb-4">Crafted with excellent material, our climbing gear ensures durability and performance, providing you with reliable equipment for every ascent. </p>
            <p><a href="www/shop.php" class="btn">Explore</a></p>
        </div>
    </div>
</div>
<!-- End Product Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2 class="section-title">Why Choose Us</h2>
                <p>At ClimbingZone, we stand out for more than just our quality products. Choosing us means opting for excellence in every aspect. From superior craftsmanship to a commitment to customer satisfaction, we prioritize your needs. Our experienced team is dedicated to providing top-notch service, ensuring you embark on your climbing adventures with confidence. Discover why adventurers worldwide choose ClimbingZone for unparalleled quality and service.</p>
                
                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/truck.svg" alt="Image" class="img-fluid">
                            </div>
                            <h3>Fast &amp; Free Shipping</h3>
                            <p>Enjoy the convenience of our fast and free 48-hour shipping – delivering your climbing essentials promptly to your doorstep without any extra cost.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/bag.svg" alt="Image" class="img-fluid">
                            </div>
                            <h3>Easy to Shop</h3>
                            <p>Simplify your shopping experience with us. Our user-friendly platform makes it easy for you to find and order your climbing essentials hassle-free.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/support.svg" alt="Image" class="img-fluid">
                            </div>
                            <h3>24/7 Support</h3>
                            <p>Our dedicated team is here around the clock to provide you with reliable support.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/return.svg" alt="Image" class="img-fluid">
                            </div>
                            <h3>Hassle Free Returns</h3>
                            <p>Easy returns, no hassle. Your satisfaction is our commitment.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="images/sports-climbing-landscape.jpg" alt="Image" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start Product Section -->
<div class="product-section">
<!-- Start Product Section -->
<div class="product-section">
    <div class="container">
        <div class="row p-5">
            <h2 class="section-title">Best Sellers</h2>
            <?php include 'www/other-php/show_products.php'; ?>
        </div>
    </div>
</div>
<!-- End Product Section -->


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
                                                <img src="images/person-1.png" alt="Sophie R." class="img-fluid">
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
                                                <img src="images/person_1.jpg" alt="Alex M." class="img-fluid">
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
                                                <img src="images/person_4.jpg" alt="Eva T." class="img-fluid">
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
                    <h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg"
                                                                                  alt="Image"
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


<script src="www/js/bootstrap.bundle.min.js"></script>
<script src="www/js/tiny-slider.js"></script>
<script src="www/js/custom.js"></script>
</body>

</html>