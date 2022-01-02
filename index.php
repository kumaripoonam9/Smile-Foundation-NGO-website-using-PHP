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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/custom_css.css" />
    <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>
</head>

<body>
    <!-- covif button -->
    <a href="covid.php">
        <button class="btn covid-relief" type="button">
            <span class="blink"><i class="fa fa-medkit blink" aria-hidden="true"></i> Covid Relief</span>
        </button>
    </a>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title">Subscribe our Newsletter</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="pb-3">Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                    <form method="post">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
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
                <br>
            </div>
        </div>
    </div>
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


    <!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your html -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="assets/images/slider/slider-3.jpg" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">Reviving Humanity in all</h1>
                                    <p class="slider-text hidden-xs">Making every marginalised sector of society feel like they belong.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-1.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">Spreading smiles and joy</h1>
                                <p class="slider-text hidden-xs">Are you doing what makes your soul happy and your life fulfulling?</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">It's time for better help.</h1>
                                <p class="slider-text hidden-xs">Dil ki suno, kuch karo ... Listen to your heart, it's time to give back ...</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--  ************************* About Us Starts Here ************************** -->

    <div class="about-us container-fluid">
        <div class="container">

            <div class="row natur-row no-margin w-100">
                <div class="text-part col-md-6">
                    <h2>About Our Foundation</h2>
                    <p>Smile Foundation is a national level development organisation directly benefitting over 400,000 children and
                        their families every year, through 200 welfare projects on education, healthcare, livelihood and women
                        empowerment, in more than 950 remote villages and slums across 25 states of India. </p>
                    <p> Children are the future of a nation. For an emerging country like India, development of underprivileged
                        children holds the key to the progress of the nation itself, and their education is the cornerstone of this
                        progress. But education for children cannot be achieved without ensuring the welfare of the family – a child
                        can go to school regularly only when the family, particularly the mother is healthy and empowered; the child
                        gets proper nutrition; the family has decent livelihood opportunities and a steady income.

                        Realizing this, Smile Foundation, beginning in the corridors of education, has adopted a lifecycle approach
                        which addresses the needs of children, their families and the larger community.</p>

                    <p>Smile Foundation strongly believes that unless members of the civil society are involved proactively in the
                        process of development, sustainable change will not happen. Following this model of Civic Driven Change,
                        Smile Foundation sensitizes and engages the civil society, making it an active partner in all its welfare
                        initiatives.</p>
                </div>
                <div class="image-part col-md-6">
                    <div class="about-quick-box row">
                        <div class="col-md-6">
                            <div class="about-qcard">
                                <i class="fas fa-user"></i>
                                <p>Become a Volunteer</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-search-dollar red"></i>
                                <p>Fundraising</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-donate yell"></i>
                                <p>Donate for a Cause</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-hands-helping blu"></i>
                                <p>Help Someone</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- ################# Mission Vision Start Here #######################--->

    <section class="container-fluid mission-vision">
        <div class="container">
            <div class="row mission">
                <div class="col-md-6 mv-det">
                    <h1>Our Mission</h1>
                    <p>Work as a catalyst in bringing sustainable change in the lives of underprivileged children, youth and women, w
                        ith a life-cycle approach of development.</p>
                    <p>Enable the civil society across the world to engage proactively in the change process through the philosophy
                        of civic driven change.</p>
                    <p>Adopt highest standards of governance to emerge as a leading knowledge and technology driven, innovative and
                        scalable international development organisation.</p>
                </div>
                <div class="col-md-6 mv-img">
                    <img src="assets/images/misin.jpg" alt="">
                </div>
            </div>
            <div class="row vision">
                <div class="col-md-6 mv-img">
                    <img src="assets/images/vision.jpg" alt="">
                </div>
                <div class="col-md-6 mv-det">
                    <h1>Our Vision</h1>
                    <p>Smile Foundation, a non-profit organization in india is to empower underprivileged children, youth and women
                        through relevant education, innovative healthcare and market-focused livelihood programmes.
                        Smile Foundation is to deploy best possible methodology and technology for achieving ideal SROI (social return on investment),
                        to practice and promote good governance. To link business competitiveness of the corporate with social development initiatives;
                        also to sensitize privileged children, youth and citizens in general to promote Civic Driven Change.</p>
                </div>
            </div>
        </div>
    </section>



    <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Popular Causes</h2>
                <p>We are a non-profital & Charity raising money for child education</p>
            </div>
            <div class="event-ro row">
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>Girl Child Prestige</h4>
                        <p class="raises"><span>Raised : Rs.3,94,425</span> / Rs.5,00,000 </p>
                        <p class="desic">Provided basic sanitary needs and initiated work and education programmes for girls bringing about an attitude change in parents and promoting equality.</p>
                        <a href='donate1.php'><button class="btn btn-success btn-sm">Donate Now</button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_06.jpg" alt="">
                        <h4>Pan India School Health Program</h4>
                        <p class="raises"><span>Raised : Rs.4,34,425</span> / Rs.10,00,000 </p>
                        <p class="desic">4,765 children have benefitted from the Smile On Wheels health campaign providing free health supplies, blood banks and health checkups to remote rural areas. </p>
                        <a href='donate1.php'><button class="btn btn-success btn-sm">Donate Now</button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_04.jpg" alt="">
                        <h4>Rural Child Education</h4>
                        <p class="raises"><span>Raised : Rs.38,420</span> / Rs.5,00,000 </p>
                        <p class="desic">Already functional in 23 states, organised teacher training programs and outsourced study material to 32,000 children nationwide.</p>
                        <a href='donate1.php'><button class="btn btn-success btn-sm">Donate Now</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- ################# Charity Number Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row session-title">
                    <h2>Our Reach</h2>
                    <p>In keeping with its philosophy of 'Real Work Real Change', Smile Foundation , an NGO in Delhi, India to
                        support the underserved, has taken its intervention into the interiors of India, reaching the unreached
                        in the remotest of rural areas and urban slums with our services and making this helping foundation in India
                        , the best NGO in India.</p>
                </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>12+</h3>
                        <span>YEARS OF EXPERIENCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>1812+</h3>
                        <span>HAPPY CHILDREN</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>52+</h3>
                        <span>EVENTS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>48+</h3>
                        <span>SLUMS & VILLAGES</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--################### Our Team Starts Here #######################--->
    <section class="our-team team-11">
        <div class="container">
            <div class="session-title row">
                <h2>Meet our Team</h2>
                <p>Our mentors at Smile Foundation do the same for us. An initial push, some guidance when needed, a sharing
                    of knowledge gained through years of experience—our mentors work pro bono to help further our cause and to
                    help us realise our full potential, individually and as an organisation.</p>
            </div>
            <div class="row team-row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb1.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>Accomplished professional with 25 years of experience in Entrepreneurship and Fund Management. </i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb2.jpg" alt="">
                        <div class="det-o">
                            <h4>Akshay Calapa</h4>
                            <i>Senior Pharmaceutical executive in Business Development and Alliance Management.</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb3.jpg" alt="">
                        <div class="det-o">
                            <h4>Mitchell Williams</h4>
                            <i>CEO of Dentsu Solutions, India and the President of DentsuIndia (Strategy & Integration).</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb4.jpg" alt="">
                        <div class="det-o">
                            <h4>Karthik Kumar</h4>
                            <i>Advertising & marketing professional, also played a role in evangelising “Daan Utsav”.</i>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



    <!-- ################# Our Blog Starts Here#######################--->

    <section class="our-blog">
        <div class="container">
            <div class="row session-title">
                <h2> Our Blogs </h2>
                <p>Take a look at what people say about US </p>
            </div>
            <div class="blog-row row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        <figure>
                            <img src="assets/images/events/image_01.jpg" alt="">
                        </figure>
                        <div class="blog-detail">
                            <small>By Kashyap Singh | June 19 2018</small>
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
                            <small>By Pooja Kulkarni | August 10, 2018</small>
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
            </div>
        </div>
    </section>

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
            <!-- php code for form validation -->
            <?php

            $errorname = $erroremail = "";
            $name = $email = "";

            $anyErr = false;

            if ($_SERVER['REQUEST_METHOD'] == "POST") {

                // name
                if (empty($_POST["name"])) {
                    $errorname = "Name is required";
                    $anyErr = true;
                } else {
                    $name = $_POST["name"];
                    $name = trim($name);
                    if (ctype_alpha(str_replace(' ', '', $name)) === false) {
                        $errorname = "Please write a valid name";
                        $anyErr = true;
                    }
                }

                // email
                if (empty($_POST["email"])) {
                    $erroremail = "Email is required";
                    $anyErr = true;
                } else {
                    $email = trim($_POST["email"]);
                    // $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                        $erroremail = "Enter valid email";
                        $anyErr = true;
                    }
                }
            }

            function checkSubmission()
            {
                global $anyErr;
                if ($anyErr == false) {
                    return true;
                }
            }

            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            ?>

            <h2>Subscribe to our Newsletter</h2>
            <form action="" method="post">
                <div class="form-group">
                    <input name="name" type="text" class="form-control" placeholder="Full name">
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