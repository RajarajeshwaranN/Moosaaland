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
    <script src="js/jquery-1.9.1.min.js"></script>
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
                                        <!--li><a href="contest.php">Contest</a></li>
                                        <li><a href="registration.php">Registration</a></li-->
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
                    <a href="contact-us.php" class="act">Contact Us</a>
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
                <h1>Artocrazy 2018</h1>
                <p>Scintilating Screenless Fun</p>
            </div>
        </div>
        <div class="container" style=" padding:0em 2em;">
            <div class="row">
                <div class="col-lg-5 col-md-4 col-xs-12 col-sm-12 reg_form">
                    <h3 class="reg_head">For Registration</h3>
                    <form action="function/registration-form-do.php" method="post" name="careerform" enctype="multipart/form-data" onsubmit="return careervalidate();" class="contact-form regisrtation-form">
                        <div class="form-group">
                            <input type="hidden" value="<?php echo mt_rand(100000, 999999);?>" id="rand" name="rand" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Kid Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="parant" id="parant" placeholder="Parent Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Id">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Mobile">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="fb" id="fb" placeholder="Facebook">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Parent Occupation">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="company" id="company" placeholder="Company - Work for">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="residence" id="residence" placeholder="Residence Area">
                        </div>
                        <div class="coc-form">
                            <div class="coc-block-row">
                                <div class="coc-block">
                                    <input class="coc-input" type="date" name="dateofbirth" id="dateofbirth" placeholder="mm/dd/yyyy" onchange="submitBday()">
                                    <span style="padding: 5px;display:  block;">Kid's DOB</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group drop_arrow">
                            <select name="gender" id="gender">
                               <option value="0">Kid’s Gender</option>
                               <option value="Male">Male</option>
                               <option value="Female">Female</option>
                           </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="school" id="school" placeholder="School Name">
                        </div>
                        <div class="form-group drop_arrow">
                            <select name="grade" id="grade">
                               <option value="0">Grade</option>
                               <option value="Nursery">Nursery</option>
                               <option value="LKG">LKG</option>
                               <option value="UKG">UKG</option>
                               <option value="Grade 1">Grade 1</option>
                               <option value="Grade 2">Grade 2</option>
                               <option value="Grade 3">Grade 3</option>
                               <option value="Grade 4">Grade 4</option>
                               <option value="Grade 5">Grade 5</option>
                               <option value="Grade 6">Grade 6</option>
                           </select>
                        </div>
                        <div class="file-placeholder" style="height:53px;">
                            <label></label>
                            <input type="file" class="fileUpload" name="age_proof" id="age_proof">
                            <div class="file-browse">
                                <span class="browse"><img src="images/upload.png" alt=""></span>
                                <span class="file-browse-txt">Upload child’s Student ID as Age Proof</span>
                            </div>
                            <span style="font-size:13px;font-family: 'Handlee', cursive;color:#833b1e;">choose .docx,.pdf,.doc format</span>
                        </div>
                        <div class="form-group drop_arrow">
                            <select name="contest" id="contest">
                           <option value="0">Contest</option>
                           <option value="Cute Video / Audio" id="one">Cute Video / Audio</option>
                           <option value="Coloring" id="two">Coloring</option>
                           <option value="Puzzle" id="three">Puzzle</option>
                           <option value="Drawing" id="four">Drawing</option>
                           <option value="Story Writing" id="five">Story Writing</option>
                           <option value="Quiz" id="six">Quiz</option>
                       </select>
                        </div>
                        <button type="submit" name="submit" class="submit btn" style="width:auto;height:auto;background-color:#833b1e;color:#f9b233;border-radius:4px;">Join The Contest</button>
                    </form>
                </div>
                <div class="col-lg-7 col-md-8 col-xs-12 col-sm-12 contest">
                    <h1 class="reg_head">Groups &amp; Contest</h1>
                    <img src="images/contest.png" alt="contest">
                    <p>For detail rules &amp; condition, please <a href="javascript:;">click here</a></p>
                </div>
            </div>
        </div>
        <div class="container" style=" padding:20px 2em 50px 2em;">
            <div class="disclimer">
                <div>
                    <a href="https://www.facebook.com/moosaaland/" target="_blank"><img src="images/like.png" alt="">
                    <p> like our event page in FB to stay tune and get more alerts. </p></a>
                </div>
                <div>
                    <p>Disclaimer : MOOSAA LAND will not share the information to any external third party and will be kept confidential.</p>
                </div>
            </div>
        </div>
    </div>


    <?php include'support/footer.php'; ?>

    <script>
        $(document).ready(function() {
            $('.regisrtation-form').submit(function() {
                var name = $('#name').val();
                var parant = $('#parant').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var occupation = $('#occupation').val();
                var company = $('#company').val();
                var residence = $('#residence').val();
                var dateofbirth = $('#dateofbirth').val();
                var gender = $('#gender').val();
                var school = $('#school').val();
                var grade = $('#grade').val();
                var age_proof = $('#age_proof').val();
                var contest = $('#contest').val();
                var fname_regex = /^[A-Za-z\s\.]{1,}[A-Za-z\s]{0,}$/;
                var name_regex = /^[A-Za-z\s]{1,}[A-Za-z\s]{0,}$/;
                var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                var phone_regex = /^(\+\d{1,3}[- ]?)?\d{6,12}$/;
                if (!name.match(fname_regex)) {
                    alert('Enter a valid name');
                    return false;
                } else if (!parant.match(name_regex)) {
                    alert('Enter a valid parent name');
                    return false;
                } else if (!email.match(email_regex)) {
                    alert('Enter a valid name');
                    return false;
                } else if (!phone.match(phone_regex)) {
                    alert('Enter a valid phone number');
                    return false;
                } else if (!occupation.match(name_regex)) {
                    alert('Enter a valid Occupation');
                    return false;
                } else if (!company.match(name_regex)) {
                    alert('Enter a valid Company Name');
                    return false;
                } else if (!residence.match(name_regex)) {
                    alert('Enter a valid residence area');
                    return false;
                } else if (dateofbirth == "") {
                    alert('Enter a valid Date of birth');
                    return false;
                } else if (gender == 0) {
                    alert('Enter a valid Gender');
                    return false;
                } else if (!school.match(name_regex)) {
                    alert('Enter a valid School');
                    return false;
                } else if (grade == 0) {
                    alert('Enter a valid Grade');
                    return false;
                } else if (age_proof == "") {
                    alert('Upload a age proof');
                    return false;
                } else if (contest == 0) {
                    alert('Enter a valid contest');
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
    <script>
        var pmfFileupload = {
            /* 
               Pretty mother fuckin File Upload input
            */
            init: function() {
                this.cacheDom();
                this.events();
            },
            cacheDom: function() {
                this.$filePlaceholder = $('.file-placeholder');
                this.$filelabel = this.$filePlaceholder.find('label');
                this.$fileUpload = this.$filePlaceholder.find('.fileUpload');
                this.$fileBrowseTxt = this.$filePlaceholder.find('.file-browse-txt');
            },
            events: function() {
                this.$fileUpload.on('change', this.getFileName.bind(this));
            },
            getFileName: function() {
                this.newVal = this.$fileUpload.val();
                if (this.newVal !== "") {
                    this.$fileBrowseTxt.text(this.newVal).addClass('hasValue');
                } else {
                    this.$fileBrowseTxt.text("Select a file...");
                }
            }
        };

        $(document).ready(function() {
            pmfFileupload.init();
        });
    </script>
    <script>
        $(document).ready(function() {
            var Nursery = ["Contest", "Cute Video / Audio"];
            var LKG = ["Contest", "Coloring", "Puzzle"];
            var UKG = ["Contest", "Coloring", "Puzzle"];
            var Gradeone = ["Contest", "Puzzle", "Drawing"];
            var Gradetwo = ["Contest", "Puzzle", "Drawing"];
            var Gradethree = ["Contest", "Drawing", "Story Writing"];
            var Gradefour = ["Contest", "Drawing", "Story Writing"];
            var Gradefive = ["Contest", "Quiz"];
            var Gradesix = ["Contest", "Quiz"];
            $("#grade").change(function() {
                var StateSelected = $(this).val();
                var optionsList;
                var htmlString = "";
                switch (StateSelected) {
                    case "Nursery":
                        optionsList = Nursery;
                        break;
                    case "LKG":
                        optionsList = LKG;
                        break;
                    case "UKG":
                        optionsList = UKG;
                        break;
                    case "Grade 1":
                        optionsList = Gradeone;
                        break;
                    case "Grade 2":
                        optionsList = Gradetwo;
                        break;
                    case "Grade 3":
                        optionsList = Gradethree;
                        break;
                    case "Grade 4":
                        optionsList = Gradefour;
                        break;
                    case "Grade 5":
                        optionsList = Gradefive;
                        break;
                    case "Grade 6":
                        optionsList = Gradesix;
                        break;
                }
                for (var i = 0; i < optionsList.length; i++) {
                    htmlString = htmlString + "<option value='" + optionsList[i] + "'>" + optionsList[i] + "</option>";
                }
                $("#contest").html(htmlString);

            });
        });
    </script>
    <script src="js/moozaland.js"></script>
</body>

</html>