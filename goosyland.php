<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
    <title>Moosaaland | Home Page</title>
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <style>
        .container {
            width: 1500px;
        }

        .img-container {
            width: 100%;
            max-width: 2000px;
            margin: auto;
            padding: 40px 0px;
        }

        .locations {
            display: flex;
            flex-wrap: wrap;
            /* allows stacking on small screens */
            /* gap: 40px; */
            align-items: center;
            justify-content: space-between;
        }

        .gooseyland-logo img {
            padding-right: 50px;
            height: 230px;
            align-self: center;
            justify-self: center;
            justify-content: center;
            align-items: flex-start;
        }

        /* Details Section */
        .details {
            flex: 1 1 35%;
            min-width: 300px;
            align-self: center;
            padding-left: 6%;
        }

        /* Image in slider box */
        .slider {
            flex: 1 1 20%;
            width: 280px;
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            align-self: center;
        }

        .slider img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 10px;

        }

        .map_div {
            margin-bottom: -53px;
        }

        @media only screen and (min-width: 321px) and (max-width:500px) {

            .text-col {
                padding-top: 20px !important;
            }

            .mob_con {
                padding-left: 4px !important;
            }

        }

        @media only screen and (max-width:780px) {
            .moosee {

                -ms-transform: scale(2.5) !important;
                -webkit-transform: scale(2.5) !important;
                -moz-transform: scale(2.5) !important;
                -o-transform: scale(2.5) !important;
                margin-top: 5.5em !important;

            }

            .icon-bar {
                background-color: #000;
                color: #000;
            }

            .mob {
                padding: 0px !important;
            }

            #slider {
                padding-left: 30px !important;
            }

            #carousel-bounding-box {
                padding: 0px;
            }

            .owl-next {
                display: block !important;
            }

            .owl-prev {
                display: block !important;
            }

            .owl-pagination {
                display: block !important;
            }

            .footer_text {
                text-align: center;
            }

            input.btn.btn-lg {
                width: 75% !important;

            }

            .input-group {
                padding-left: 15px;
            }
        }

        .content {}

        .text-caption {
            background-color: #000;
            right: 0%;
            left: 0%;
            padding-bottom: 0px;
            bottom: 0px;
        }

        .marquee0 div {
            width: 100% !important;
        }

        .social_links {
            list-style: none;
            margin-top: 10px;
            padding-left: 0px;
        }

        .social_links li {
            float: left;
            display: inline-block;
            margin-right: 2em;
        }
    </style>
</head>

