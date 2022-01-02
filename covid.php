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

<body class="blogpage">

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
                <h2>Covid Relief Campaign by Smile Foundation</h2>
                <!-- <small>Lending a helping hand...</small> -->
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Covid Relief</li>
                </ul>
            </div>
        </div>
    </div>



    <!-- ################# small article #######################--->

    <div class="text-center main-blog">

        <h1 class="m-3 p-2 pt-5" style="color: black;">
            " Heath Cannot Wait - A Covid Relief Campaign "
        </h1>
        <p style="color: black;"><small><i>~ Kashyap Singh | June 19 2021</i></small></p>

        <div class="container row m-auto align-items-center pt-5 pl-4 pr-4 ml-4 mr-4">
            <div class="col-md-5 m-auto">
                <img style="border-radius: 1rem;" src="assets/images/blogpage.jpg">
            </div>
            <div class="col-md-7">
                <p>The second wave of the Covid-19 pandemic has shaken up the entire country and seems to be even more devastating than the first. Fighting the new, more infectious variant of the virus, frontline health workers are working round the clock.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro molestias fuga sit modi atque ab consequatur amet, nisi reprehenderit unde ullam libero, cupiditate animi fugit quaerat possimus rem hic minus! </p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, similique?</p>
            </div>
        </div>

        <h2 class="mt-4 pt-4">Updates From the Ground</h2>

        <section class="our-blog">
            <div class="container">

                <div class="blog-row row container pl-3 pr-3">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="https://images.moneycontrol.com/static-mcnews/2021/04/Covid-India-770x433.jpg" alt="" height="210">
                            </figure>
                            <div class="blog-detail">
                                <h4>Supporting Frontline Workers</h4>
                                <p>Reaching PPE kits, oximeters, medicines, masks , gloves and other essentials.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="https://images.indianexpress.com/2021/08/Covid-kerala-2-1.jpg" alt="" height="210">
                            </figure>
                            <div class="blog-detail">
                                <h4>Medical Interventions</h4>
                                <p>Reaching medical devices and medicine kits to frontline workers and families.<br></p>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="https://static.toiimg.com/thumb/msid-83299695,width-400,resizemode-4/83299695.jpg" alt="" height="210">
                            </figure>
                            <div class="blog-detail">
                                <h4>Food Kits</h4>
                                <p>Reaching comprehensive ration kits to the remotest parts all across the country once a month.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="https://www.utkaltoday.com/wp-content/uploads/2020/09/Healthcare-categories-of-India-utkal-today-pri.jpg" alt="" height="240">
                            </figure>
                            <div class="blog-detail">
                                <h4>Not Alone Centers</h4>
                                <p>Addressing the need for physical distancing for families living in small spaces with basic facilities provided free of cost.</p>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="https://www.thehindubusinessline.com/news/variety/asaesh/article31322002.ece/ALTERNATES/LANDSCAPE_1200/face-mask" alt="" height="240">
                            </figure>
                            <div class="blog-detail">
                                <h4>Face Masks, Cloth Pads</h4>
                                <p>Sanitary Cloth Pads and Face Masks- Making and reaching them to remote areas and helping women get work to promote empowerment.</p>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure>
                                <img src="https://thelogicalindian.com/h-upload/2021/07/15/1600x960_199458-web-thumbnail-11-5.jpg" alt="" height="240">
                            </figure>
                            <div class="blog-detail">
                                <h4>Missed-out Communities</h4>
                                <p>Focusing on communities and helping them in these times like the differently abled, HIV+, sex workers, devadasis, minorities groups etc.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <h1 class="m-2 p-4 pt-5" style="color: black;">Our Work in 2020</h1>

            <iframe style="border-radius: 1rem;" width="560" height="315" src="https://www.youtube.com/embed/-pbxrgeeCLE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <p class="container m-3 p-4 m-auto pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi culpa a adipisci dolor quis harum nam, earum nulla. Sint perspiciatis consequatur itaque ducimus provident ipsa pariatur maiores corporis nihil autem.</p>

        </section>




        <div class='text-center covid-card card m-auto col-md-6'>
            <div class="dark-mask p-5">
                <h2 class="text-white pb-3">Check Live Covid Count in your State</h2>
                <!-- api call -->
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_POST['submit'])) {

                        $state =  $_POST['state'];

                        $url = "https://api.rootnet.in/covid19-in/stats/latest";
                        // $url = "http://localhost/wp2/smilefoundation/functional/total.php";

                        $client = curl_init($url);
                        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
                        $response = curl_exec($client);
                        $result = json_decode($response, true);
                    }
                }
                ?>

                <form name="covidForm" method="POST" action=''>
                    <div class="form-label-group">
                        <h4 class="text-white p-2">Enter state</h4>
                        <small class="text-white">Please select states only from the dropdown below.</small>
                        <input class="col-md-7" list='states' name="state">
                        <datalist id="states">
                            <!-- all states -->
                            <?php
                            foreach ($result['data']['regional'] as $state) {
                                $state_name = $state['loc'];
                                echo "<option value='$state_name'>";
                            }
                            ?>
                        </datalist>
                    </div>

                    <button type="submit" name="submit" class="btn btn-success p-2 m-3 pl-4 pr-4">Check Covid Count</button>
                </form>

                <?php
                if (isset($_POST['state'])) {

                    foreach ($result['data']['regional'] as $state) {
                        $state_name = $state['loc'];
                        // echo "<option value='$state_name'>";
                        if ($state_name == $_POST['state']) {
                            $confirmedCasesIndian = $state['confirmedCasesIndian'];
                            $confirmedCasesForeign = $state['confirmedCasesForeign'];
                            $discharged = $state['discharged'];
                            $deaths = $state['deaths'];
                            $totalConfirmed = $state['totalConfirmed'];
                            break;
                        }
                    }
                    $lastOriginUpdate = $result['lastOriginUpdate'];

                    echo '<hr>
                    <div class="text-white">
                    <h5 class="text-white p-2">Live covid data for state '. $state_name.'</h5>';

                    echo '<table class="table text-left p-4">';

                    echo "<tr>
                        <td>Confirmed Indian cases</td>
                        <td>:</td>
                        <td>$confirmedCasesIndian</td>
                    </tr>";
                    echo "<tr>
                        <td>Confirmed foreign cases</td>
                        <td>:</td>
                        <td>$confirmedCasesForeign</td>
                    </tr>";
                    echo "<tr>
                        <td>Discharge</td>
                        <td>:</td>
                        <td>$discharged</td>
                    </tr>";
                    echo "<tr>
                        <td>Deaths</td>
                        <td>:</td>
                        <td>$deaths</td>
                    </tr>";
                    echo "<tr>
                        <td>Total confirmed</td>
                        <td>:</td>
                        <td>$totalConfirmed</td>
                    </tr>";

                    echo "</table><p>Last updated on $lastOriginUpdate</p></div>";
                    echo ""; 
                }
                ?>
            </div>

        </div>

        <br><br>




        <div class="doctor-message mt-5">
            <div class="inner-lay">
                <div class="container">
                    <div class="row session-title">
                        <h2>We are there, we need you too...</h2>
                        <p>In keeping with its philosophy of 'Real Work Real Change', Smile Foundation , an NGO in Delhi, India to
                            support the underserved, has taken its intervention into the interiors of India, reaching the unreached
                            in the remotest of rural areas and urban slums with our services and making this helping foundation in India
                            , the best NGO in India.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 numb">
                            <h3><a href='donate1.php' style='color:green;'>DONATE NOW</a></h3>
                            <span>Give back to the community</span>

                        </div>
                        <div class="col-sm-6 numb">
                            <h3><a href='volunteer.php' style='color:green;'>VOLUNTEER WITH US</a></h3>
                            <span>Be there for the community</span>
                        </div>
                    </div>
                </div>

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

                <h2 class="m-3 pt-4">Subscribe to our Newsletter</h2>
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

    </div>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>