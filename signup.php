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
                                <a class="nav-link" href="blog.php">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact_us.php">Contact US</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="login.php"><i class="fas fa-user"></i></a>
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
                <h2>Register Here</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Sign up</li>
                </ul>
            </div>
        </div>
    </div>

    


    <!--  ************************* sign up Starts Here ************************** -->

    <section class="container-fluid mission-vision">
        <div class="container">
            <div class="text-center">
                <br>
                <h1>Sign Up</h1>
                <h5>Please fill the form below with your correct information</h5>
            </div>

            <form class="p-4 col-md-5 m-auto" action="" name="signupform" method="POST">
                <!-- first name -->
                <div class="form-label-group">
                    <label for="fname">First name<small>*</small></label>
                    <input type="text" class="form-control" name="fname" required>
                    <small id="errorfname"><?php //echo $errorname; 
                                            ?> </small>
                </div>
                <!-- last name -->
                <div class="form-label-group">
                    <label for="lname">Last name<small>*</small></label>
                    <input type="text" class="form-control" name="lname" required>
                    <small id="errorlname"><?php //echo $errorname; 
                                            ?> </small>
                </div>
                <!-- email -->
                <div class="form-label-group">
                    <label class="col-form-label" for="email">Email<small>*</small></label>
                    <input class="form-control" type="email" name="email" required>
                    <small id="erroremail"><?php //echo $erroremail; 
                                            ?> </small>
                </div>
                <!-- phone -->
                <div class="form-label-group">
                    <label class="col-form-label" for="phone">Contact</label>
                    <input class="form-control" type="tel" name="phone" required>
                    <small id="errorphone"><?php //echo $errorphone; 
                                            ?> </small>
                </div>

                <div class="form-label-group">
                    <label class="col-form-label" for="password">Password (max 30 characters) <small>*</small></label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <!-- <div class="form-label-group">
                    <label class="col-form-label" for="conf_password">Confirm password<small>*</small></label>
                    <input type="password" name="conf_password" class="form-control">
                </div> -->


                <br>
                <input class="btn btn-success btn-block" type="submit" value="Sign Up " />
                <input class="btn btn-danger btn-block" type="reset" value="Reset" />

            </form>



            <?php
            include('functional/signup_formval.php');

            // if ($_SERVER['REQUEST_METHOD'] == "POST") {

            //     if (isset($_POST['submit'])) {
            //         $fname = $_POST['fname'];
            //         $lname = $_POST['lname'];
            //         $email = $_POST['email'];
            //         $phone = $_POST['phone'];
            //         $password = $_POST['password'];

            //         echo $fname, $lname, $email, $phone, $password;



            //         $con = mysqli_connect('localhost', 'root', '');

            //         // check conn
            //         if (!$con) {
            //             die("Connection failed: " . mysqli_connect_error());
            //         }

            //         // create db
            //         $db = "ngo_db";
            //         $sql = "CREATE DATABASE $db;";

            //         mysqli_query($con, $sql);

            //         // use ngo db for further queries
            //         mysqli_select_db($con, $db);

            //         $table_name = "registered_user";

            //         $query = "SELECT ID FROM $table_name";
            //         $result = mysqli_query($con, $query);

            //         $sql = "CREATE TABLE IF NOT EXISTS
            //         $table_name(
            //             Firstname VARCHAR(50) NOT NULL,
            //             Lastname VARCHAR(50) NOT NULL,
            //             Email VARCHAR(50) PRIMARY KEY,
            //             Contact VARCHAR(10),
            //             Password VARCHAR(30)
            //         )";

            //         mysqli_query($con, $sql);

            //         echo 'table created';

            //         // insert query
            //         $sql = "INSERT INTO $table_name (Firstname, Lastname, Email, Contact, Password) values (?,?,?,?,?);";
            //         $pst = mysqli_prepare($con, $sql);
            //         mysqli_stmt_bind_param($pst, "sssss", $fname, $lname, $email, $phone, $password);

            //         if (mysqli_stmt_execute($pst))
            //             echo 'inserted';


            //         mysqli_close($con);
            //     }
            // }
            ?>

            <br>
            <p class="text-center pb-3">If you're already registered, login here! </p>
            <p class="text-center"><a href="login.php"><button class="btn btn-white">LOGIN</button></a></p>
            <br><br>
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
                        <li><a ui-sref="blog" href="blog.php">Blogs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="events" href="services.php">Upcoming Events</a><i class="fa fa-angle-right"></i></li>
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