<body>
    <div class="header ">
        <div class="hidden-lg hidden-md hidden-xl">
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="index.php">Home</a>
                    <a href="about-us.php">About Moosaa</a>
                    <a href="fun-zone.php">Fun Zone</a>
                    <a href="why-moosaaland.php">Why Moosaaland</a>
                    <a href="parties.php">Parties</a>
                    <!--a href="contest.php">Contest</a>
                    <a href="registration.php">Registration</a-->
                    <a href="packages.php">Packages</a>
                    <a href="play-areas.php">Play-Areas</a>
                    <a href="contact-us.php">Contact Us</a>
                    <a href="goosyland.php" class="act">Powered By Moosaland</a>
                </div>
            </div>
            <span style="font-size:40px;cursor:pointer;color:#000;" id="opnbtn" onclick="openNav()"> <button type="button" class="navbar-toggle" style="float:left;top:10px;left:20px;position:absolute;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </span>
            <img src="images/logo.png" class="img-responsive" style="width:50%;margin:0 auto;padding-top:3%;" />
        </div>
        <div class="container mob grid_div">
            <div class="row hidden-xs hidden-sm">
                <div class="col-lg-9 col-md-6 col-xs-12 col-sm-12">
                    <div class="row" style="margin-top:8em;">
                        <ul class="social_links">
                            <li><a href="https://www.facebook.com/MOOSAALAND/" target="blank" title="Facebook"><img src="images/facebook.svg" class="img-responsive" style="" /></a></li>
                            <li> <a href="https://twitter.com/@Moosaa_land" target="blank" title="Twitter"><img src="images/twitter.svg" class="img-responsive" style="" /></a></li>
                            <li><a href="https://plus.google.com/112473148039869815047" target="blank" title="Google Plus"><img src="images/google-plus.svg" class="img-responsive" style="" /></a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <nav class="navbar  nav-theme" style="margin-top:2em;">
                            <div class="container-fluid">
                                <div class="navbar-header hidden-lg hidden-md">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand " href="index.php">Moosaaland</a>
                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav">
                                        <li><a href="index.php" style="border-bottom-left-radius:30px;border-top-left-radius:30px;">Home</a></li>
                                        <li><a href="about-us.php">About Moosaa</a></li>
                                        <li><a href="fun-zone.php">Fun Zone</a></li>
                                        <li><a href="why-moosaaland.php">Why Moosaaland</a></li>
                                        <!--li><a href="event-workshop.php">Event &amp; Workshop</a></li-->
                                        <li><a href="parties.php">Parties</a></li>
                                        <!--li><a href="contest.php">Contest</a></li>
                                        <li><a href="registration.php">Registration</a></li-->
                                        <li><a href="packages.php">Packages</a></li>
                                        <li><a href="play-areas.php">Play-Areas</a></li>
                                        <li><a href="contact-us.php">Contact Us</a></li>
                                        <li class="active"><a href="goosyland.php">Powered By Moosaland</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                    <img src="images/logo.png" class="img-responsive img-center" />
                </div>
            </div>
        </div>

    </div>

    <div class="jumbotron contact-primary" style="margin-top:-1px;padding-top:10px;">
        <div class="hidden-lg hidden-md hidden-xl">
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="index.php">Home</a>
                    <a href="about-us.php">About Moosaa</a>
                    <a href="fun-zone.php">Fun Zone</a>
                    <a href="why-moosaaland.php">Why Moosaaland</a>
                    <a href="parties.php">Parties</a>
                    <a href="packages.php">Packages</a>
                    <!--a href="contest.php">Contest</a>
                    <a href="registration.php">Registration</a-->
                    <a href="play-areas.php" class="act">Play-Areas</a>
                    <a href="contact-us.php">Contact Us</a>
                    <a href="goosyland.php">Powered By Moosaland</a>
                </div>
            </div>
            <span style="font-size:40px;cursor:pointer;color:#000;" id="opnbtn" onclick="openNav()"> <button type="button" class="navbar-toggle" style="float:left;top:10px;left:20px;position:absolute;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </span>
            <img src="images/logo.png" class="img-responsive" style="width:50%;margin:0 auto;padding-top:3%;" />
        </div>

        <!-- Gooseyland Play Area Starts -->
        <div class="container" style=" padding:0em 2em;">
            <div class="row">
                <div class="col-lg-12 col-md-4 col-xs-12 col-sm-12">
                    <h1 class="title tit_con" style="letter-spacing:2px;font-weight:thin;font-size:40px;transform:scale(1.2); justify-self: center;"><i>Powered By MoosaaLand</i> </h1>
                    <div class="img-container">

                        <div class="locations">
                            <div class="gooseyland-logo">
                                <img src="images/gooseyland/gooseyland.png" alt="">
                            </div>

                            <!-- Left side: details -->
                            <div class="details">
                                <h2 style="font-family: 'Baloo Bhaina', cursive;">Gooseyland - Ayappakkam </h2>
                                <h3 style="font-family: 'Handlee', cursive;">1st Floor, No.7, Ayappakkam Main Rd,</h3>
                                <h3 style="font-family: 'Handlee', cursive;">MGR Puram West, Chennai,</h3>
                                <h3 style="font-family: 'Handlee', cursive;">Tamilnadu - 600 058.</h3>
                                <h3 style="font-family: 'Handlee', cursive;">Landmark - Above SVM Honda</h3>
                                <h3 style="font-family: 'Handlee', cursive;"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;90030 19459</h3>

                                <!-- <div class="row row_mob">
                                    <h3 style="font-family: 'Handlee', cursive;"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;044 - 48577768</h3>
                                </div> -->
                                <br>
                                <br>
                            </div>

                            <!-- Right side: slider with image -->
                            <div class="slider">
                                <div id="carouselGooseyland" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="images/gooseyland/playareas/playarea_1.jpeg" alt="Gooseyland 1" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="images/gooseyland/playareas/playarea_2.jpeg" alt="Gooseyland 2" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="images/gooseyland/playareas/playarea_3.jpeg" alt="Gooseyland 3" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="images/gooseyland/playareas/playarea_4.jpeg" alt="Gooseyland 4" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="images/gooseyland/playareas/playarea_5.jpeg" alt="Gooseyland 5" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="images/gooseyland/playareas/playarea_6.jpeg" alt="Gooseyland 6" class="img-responsive">
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carouselGooseyland" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carouselGooseyland" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map View Details -->
        <div class="row map_div">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.030131848093!2d80.14158037585835!3d13.097276912108878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52632597496061%3A0xf003e0c116944cf3!2sGooseyland!5e0!3m2!1sen!2sin!4v1747833349662!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>

    <?php include 'support/footer.php'; ?>


    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/moozaland.js"></script>
    <!-- landing page Script -->
    <script>
        $(document).ready(function() {
            $('.popup_overlay').fadeIn(500, function() {
                $('.popup_inner').show();
            });
            $(".times_cls").on('click', function() {
                $('.popup_inner').hide();
                $('.popup_overlay').fadeOut(500);
            });
        });
    </script>
    <!-- End of landing page Script -->
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
            document.getElementById("opnbtn").style.display = "none";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
            document.getElementById("opnbtn").style.display = "block";
        }
    </script>

</body>

</html>