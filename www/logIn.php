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
    <?php include 'other-php/checks.php'; ?>
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
                <li><a class="nav-link" href="shop.php">Shop</a></li>
                <li><a class="nav-link" href="about.html">About us</a></li>
                <li><a class="nav-link" href="services.php">Services</a></li>
                <li><a class="nav-link" href="contact.html">Contact us</a></li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="logIn.php"><img src="../images/user.svg"></a></li>
                <li><a class="nav-link" href="cart.html"><img src="../images/cart.svg"></a></li>
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
                    <h1>Log In</h1>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->


<!--  Start Register Section -->

    <div class="logIn m-5 ps-5">
        <div class="row center-div">
            <form method="post" action="">
                    <label for="username">Username:</label>
                    <input type="text" class="mb-3" name="username" required><br>

                    <label for="password">Password:</label>
                    <input type="password" class="mb-3" name="password" required><br>

                    <li><a href="signIn.php">Create an account</a></li>

                    <button type="submit" class="btn m-3">Log In</button>
                </div>
            </form>
        </div>
    </div>
<!--  End Register Section -->

<!-- Start Footer Section -->
<footer class="footer-section">
    <div class="container relative">
        <div class="row">
            <div class="col-lg-8">
                <div class="subscription-form">
                    <h3 class="d-flex align-items-center"><span class="me-1"><img src="../images/envelope-outline.svg"
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


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/tiny-slider.js"></script>
<script src="js/custom.js"></script>
</body>

</html>