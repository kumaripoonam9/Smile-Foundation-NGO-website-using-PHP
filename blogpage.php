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
    <style>
        .blog {
            padding: 10px;
            margin: 20px;
            background-color: MintCream;
            border-radius: 5px;
            border: 2px solid black;
        }

        .read-more {
            border-radius: 2rem;
            font-size: 2em;
            padding: 1rem 3rem;
            background-color: #1b4332;
        }

        .jumbotron {
            border-radius: 2rem;

        }
    </style>
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
                        <button class="btn btn-sm btn-default">Donate</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-lg-3 col-md-12 logo">
                        <a href="index.php">
                            <img src="assets/images/logo.jpg" alt="">
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



    <!-- ################# Blog Page Starts Here#######################--->

    <div class="container m-auto">

        <div class="text-center p-3 pt-5">
            <h1 style="color: black;">Nutrition for Education - Nourishing, nurturing, educating and empowering children</h1><br>
            <h5 style="color: black;"><i>~ Pooja Kulkarni | August 10, 2020</i></h5><br>

            <div class='center col-md-7 m-auto'>
                <img src="https://www.smilefoundationindia.org/blog/wp-content/uploads/2018/05/IMG-20180523-WA0001.jpg">
                <br><small>Nutrition for education-On ground endeavour</small>
            </div>
        </div>

        <div class="pl-5 pr-5 ml-5 mr-5 p-4 pb-5">
            <p>When six year old Kiran Wagh joined the Mission Education centre at Kalyan in Maharashtra, her teachers took note of her extreme health condition. She was visibly malnourished, looked much younger than her age and was covered in dirt.</p>
            <br>
            <p>Kiran's case is not unique. Malnutrition is more prevalent in India than in Sub-Saharan Africa. One in every three malnourished children in the world lives in India. According to the National Family Health Survey (NFHS III), 38% of all children below the age of five have stymied growth and are too small for their age, 46% are underweight and 16% are emaciated.</p>
            <br>
            <p>A critical issue in itself, lack of nutrition, has repercussions in every sphere of child development, as it stunts the physical as well as mental growth of children. Malnourished children are less likely to perform well in school, even to regularly attend school. This leads to low confidence levels and eventually drop-outs.</p>
            <br>
            <p>Being relegated to a neglected position in our socio-cultural context, girl children become the worst sufferers. Lack of nutrition and health problems often become an excuse for forcing girls out of school, and into domestic duties and early marriages. Barely able to survive themselves, these young girls are expected to take on the responsibility of motherhood, leading to high maternal and infant mortality rates.</p><br>
            <p>Understanding that nutrition and health form an important aspect of a child's growing up years, and can have a huge impact on her/ his education, Smile Foundation has always included them as integral aspects of the Mission Education programme.</p><br>
            <div class='center col-md-7 m-auto'>
                <img src="https://thepositiveindia.com/wp-content/uploads/2016/12/smil8.jpg">
                <br><small>Lorem ipsum dolor sit amet consectetur.</small>
            </div>
            <br>
            <p>External resource persons like dieticians, nutritionists, doctors and child specialists were engaged to give a wider scope to the campaign, and joined teachers from Mission Education centres in sensitizing the community members. The comprehensively designed campaign included detailed and interactive sessions on the importance of health, personal hygiene and nutrition. Innovative activities like street plays and songs were performed to engage the people and help them grasp the message easily.</p><br>
            <p><b>Smile Foundation initiated a nationwide awareness campaign on the importance of nutrition and health to sensitize children, their families and communities, towards the importance of nutritious food, leading to better health, education and other opportunities for the children.</b></p><br>

            <p>Today, India is riding on a promising tide of economic and social development, but this only remains a hollow projection, when our children do not have access to even the most basic human needs, like nutrition and education. Our children will lay the foundation for our country's future, but this might be too heavy a responsibility for their weak shoulders. We must come together to nurture, nourish, educate and empower our children, to help build a healthy, progressive nation.</p><br>
        </div>

        <div class="text-center jumbotron">
            <h1 style="color: black;">Like what you read?</h1>
            <br>
            <a href="blog.php"><button class="btn btn-dark read-more"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Go back to more such articles!</button></a>
        </div>
    </div>







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