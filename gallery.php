<?php

// Start the session
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smile Foundation</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom_css.css" />
</head>

<body>

    <!-- covif button -->
    <a href="covid.php">
        <button class="btn covid-relief" type="button">
            <span class="blink"><i class="fa fa-medkit blink" aria-hidden="true"></i> Covid Relief</span>
        </button>
    </a>

    <header class="continer-fluid ">
        <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="ulleft">
                            <li>
                                <i class="far fa-envelope"></i>
                                smilefoundation@gmail.com
                                <span>|</span>
                            </li>
                            <li>
                                <i class="fas fa-phone-volume"></i>
                                +876 987 666 5433
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 folouws">

                        <ul class="ulright">
                            <li> <small>Folow Us </small>:</li>
                            <li>
                                <i class="fab fa-facebook-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-twitter-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-instagram"></i>
                            </li>
                            <li>
                                <i class="fab fa-linkedin"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                        <a href="volunteer.php"><button class="btn btn-sm btn-success">Join Us</button></a>
                        <a href="donate1.php"><button class="btn btn-sm btn-success">Donate</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-lg-3 col-md-12 logo">
                        <a href="index.php">
                            <img src="assets/images/logo.png" alt="">
                            <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                        </a>

                    </div>
                    <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

                        <ul class="navbad">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about_us.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services.php">Our Work</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="gallery.php">Gallery</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="blog.php">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact_us.php">Contact US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">
                                    <i class="fas fa-user"></i> 
                                    <?php 
                                    if (isset($_SESSION["login"])) {
                                        echo $_SESSION['user_name'];
                                    } ?> 
                                </a>
                            </li>




                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Gallery</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Gallery</li>
                </ul>
            </div>
        </div>
    </div>



    <!--  ************************* Gallery Starts Here ************************** -->
    <div id="portfolio" class="gallery">
        <div class="container">

            <div class="row justify-content-center">


                <div class="gallery-filter d-none d-sm-block">
                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="covid"><i class="fas fa-heartbeat" style="color:crimson;"></i> Covid Relief</button>
                    <button class="btn btn-default filter-button" data-filter="orphanage">Orphanage Visits</button>
                    <button class="btn btn-default filter-button" data-filter="distribution">Items Distributions</button>
                    <button class="btn btn-default filter-button" data-filter="education">Education Projects</button>
                </div>
                <br />

                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter covid">
                    <img src="assets/images/events/image_01.jpg" class="img-responsive">
                    <small class=""><i>
                        <p class="pt-2">Location : Sarang Village, Maharashtra</p>
                        <p>Year: 2022</p>
                        <p>Helped locals build well for education.</p>
                    </i></small>
                </div>

                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter orphanage">
                    <img src="assets/images/events/image_02.jpg" class="img-responsive">
                    <small class=""><i>
                        <p class="pt-2">Location : BalNiketan, Delhi</p>
                        <p>Year: 2021</p>
                        <p>Provided basic sanitary needs.</p>
                    </i></small>
                </div>

                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter covid">
                    <img height="175px;" src="https://images.indianexpress.com/2020/04/coronavirus-delhi-food-759.jpg" class="img-responsive">
                    <small class=""><i>
                        <p class="pt-2">Location : Dharavi, Mumbai</p>
                        <p>Year: 2020</p>
                        <p>Provided meals to the needy.</p>
                    </i></small>
                </div>

                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter education">
                    <img src="assets/images/events/image_03.jpg" class="img-responsive">
                    <small class=""><i>
                        <p class="pt-2">Location : Raipur Village, Bihar</p>
                        <p>Year: 2019</p>
                        <p>Initiated Education Programs for villagers.</p>
                    </i></small>
                </div>

                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter distribution">
                    <img src="assets/images/events/image_04.jpg" class="img-responsive">
                    <small class=""><i>
                        <p class="pt-2">Location : Gorakhpur, Haryana</p>
                        <p>Year: 2018</p>
                        <p>Provided study material to schools.</p>
                    </i></small>
                </div>


                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter distribution">
                    <img src="assets/images/events/image_05.jpg" class="img-responsive">
                    <small class=""><i>
                        <p class="pt-2">Location : Pune, Maharashta</p>
                        <p>Year: 2017</p>
                        <p>Supplied blankets for winters.</p>
                    </i></small>
                </div>

                <div class="gallery_product text-center col-lg-3 col-md-3 col-sm-4 col-xs-6 filter education">
                    <img src="assets/images/events/image_06.jpg" class="img-responsive">
                    <small class=""><i>
                        <p class="pt-2">Location : Dadra, Rajasthan</p>
                        <p>Year: 2016</p>
                        <p>Spent quality time with orphans.</p>
                    </i></small>
                </div>

                <div class="gallery_product text-center col-lg-3 col-md-4 col-sm-3 col-xs-6 filter education">
                    <img src="assets/images/events/image_07.jpg" class="img-responsive">
                    <small class=""><i>
                        <p class="pt-2">Location : Gokarna, Karnataka</p>
                        <p>Year: 2015</p>
                        <p>Initiated sports aid for poor kids.</p>
                    </i></small>
                </div>



            </div>
        </div>


    </div>
    <!-- ######## Gallery End ####### -->


    <!--  ************************* Footer Starts Here ************************** -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Smile Foundation, a non-profit organization in india is to empower underprivileged children, youth and women through relevant education, innovative healthcare and market-focused livelihood programmes.
                    </p>
                    <p>We aim to achieve behavioural, social and economic transformation towards an India where all children have equal opportunities to access quality education.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="about_us.php">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="blog.php">Blogs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="services.php">Our Work</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="gallery.php">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="contact_us.php">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        Smile Foundation <br>
                        Mumbai <br>
                        Maharashtra, IND <br>
                        Phone: +91 9159669599 <br>
                        Email: <a href="mailto:smilefoundation@gmail.com" class="">smilefoundation@gmail.com</a><br>
                        Web: <a href="index.php" class="">www.smilefoundation.org</a>
                    </address>

                </div>
            </div>

            <h2>Subscribe to our Newsletter</h2>
            <form action="sendemail.php" method="post">
                <div class="form-group">
                    <input name="name" type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email Address">
                </div>
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
            <div class="nav-box row clearfix">
                <div class="inner col-md-9 clearfix">
                    <ul class="footer-nav clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="services.php">Servies</a></li>
                        <li><a href="blog.php">Blogs</a></li>
                        <li><a href="contact_us.php">Contact US</a></li>
                    </ul>


                </div>

                <div class="donate-link col-md-3"><a href="donate1.php" class="btn btn-primary "><span class="btn-title">Donate Now</span></a></div>
            </div>

        </div>


    </footer>
    <div class="copy">
        <div class="container">
            <a href="index.php">2021 &copy; All Rights Reserved</a>

            <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>

    </div>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>