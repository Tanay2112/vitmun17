<?php require_once("includes/session.php");?>
<?php require_once("includes/db_connection.php");?>
<?php require_once("includes/functions.php");?>
<?php    
    $del_id = $_GET['del_id'];
    $name_query = "SELECT * FROM delegates WHERE id = {$del_id} LIMIT 1";
    $name_result = mysqli_query($conn, $name_query);
    confirm_query($name_result);
    $name_title = mysqli_fetch_assoc($name_result);
    $first_name = explode(" ", $name_title['name']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>VITCMUN 2017 | Online Payment</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="VIT chennai inter MUN" />
    <meta name="keywords" content="VIT chennai, MUN, VIT chennai inter MUN" />
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
<body>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-50161037-1', 'wpidiots.com');
        ga('send', 'pageview');
    </script>

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
                              <a href="index.php">
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
                        <h2 class="text-center">Hey <?php echo htmlentities(ucfirst($first_name[0])); ?></h2>

                        <p class="text-center">
                            <strong>"We have closed the online payments as of now, however to pay the delegate fee and confirm your allotment, you can either pay on spot or call us at 9176472987 or 9962416408. The fee is &nbsp;<i class="fa fa-inr"></i> 1300."</strong>                                            
                        </p>

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

</body>   
</html>
<?php
if (isset ($conn)){
    mysqli_close($conn);
}
?>