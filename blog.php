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
                <h2>Our Blog</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Blog</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="container pt-5 text-center">
        <h2>Subscribe to our Newsletter</h2>
        <div class="p-2">
            <h6>For more such articles, subscribe to us!</h6>
            <p class="h6">We promise you we won't spam :)</p>
        </div>
        <form class="col-md-5 m-auto p-2" method="post">
            <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Full name">
            </div>
            <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Email Address">
            </div>
            <button type="submit" class="btn btn-success">Subscribe</button>
        </form>

        <!-- send mail for subscriptoion -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['name']) && !empty($_POST['email'])) {

                $reciever_name = $_POST['name'];
                $reciever_email = $_POST['email'];

                include('sendemail.php');
            }
        }
        ?>
    </section>



    <!-- ################# Our Blog Starts Here#######################--->

    <section class="our-blog">
        <div class="container">

            <div class="text-center p-3 pb-5">
                <h3 class="">Happy reading!</h3>
                <h6>Be up to date with what we are doing and what causes we stand for...</h6>
            </div>

            <div class="blog-row row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        <figure>
                            <img src="assets/images/events/image_01.jpg" alt="">
                        </figure>
                        <div class="blog-detail">
                            <small>By Kashyap Singh | June 19 2021</small>
                            <h4>Why Health Cannot Wait</h4>
                            <p> The second wave of the Covid-19 pandemic has shaken up the entire country and seems to be even more devastating than the first. Fighting the new, more infectious variant of the virus, frontline health workers are working round the clock ...</p>
                            <div class="link">
                                <a href="blogpage.php">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        <figure>
                            <img src="assets/images/events/image_02.jpg" alt="">
                        </figure>
                        <div class="blog-detail">
                            <small>By Pooja Kulkarni | August 10, 2020</small>
                            <h4>Nutrition for Education</h4>
                            <p> When six year old Kiran Wagh joined the Mission Education centre at Kalyan in Maharashtra, her teachers took note of her extreme health condition. She was visibly malnourished, looked much younger than her age and was ...</p>
                            <div class="link">
                                <a href="#">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        <figure>
                            <img src="assets/images/events/image_03.jpg" alt="">
                        </figure>
                        <div class="blog-detail">
                            <small>By Aditya Kumar | January 20 2019</small>
                            <h4>Empowering the Young</h4>
                            <p> Today, more than half of India’s population is below the age of 25. In another seven years, India’s average age will be just 29 years, in comparison with 37 in China and the United States, 45 in Western Europe and 48 in Japan; ...</p>
                            <div class="link">
                                <a href="#">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        <figure>
                            <img src="assets/images/events/image_04.jpg" alt="">
                        </figure>
                        <div class="blog-detail">
                            <small>By Nirav Hirani | April 23 2018</small>
                            <h4>Building Uttrakhand Again</h4>
                            <p> Uttrakhand, a state known for its sweeping panoramas of mist covered mountains, rivers, lakes and glaciers faced the wrath of nature when the calamitous flash floods in the year of 2013 brought the state to a standstill ...</p>
                            <div class="link">
                                <a href="#">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        <figure>
                            <img src="assets/images/events/image_05.jpg" alt="">
                        </figure>
                        <div class="blog-detail">
                            <small>By Bhavana Patel | August 10 2017</small>
                            <h4>Umaa</h4>
                            <p> Last year, Umaa was awarded with a merit-based scholarship under Smile Foundation’s Swabhiman programme to help her complete her schooling and higher studies. She belongs to a family who work hard ...</p>
                            <div class="link">
                                <a href="#">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        <figure>
                            <img src="assets/images/events/image_06.jpg" alt="">
                        </figure>
                        <div class="blog-detail">
                            <small>By Meena Jain | February 19 2020</small>
                            <h4>Daughters no more dearer?</h4>
                            <p> Over the past decade, gender equality has been recognized as key not only to the health of nations, but also to their social and economic development. The promotion of gender equality and empowering of women ...</p>
                            <div class="link">
                                <a href="#">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>





    <!--  ************************* Footer Starts Here ************************** -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Smile Foundation, a non-profit organization in india is to empower underprivileged children, youth and women through relevant education, innovative healthcare and market-focused livelihood programmes.
                    </p>
                    <p>We aim to achieve behavioural, social and economic transformation for all girls towards an India where all children have equal opportunities to access quality education.</p>
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
                        <li><a href="about_us.php">About US</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="services.php">Our Work</a></li>
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
            <a href="index.php">2021 &copy; All Rights Reserved </a>

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