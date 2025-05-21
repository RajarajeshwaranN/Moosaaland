<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moosaaland | contact us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/registration.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <style>
        .icon-bar {
            background-color: #000;
            color: #000;
        }

        label {
            color: #0087f5;
        }

        @media(max-width:768px) {
            .tit_con {
                transform: scale(1) !important;
                font-size: 56px !important;
            }
            .row_mob {
                padding: 0px 15px;
            }
            .form-section {
                padding: 0px;
                background-image: none !important;
            }
            h2 {
                font-size: 26px;
            }
            .contact-form>.form-group>.form-control {
                border-color: #000;
            }
            label {
                color: #000;
                font-family: 'Handlee', cursive;
            }
            .form-control {
                border-color: #000;
            }
            #captch {
                margin-top: 5px;
            }
            p {
                padding-left: 15px;
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
            .contact-primary {
                padding-bottom: 0px;
            }
        }
    </style>
    <script>
        $(function() {
            $('#example2').calendar({
                type: 'date'
            });
        });
    </script>
</head>

<body>
    <div class="inner_reg hidden-xs hidden-sm">
        <div class="container grid_div">
            <div class="row " style="margin-bottom:3em;">
                <div class="col-lg-9 col-md-6 col-xs-12 col-sm-12">
                    <div class="row" style="margin-top:4em;">
                        <ul class="social_links">
                            <li>
                                <a href="https://www.facebook.com/MOOSAALAND/" target="blank" title="Facebook"><img src="images/facebook.svg" class="img-responsive" style="" /></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/@Moosaa_land" target="blank" title="Twitter"><img src="images/twitter.svg" class="img-responsive" style="" /></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/112473148039869815047" target="blank" title="Google Plus"><img src="images/google-plus.svg" class="img-responsive" style="" /></a>
                            </li>
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
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.php">About Moosaa</a></li>
                                        <li><a href="fun-zone.php">Fun Zone</a></li>
                                        <li><a href="why-moosaaland.php">Why Moosaaland</a></li>
                                        <!--li  ><a href="event-workshop.php">Event &amp; Workshop</a></li-->
                                        <li><a href="parties.php">Parties</a></li>
                                        <li class="active"><a href="contest.php">Contest</a></li>
                                        <li><a href="registration.php">Registration</a></li>
                                            <li><a href="packages.php">Packages</a></li>
                                            <li><a href="play-areas.php">Play-Areas</a></li>
                                            <li><a href="contact-us.php">Contact Us</a></li>
                                            <li><a href="goosyland.php">Powered By Moosaland</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                    <img src="images/logo.png" class="img-responsive img-center" style="width:80%" />
                </div>
            </div>

        </div>

    </div>

    <div class="reg_div" style="margin-top:-1px;padding-top:10px;">
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
                    <a href="contest.php" class="act">Contest</a>
                    <a href="registration.php">Registration</a>
                    <li><a href="play-areas.php">Play-Areas</a></li>
                    <a href="contact-us.php">Contact Us</a>
                    <a href="goosyland.php">Powered By Moosaland</a>
                </div>
            </div>
            <span style="font-size:40px;cursor:pointer;color:#000;" id="opnbtn" onclick="openNav()"> <button type="button" class="navbar-toggle" style="float:left;top:10px;left:20px;position:absolute;" >
                              <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            </span>
            <img src="images/logo.png" class="img-responsive" style="width:50%;margin:0 auto;padding-top:3%;" />
        </div>
        <div class="container reg_heading">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <img src="images/contest-page.png" alt="" style="width:100%;">
                <a href="registration.php" style="width: 18%;display:  block;margin: auto;"><img src="images/register-btn.png" alt="" style="width: 100%;margin:auto;display:block;margin-top: 30px;"></a>
            </div>
        </div>
    </div>


    <?php include'support/footer.php'; ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
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
    <script src="js/moozaland.js"></script>
</body>

</html>