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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
    <script type='text/javascript'>
        function refreshCaptcha() {
            var img = document.images['captchaimg'];
            img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
        }

        function refreshCaptcha1() {
            var img = document.images['captchaimg1'];
            img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
        }
    </script>
</head>

<body>
    <div class="inner_header_contact hidden-xs hidden-sm">
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
                                        <!--li><a href="contest.php">Contest</a></li>
                                        <li><a href="registration.php">Registration</a></li-->
                                        <li><a href="packages.php">Packages</a></li>
                                            <li class="active"><a href="contact-us.php">Contact Us</a></li>
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
                    <a href="contact-us.php" class="act">Contact Us</a>
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
        <div class="container" style=" padding:0em 2em;">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <h1 class="title tit_con" style="letter-spacing:2px;font-weight:thin;font-size:40px;transform:scale(1.2);">Locations</h1>
		    
                    <h2 style="font-family: 'Baloo Bhaina', cursive;">Mogappair Branch</h2>
                    <h3 style="font-family: 'Handlee', cursive;">#1. 1/C1 Kambar Salai,</h3>
                    <h3 style="font-family: 'Handlee', cursive;">Mogappair West, Chennai,</h3>
                    <h3 style="font-family: 'Handlee', cursive;">Tamilnadu - 600 037.</h3>
                    <h3 style="font-family: 'Handlee', cursive;">Landmark - Above KFC</h3>
                    <div class="row row_mob">
                        <h3 style="font-family: 'Handlee', cursive;"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;044 - 48577768</h3>
                    </div>
                    <h2 style="font-family: 'Baloo Bhaina', cursive;">Navallur Branch</h2>
                    <h3 style="font-family: 'Handlee', cursive;">OMR Food Street</h3>
                    <h3 style="font-family: 'Handlee', cursive;">Navallur,Chennai,</h3>
                    <h3 style="font-family: 'Handlee', cursive;">Tamilnadu - 603 103.</h3>
                    <h3 style="font-family: 'Handlee', cursive;">Landmark - Next to AGS Cinemas</h3>
                    <div class="row row_mob">
                        <h3 style="font-family: 'Handlee', cursive;"><i style="font-size:20px;" class="fa fa-envelope fa-sm" aria-hidden="true"></i>&nbsp;contact@moosaaland.com</h3>
                        <h3 style="font-family: 'Handlee', cursive;"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp; 044-4741 2767</h3>
                        
                         <h2 style="font-family: 'Baloo Bhaina', cursive;">Ambattur OT Branch</h2>
                         <h3 style="font-family: 'Handlee', cursive;">No:47 Chakraa Towers,</h3>
                    <h3 style="font-family: 'Handlee', cursive;">2nd Floor, MTH Road,</h3>
                      <h3 style="font-family: 'Handlee', cursive;"> Opp. Bharat Petroleum,</h3>
                     <h3 style="font-family: 'Handlee', cursive;">Ambattur OT, Chennai,</h3>

                    <h3 style="font-family: 'Handlee', cursive;">Tamilnadu - 600 053.</h3>
                   
                        <h3 style="font-family: 'Handlee', cursive;"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp; 044- 4356 7151</h3> 
                        
		     <h2 style="font-family: 'Baloo Bhaina', cursive;">For Franchise Inquiry, Please contact 7299024436 / 7339680190</h2>
                    </div>

                </div>
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                    <div class="form-section">
                        <h3 class="hidden-md hidden-lg hidden-xl text-center footer_text">Get In touch with us !</h3>
                        <form class="contact-form" method="post" action="contact-form-do.php">
                            <div class="form-group">
                                <label for="email">Name:</label>
                                <input type="text" class="form-control" name="name" id="name">
                                <input type="hidden" name="url" value="<?php echo $_SERVER['PHP_SELF'];?>">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Email:</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Phone:</label>
                                <input type="text" class="form-control" name="phone" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Message:</label>
                                <textarea type="text" class="form-control" name="msg" id="message"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Captcha:</label>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                        <img src="captcha/captcha.php?rand=<?php echo rand();?>" id='captchaimg' style="float: left;">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 form-group">
                                        <input id="captcha_code" class="field form-control" name="captcha_code" type="text">
                                    </div>
                                    <p style="font-family:none !important;font-size:16px !important;"> Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</p>
                                    <?php if(isset($msg)){?>
                                    <?php echo $msg;?>
                                    <?php } ?>
                                </div>

                            </div>

                            <button type="submit" class="btn " style="width:auto;height:auto;background-color:#0087f5;color:#fff;border-radius:4px;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Map Section -->

            <div class="row map_div">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d124418.47233845355!2d80.12770684076837!3d12.966907888847077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smoosaa+land!5e0!3m2!1sen!2sin!4v1521795158349" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </div>
    </div>


    <?php include'support/footer.php'; ?>

    <script>
        $(document).ready(function() {
            $('.contact-form').submit(function() {
                var contact_name = $('#name').val();
                var contact_email = $('#email').val();
                var contact_tel = $('#phone').val();
                var contact_msg = $('#msg').val();
                var contact_captcha = $('#captcha_code1').val();
                var name_regex = /^[A-Za-z\s]{1,}[A-Za-z\s]{0,}$/;
                var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                var phone_regex = /^(\+\d{1,3}[- ]?)?\d{6,12}$/;
                if (!contact_name.match(name_regex)) {
                    $('#name').focus();
                    return false;
                } else if (!contact_email.match(email_regex)) {
                    $('#email').focus();
                    return false;
                } else if (!contact_tel.match(phone_regex)) {
                    $('#phone').focus();
                    return false;
                } else if (contact_msg.length < 3 || contact_msg.length > 50) {
                    $('#message').focus();
                    return false;
                } else if (contact_captcha == '' || contact_captcha == null) {
                    $('#captcha_code1').focus();
                    return false;
                } else {
                    return true;
                }
            });
        });
    </script>
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