<?php require_once("includes/session.php");?>
<?php require_once("includes/db_connection.php");?>
<?php require_once("includes/functions.php");?>
<?php
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['name']));
        $dob = mysqli_real_escape_string($conn, htmlspecialchars($_POST['dob']));
        $job = mysqli_real_escape_string($conn, htmlspecialchars($_POST['job']));
        $school = mysqli_real_escape_string($conn, htmlspecialchars($_POST['school']));
        $phno = mysqli_real_escape_string($conn, htmlspecialchars($_POST['phno']));
        $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
        $nodel = mysqli_real_escape_string($conn, htmlspecialchars($_POST['nodel']));
        $del_details = mysqli_real_escape_string($conn, htmlspecialchars($_POST['del_details']));
        $noeb = mysqli_real_escape_string($conn, htmlspecialchars($_POST['noeb']));
        $eb_details = mysqli_real_escape_string($conn, htmlspecialchars($_POST['eb_details']));
        $sec_details = mysqli_real_escape_string($conn, htmlspecialchars($_POST['sec_details']));
        $council_ch1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['council_ch1']));
        $agenda1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['agenda1']));
        $agenda1_details = mysqli_real_escape_string($conn, htmlspecialchars($_POST['agenda1_details']));
        $council_ch2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['council_ch2']));
        $agenda2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['agenda2']));
        $agenda2_details = mysqli_real_escape_string($conn, htmlspecialchars($_POST['agenda2_details']));
        $council_ch3 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['council_ch3']));
        $posit = mysqli_real_escape_string($conn, htmlspecialchars($_POST['posit']));
        $eb_caps1 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['eb_caps1']));
        $alt_post = mysqli_real_escape_string($conn, htmlspecialchars($_POST['alt_post']));
        $eb_caps2 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['eb_caps2']));
        $eb_caps3 = mysqli_real_escape_string($conn, htmlspecialchars($_POST['eb_caps3']));
        $hotel = mysqli_real_escape_string($conn, htmlspecialchars($_POST['hotel']));
        $q_back = mysqli_real_escape_string($conn, htmlspecialchars($_POST['q_back']));
        $pro_pic = 1;
        $target_dir = "img/eb_pics/";
        $target_file = $target_dir . basename($_FILES["pro_pic"]["name"]);                
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["pro_pic"]["tmp_name"],"img/eb_pics/$phno.jpg");

        $query = "INSERT INTO eb_apps (name, dob, job, school, phno, email, nodel, del_details, noeb, eb_details, sec_details, council_ch1, agenda1, agenda1_details,council_ch2, agenda2, agenda2_details, council_ch3, posit, eb_caps1, alt_post, eb_caps2, eb_caps3, hotel, q_back, pro_pic)";
        $query .= " VALUES ('{$name}', '{$dob}', '{$job}', '{$school}', '{$phno}', '{$email}', {$nodel}, '{$del_details}', {$noeb}, '{$eb_details}', '{$sec_details}', '{$council_ch1}', '{$agenda1}', '{$agenda1_details}','{$council_ch2}', '{$agenda2}', '{$agenda2_details}', '{$council_ch3}', '{$posit}', '{$eb_caps1}', '{$alt_post}', '{$eb_caps2}', '{$eb_caps3}', '{$hotel}', '{$q_back}', {$pro_pic})";
        $result = mysqli_query($conn, $query);
        if ($result) {
            redirect_to("eb_confirm.php");
            $stsc = "";
        } else {
            $stsc = "Something went wrong! Please try again and see that you are using Google Chrome for this application. In case of any technical failure or for any technical assistance, please call 9962416408.";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>VITCMUN 2017 | EB Application</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="VIT chennai MUN applications" />
    <meta name="keywords" content="VIT chennai, MUN, VIT chennai MUN" />
    <meta name="author" content="Prashant Bhardwaj" />
    <link rel="shortcut icon" href="img/favicon.ico">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="inc/js/jquery-1.11.0.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="inc/bootstrap/css/bootstrap-theme.min.css">

    <!-- Bootstrap reset -->
    <link rel="stylesheet" href="inc/bootstrap/css/bootstrap-reset.css">

    <!-- flexslider load -->        
    <link rel="stylesheet" href="inc/flexslider/flexslider.css" type="text/css">        

    <!-- easy pie chart -->
    <link rel="stylesheet" type="text/css" href="inc/easy-pie-chart/demo/style.css">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="inc/magnific/dist/magnific-popup.css"> 

    <!-- YTP -->
    <link href="inc/YTPlayer/css/YTPlayer.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css">        
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors.css">


</head>
<body style="display:none;">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-50161037-1', 'wpidiots.com');
        ga('send', 'pageview');
    </script>
    <style type="text/css">
        body {
            margin-top: -10px;
        }
    </style>

    <div class="page-loader"></div>

    <div class="l-wrapper">
        <!-- HEADER -->
        <div class="menu-wrap">
            <!-- NAVIGATION -->
            <div class="l-navigation-wrap menu-padd" id="l-navigation">
                <div class="m-navbar container">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">

                            <div class="l-logo">
                              <a href="index.html">
                                  <img height="35%" width="35%" src="img/small_logo.png"> <span style="color:white;"><b>VITCMUN 2017</b></span>
                              </a>
                          </div><!-- l-logo -->



                          <!-- Brand and toggle get grouped for better mobile display -->
                          <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                          </button>                                
                      </div>
                      <div class="collapse navbar-collapse" id="navbar">

                        <ul class="nav navbar-nav navbar-right">
                        <li >
                           <a href="index.html">Home</a>
                       </li>
                       <li><a href="index.html#intro">VITCMUN</a></li>

                       <li><a href="index.html#council">Committees</a></li>
                       <li><a href="team.html">Team</a></li>                      
                      
                       <li><a href="index.html#contact">Contact Us </a></li>
                       
                   </ul>


               </div>
           </div><!-- /.container-fluid -->
       </nav>
   </div><!-- m-navbar -->
</div><!-- l-navigation -->

</div><!-- content -->


<div class="l-content-wrap" id="standard-content">

    <section>

        <div class="l-page-section l-section" id="page-section">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12"><br>
                        <h2 class="text-center">Executive Board Application</h2>
                            <h5 style="color:red;"><?php echo $stsc; ?></h5>
                            <center><h6 style="color:red;"><strong>Please do not use FireFox to fill this application.</strong></h6></center>
                        <div>
                            <form role="form" action="eb_app.php" method="POST" enctype="multipart/form-data">
                                 <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" style="color: white;" name="name" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Date of birth</label>
                                    <input type="date" style="color: white;" name="dob" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Current occupation</label>
                                    <input type="text" style="color: white;" name="job" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Educational Institution studying in/graduated from</label>
                                    <input type="text" style="color: white;" name="school" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="number" style="color: white;" name="phno" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" style="color: white;" name="email" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Number of Model UN conferences attended as a delegate</label>
                                    <input type="number" style="color: white;" name="nodel" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>List the Model UN conferences attended as a delegate according to the format given below</label>
                                    <textarea style="color: white;" placeholder="No. - Name - Institution - Council - Country/Character Allotted - Award won (if any)" class="form-control" rows="3" name="del_details" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Number of Model UN conferences attended as an Executive Board member.</label>
                                    <input type="number" style="color: white;" name="noeb" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>
                                        List the Model UN conferences attended as an Executive Board member according to the

format given below.</label>
                                    <textarea style="color: white;" placeholder="No. – Name – Institution – Council – Position" class="form-control" rows="3" name="eb_details" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>List below any Model UN conferences organised as a member of the Secretariat.</label>
                                    <textarea style="color: white;" placeholder="No. – Name – Institution – Position" class="form-control" rows="3" name="sec_details" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>State your first preference of council:</label>
                                    <select style="color: white;" name="council_ch1" required class="form-control">
                                        <option value="United Nations Security Council">United Nations Security Council</option>
                                        <option value="United Nations General Assembly – Disarmament and International Security Council">United Nations General Assembly – Disarmament and International Security Council</option>
                                        <option value="United Nations Human Rights Council">United Nations Human Rights Council</option>
                                        <option value="International Atomic Energy Agency">International Atomic Energy Agency</option>
                                        <option value="Organisation for Security and Cooperation in Europe">Organisation for Security &amp; Cooperation in Europe</option>
                                        <option value="The Trilateral Commission">The Trilateral Commission</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kindly suggest two agendas you would like to see discussed in this council.</label>
                                    <textarea style="color: white;" class="form-control" rows="3" name="agenda1" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Briefly explain any one of these agendas and your reasons as to why you think it must be

discussed.</label>
                                    <textarea style="color: white;" class="form-control" rows="3" name="agenda1_details" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>State your second prefernce of council:</label>
                                    <select style="color: white;" name="council_ch2" required class="form-control">
                                        <option value="United Nations Security Council">United Nations Security Council</option>
                                        <option value="United Nations General Assembly – Disarmament and International Security Council">United Nations General Assembly – Disarmament and International Security Council</option>
                                        <option value="United Nations Human Rights Council">United Nations Human Rights Council</option>
                                        <option value="International Atomic Energy Agency">International Atomic Energy Agency</option>
                                        <option value="Organisation for Security and Cooperation in Europe">Organisation for Security &amp; Cooperation in Europe</option>
                                        <option value="The Trilateral Commission">The Trilateral Commission</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kindly suggest two agendas you would like to see discussed in this council.</label>
                                    <textarea style="color: white;" class="form-control" rows="3" name="agenda2" required></textarea>
                                <div class="form-group">
                                    <label>Briefly explain any one of these agendas and your reasons as to why you think it must be

discussed.</label>
                                    <textarea style="color: white;" class="form-control" rows="3" name="agenda2_details" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>State your third prefernce of council:</label>
                                    <select style="color: white;" name="council_ch3" required class="form-control">
                                        <option value="United Nations Security Council">United Nations Security Council</option>
                                        <option value="United Nations General Assembly – Disarmament and International Security Council">United Nations General Assembly – Disarmament and International Security Council</option>
                                        <option value="United Nations Human Rights Council">United Nations Human Rights Council</option>
                                        <option value="International Atomic Energy Agency">International Atomic Energy Agency</option>
                                        <option value="Organisation for Security and Cooperation in Europe">Organisation for Security &amp; Cooperation in Europe</option>
                                        <option value="The Trilateral Commission">The Trilateral Commission</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Which post would you like to apply for?</label>
                                    <select style="color: white;" name="posit" required class="form-control">
                                        <option value="Chairperson/President or equivalent">Chairperson/President or equivalent</option>
                                        <option value="Vice-chairperson/Vice-president or equivalent">Vice-chairperson/Vice- president or equivalent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Briefly explain why you think you merit the post you applied for and what you will do in your

capacity ensure a high standard of debate and moderation.</label>
                                    <textarea style="color: white;" class="form-control" rows="3" name="eb_caps1" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>If not given Chairperson/President or an equivalent post, would you be open to taking up

Vice-chairperson/Vice- president or an equivalent post?</label>
                                    <select style="color: white;" name="alt_post" required class="form-control">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                        <option value="Maybe">Maybe</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Briefly outline your judging criteria (Kindly list any particular parameters you look at when

there are tied scores).</label>
                                    <textarea style="color: white;" class="form-control" rows="3" name="eb_caps2" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Would you be willing to share your grading sheets with the Secretariat at the end of each

day?</label>
                                    <select style="color: white;" class="form-control" name="eb_caps3" required>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                        <option value="Maybe">Maybe</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Would you be requiring accommodation?</label>
                                    <select style="color: white;" class="form-control" name="hotel" required>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                        <option value="Maybe">Maybe</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Do you have any other queries for us at this time?</label>
                                    <textarea style="color: white;" class="form-control" rows="3" name="q_back" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Upload your picture.</label>
                                    <input type="file" id="myFile" style="color: white;" class="form-control" name="pro_pic" required>
                                </div><br>
                                <input type="submit" id="btt" class="btn btn-success col-lg-12" value="Submit" name="submit">
                            </form>             
                        </div>

                    </div><!-- col-lg-12 -->
                </div><!-- row -->

                <div class="separator"></div><!-- separator -->               

            </div><!-- container -->                    

        </div><!-- l-page-section -->

    </section>

</div><!-- l-paralax-section -->

</section>
<section>

    <div class="l-contactus-section l-section">

        <div class="container">


            <div id="contact" class="row">

                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">

                    <h6>Contact Us</h6>

                    <ul>
                        <li class="opacity">
                            <span style="display:block;">The Debate Society VIT UNIVERSITY , Chennai Campus, Vandalur-Kelambakkam Road, Chennai, Tamil Nadu 600127</span>
                        </li>
                         <li class="opacity"><img src="img/phone.png" alt="phone image" />+91 9176472987, +91 9962416408</li>
                        <li class="opacity"><img src="img/mail.png" alt="mail image"/> vitcmun2017@gmail.com</li>
                        <li class="opacity"><img src="img/magnifier.png" alt="magnifier image"/> facebook.com/vitcmun</li>
                    </ul>

                </div><!-- col-lg-5 -->

                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 form-wrapper opacity">
                    <center><br>
                        <img style="height:100%; width:40%;" src="img/VITCMUN2017.png">
                    </center>
                </div><!-- col-lg-7 -->

            </div><!-- row -->



        </div><!-- container -->


        <div class="l-copyright text-center">

            <div class="container">
                <div class="m-social-icons">            
                    <a href="https://www.facebook.com/groups/1495550694059659/?ref=br_tf"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>                    
                </div><!--m-social-icons-->


            </div><!-- container -->

        </div><!-- l-copyright -->

    </div><!-- l-contactus-section -->

</section>

</div><!-- l-content-wrap -->

</div><!-- l-wrapper -->


<!-- LOAD SCRIPTS -->

<!-- Latest compiled and minified JavaScript -->
<script src="inc/bootstrap/js/bootstrap.min.js"></script>

<!-- flexslider -->
<script src="inc/flexslider/jquery.flexslider.js"></script>

<!-- skrollr -->
<script type="text/javascript" src="inc/skrollr/dist/skrollr.min.js"></script>

<!-- easy pie chart -->
<script src="inc/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

<!-- isotope -->
<script src="inc/isotope/jquery.isotope.min.js" ></script>
<script src="inc/isotope/jquery.isotope.sloppy-masonry.js" ></script>

<!-- nice scroll -->
<script src="inc/nice-scroll/jquery.nicescroll.min.js" ></script>

<!-- Magnific Popup core JS file -->
<script src="inc/magnific/dist/jquery.magnific-popup.js"></script> 

<!-- Waypoints -->
<script src="inc/waypoints/waypoints.min.js"></script>

<!-- YTP -->
<script type="text/javascript" src="inc/YTPlayer/inc/jquery.mb.YTPlayer.js"></script>

<!-- TWITTER SCRIPT -->
<script type="text/javascript" charset="utf-8" src="inc/tweet/twitter/jquery.tweet.js"></script>

<!-- contact form checker -->
<script src="inc/form-validator/dist/jquery.validate.js"></script>

<!-- script calling -->
<script src="inc/js/common.js"></script>        
<script type="text/javascript">
    $('#myFile').bind('change', function() {
        //this.files[0].size gets the size of your file.
        var sz = (this.files[0].size);
        if (sz>300000) {
            alert('File size too large, please upload an image of size less than or equal to 300 Kilobytes.');
            document.getElementById("btt").disabled = true;
        } else {
            document.getElementById("btt").disabled = false;
        }
    });
</script>

</body>   
</html>
<?php
if (isset ($conn)){
    mysqli_close($conn);
}
?>