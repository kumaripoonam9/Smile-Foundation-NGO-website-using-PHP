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
        small {
            color: red;
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
                <h2>Contact Us</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Contact US</li>
                </ul>
            </div>
        </div>
    </div>



    <!--  ************************* Contact Us Starts Here ************************** -->


    <div style="margin-top:0px;" class="row no-margin">
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.7777383728485!2d72.8973566149011!3d19.073507387089418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c627a20bcaa9%3A0xb2fd3bcfeac0052a!2sK.%20J.%20Somaiya%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1605091852147!5m2!1sen!2sin" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>



    <!-- form validation -->
    <?php
    $errorname = $erroremail = $errorphone = $errormessage = "";
    $name = $email = $phone = $message = "";

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
            $email = $_POST["email"];
            $email = trim($email);
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $erroremail = "Enter valid email";
                $anyErr = true;
            }
        }
        // phone
        if (empty($_POST["phone"])) {
            $errorphone = "Phone is required";
            $anyErr = true;
        } else {
            $phone = $_POST["phone"];
            $phone = trim($_POST["phone"]);
            if (!ctype_digit($phone)) {
                $errorphone = "Only digits are allowed";
                $anyErr = true;
            }
            if (strlen($phone) < 10) {
                $errorphone = "Phone number cannot be less than 10 digits";
                $anyErr = true;
            }
        }
        // message
        if (empty($_POST["message"])) {
            $errormessage = "Message is required";
            $anyErr = true;
        } else {
            $message = $_POST["message"];
            $message = trim($_POST["message"]);
        }
    }
    ?>

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">

                <div style="padding:20px" class="col-sm-7">
                    <h2>Contact Form</h2>

                    <form name="contactusform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> <br>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Enter Name <small>*</small> </label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"><small id="errorname"><?php echo $errorname; ?> </small></div>
                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Email Address<small>*</small> </label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"><small id="erroremail"><?php echo $erroremail; ?></small></div>
                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Mobile Number<small>*</small></label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" name="phone" placeholder="Enter Mobile Number" class="form-control input-sm"><small id="errorphone"><?php echo $errorphone; ?></small></div>

                        </div>
                        <div class="row cont-row">
                            <div class="col-sm-3"><label>Enter Message<small>*</small></label><span>:</span></div>
                            <div class="col-sm-8">
                                <textarea rows="5" placeholder="Enter Your Message" name="message" class="form-control input-sm"></textarea>
                                <small id="errormessage"><?php echo $errormessage; ?> </small>
                            </div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                            <div class="col-sm-8">
                                <button class="btn btn-primary btn-sm">Send Message</button>
                            </div>
                        </div>
                    </form>

                </div>


                <!-- sending mail -->
                <?php

                use PHPMailer\PHPMailer\PHPMailer;

                if (isset($_POST['name']) && isset($_POST['email'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];

                    require 'assets/PHPMailer-master/src/Exception.php';
                    require 'assets/PHPMailer-master/src/PHPMailer.php';
                    require 'assets/PHPMailer-master/src/SMTP.php';

                    $mail = new PHPMailer();
                    //smtp settings
                    $mail->isSMTP();
                    $mail->Host = "smtp.gmail.com";
                    $mail->SMTPAuth = true;
                    $mail->Username = "smile.foundation.for.you@gmail.com";
                    $mail->Password = 'smilefounDation123#$';
                    $mail->Port = 465;
                    $mail->SMTPSecure = "ssl";
                    //email settings
                    $mail->isHTML(true);
                    $mail->setFrom($email, $name);
                    $mail->addAddress("smile.foundation.for.you@gmail.com");
                    $mail->Subject = ("Mail from $name via Smile Foundation");
                    $mail->Body = $message;

                    if ($mail->send()) {
                        $status = "success";
                        $response = "Email is sent!";
                    } else {
                        $status = "failed";
                        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
                    }
                }

                ?>

                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">

                        <h2 style="margin-top:10px;">Address</h2>

                        Room No: A-123, <br>
                        Aryabhatta building,<br>
                        K. J. Somaiya College of Engineering Vidyavihar East,<br>
                        Mumbai - 400077<br><br>
                        Phone: +91 9159669599<br>
                        Email: smilefoundation@gmail.com<br>
                        Website: www.smilefoundation.org<br>

                    </div>


                </div>

            </div>
        </div>

    </div>



    <!-- insert in contact table in db -->
    <?php
    
    $con = mysqli_connect('localhost', 'root', '', 'ngo_db');

    mysqli_select_db($con, "ngo_db");

    $sql = "CREATE TABLE IF NOT EXISTS
            contact_tbl(
                id INT(6) UNSIGNED
                AUTO_INCREMENT
                PRIMARY KEY,
                fldName VARCHAR(30) NOT NULL,
                fldEmail VARCHAR(50) NOT NULL,
                fldPhone VARCHAR(10) NOT NULL,
                fldMessage VARCHAR(100) NOT NULL
            )";

    mysqli_query($con, $sql);


    $sql = "INSERT INTO contact_tbl ( fldName, fldEmail, fldPhone, fldMessage) VALUES ('" . $name . "','" . $email . "','" . $phone . "','" . $message . "')";

    // insert in database 
    mysqli_query($con, $sql);


    mysqli_close($con);

    ?>





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
                        <li><a ui-sref="about" href="#/about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#/gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
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