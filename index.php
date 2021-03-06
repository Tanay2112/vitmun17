<?php require_once("includes/session.php");?>
<?php require_once("includes/db_connection.php");?>
<?php require_once("includes/functions.php");?>
<?php    
    
    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));

        $query = "SELECT id FROM delegates WHERE email = '{$email}' LIMIT 1";
        $result = mysqli_query($conn, $query);
        confirm_query($result);
        $title = mysqli_fetch_assoc($result);
        if ($title['id']=="") {
            $nf = "Email ID not found";
        } else {
            $nf = "";
            redirect_to("payment_select.php?del_id=".$title['id']);
        }
    }    
?>
<!DOCTYPE html>
<html>
<head>
    <title>VITCMUN 2017 | Home</title>
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
    <link rel="stylesheet" type="text/css" href="css/glow.css">
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
        <header>

            <div class="splash-image-wrap" id="splash-image-wrap">
                <div class="m-splash-image col-mg-12" id="splash-image" data-0="background-position:center 0px;" data-10000="background-position:center -2000px;">

                    <div class="flexslider flexslider-splash">
                        <ul class="slides">

                            <li class="slide-background">
                                <div class="video-overlay"></div>
                                <video id="video_background" style="width:100%;" class="video-background" src="img/My Movie.mp4" autoplay="autoplay" loop></video>
                                <div class="splash-wrap slider-background">

                                    <div class="splash-content" >


                                        <div class="container">
                                            <div class="col-lg-9 div-centered">                                        
                                                <div class="splash-centering" id = "main">
                                                    <span id="shadowfilter"><img height="10%" width="10%" src="img/small_logo.png"></span>
                                                    <h1>VITCMUN 2017</h1>
                                                    <span><h4 style="color:white;"><strong>10 | 11 | 12 March</strong></h4></span>
                                                    <div class="splash-text">
                                                        <p>
                                                            <strong>Where delegacy ends, war begins.<br>Delegate applications open now.</strong>
                                                        </p>
                                                    </div><!-- splash-text -->
                                                    <strong><h3 style="color:red;"><?php echo $nf; ?></h3></strong>
                                                    <a href="del_app.php" class="btn second-btn"><strong>Delegate Application</strong></a>
                                                    <a href="#" data-toggle="modal" data-target="#pay" class="btn second-btn"><strong>Already applied? Pay the fee here.</strong></a>
                                                </div><!-- splash-centering -->
                                            </div><!-- span12 -->

                                        </div><!-- container -->

                                    </div><!-- splash-title -->
                                </div><!-- splash-wrap -->
                            </li>                      

                        </ul>
                    </div><!-- flexslider -->

                    <div class="arrow-wrap">
                        <div class="bottom-arrow"></div>
                    </div><!-- arrow-wrap -->


                </div><!-- m-splash-image -->
            </div><!-- splash-image-wrap --> 

            <div class="clearfix"></div>
        </header>

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

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="navbar">

                        <ul class="nav navbar-nav navbar-right">
                          <li class="active">
                           <a href="index.php">Home</a>
                       </li>
                       <li><a href="#intro">VITCMUN</a></li>

                       <li><a href="#council">Committees</a></li>
                       <li><a href="#testimonials">Sponsors</a></li>
                       <li><a href="team.html">Team</a></li>                      
                      
                       <li><a href="#contact">Contact Us </a></li>                       
                   </ul>


               </div><!-- /.navbar-collapse -->


           </div><!-- /.container-fluid -->
       </nav>
   </div><!-- m-navbar -->
</div><!-- l-navigation -->

</div><!-- content -->


<div class="l-content-wrap" id="standard-content">

    <section>

        <div class="l-page-section l-section" id="page-section">

            <div class="container">
                <div id="intro" class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">Welcome to VITCMUN</h2>

                        <p class="text-center">
                            "Hello there, are you ready for the exhilarating experience of a United Nations Committee again? VITCMUN is back with an even better set of committees for you to sharpen your skills, and for those who have the sharpest fangs in here, get ready to devour your opponents."                
                        </p>

                    </div><!-- col-lg-12 -->
                </div><!-- row -->

                <div class="separator"></div><!-- separator -->

                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-4 text-center">

                        <img src="img/avatar1.png" alt="icon" class="round-icon"  />
                        <h5>Delegates</h5>                                
                        <p>                                    
                            Your logic is what we have been waiting for so long. Give us thy words and we shall pave your path to glory.                                 
                        </p>

                    </div><!-- col-lg-4 -->

                    <div class="col-lg-4 col-md-4 col-sm-4 text-center">

                        <img src="img/bootstrap.png" alt="icon" class="round-icon"  />                                                                
                        <h5>Diplomacy</h5>                                
                        <p>                                    
                            We look for the cat that “solved” the two monkeys’ fight over the cake. Oh, hello there.
                        </p>

                    </div><!-- col-lg-4 -->

                    <div class="col-lg-4 col-md-4 col-sm-4  text-center">

                        <img src="img/pixelperfect.png" alt="icon" class="round-icon"  />
                        <h5>Deliberation</h5>                                
                        <p>                                    
                            You wait behind the bush, considering your plan of attack. You’re the King of this Jungle.
                        </p>

                    </div><!-- col-lg-4 -->

                </div><!-- row -->

            </div><!-- container -->                    

        </div><!-- l-page-section -->

    </section>


    <!-- WHAT WE DO PARALAX SECTION -->
    <section>

        <div class="l-paralax-section what-we-do-section paralax-section1 l-section"  data-0="background-position:0px 180px" data-10000="background-position: 0px -2000px;"  id="whatwedo">

            <div class="container">
                <h4 class="text-center">What we do?</h4>


                <p class="text-center">
                    One of the biggest MUNs in the country, providing young orators with a platform to compete, challenge and succeed. Pull out your swords and rake on the army. May the force be with you.
                </p>               
                <p>
                    The Debate Society, VIT University, Chennai Campus, is a full-fledged society under the
                    aegis of VIT University, which aims to promote the culture of debating on the campus and provides
                    a platform to bring all the debaters together. We meet up on a weekly basis and conduct debates
                    with an aim of establishing a strong debating culture on campus. The society boasts of over 100
                    active members representing VIT University in various debating competitions across India, such as 
                    Parliamentary Debates, News Hour Debates and Model United Nations (MUN).
                </p>
                <p>
                    We started out as the VITC Debate Society in 2012. The club was formed by a group of
                    debate enthusiasts. Due to the pioneering work of our founders such as Aman Singh (CSE‘14 batch),
                    the club started to grow and is now a full-fledged society of the College. We aim to promote and
                    establish a strong debating culture on campus and to win laurels in such competitions across the globe.
                </p>

            </div><!-- container -->

        </div><!-- l-paralax-section -->


    </section>



    <!-- LATEST POSTS SECTION -->
    <section>

        <div class="l-latest-posts l-section" id="news">

            <div class="container">

                <h4 id="council" class="text-center">Committees</h4>

                <div class="m-heading-border"></div><!-- m-heading-border -->

                <p class="text-center">
                    We bring you the mix of six of the most interesting councils of the United Nations. Each and every issue will be dealt with this March, and you will have the power to make history. Control the fate of the planet with your words at VITCMUN.
                </p>           

                <div class="clearfix"></div><!-- clearfix -->


                <div class="m-posts">

                    <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">

                            <div class="m-news-post">                                                                        
                                <div class="m-image-wrap">                                        
                                    <div class="hover-wrap">
                                        <div class="image-hover">                                            
                                            <div class="categories">
                                                <a href="council_client.php?cid=1">UNSC</a>
                                                <div class="m-heading-border"></div><!-- m-heading-border -->
                                            </div>                              
                                        </div>  <!-- image-hover -->
                                    </div><!-- hover-wrap -->                                    
                                    <img src="img/c1.jpg" alt="latest post image" />                                    
                                </div><!-- m-image-wrap -->

                                <div class="news-content">
                                    <h6>
                                        <a href="council_client.php?cid=1">UNSC</a>
                                    </h6>

                                    <p>
                                        No organization has quite successfully brought together nations of the world to a common platform as the United Nations. The Security Council was formed with the primary responsibility for the maintenance of international peace and security. The Council comprises five permanent members and ten non permanent members (they are elected every two years into the council). The cabinet's resolutions mandate deployment of UN Peacekeepers. 
                                    </p>

                                    <div class="clearfix"></div><!-- clearfix -->
                                </div><!-- news-content -->

                            </div><!-- m-news-post -->                                                                

                        </div><!-- col-lg-4 -->

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">

                            <div class="m-news-post">                                                                        
                                <div class="m-image-wrap">      
                                    <div class="hover-wrap">
                                        <div class="image-hover">                                            
                                            <div class="categories">
                                                <a href="council_client.php?cid=2">UNGA</a>: <a href="#post-popup1">DISEC</a>
                                                <div class="m-heading-border"></div><!-- m-heading-border -->
                                            </div>                               
                                        </div>  <!-- image-hover -->
                                    </div><!-- hover-wrap -->

                                    <img src="img/c2.jpg" alt="latest post image" />                                    
                                </div><!-- m-image-wrap -->

                                <div class="news-content">
                                    <h6>
                                        <a href="council_client.php?cid=2">UNGA DISEC</a>
                                    </h6>

                                    <p>
                                        The First Committee on UNGA is Disarmament and International Security (DISEC) which deals with disarmament, global challenges and threats to peace that affect the international community; and seeks out solutions to the challenges in the international security regime. It considers all disarmament and international security matters within the scope of the Charter or relating to the powers and functions of any other organ of the United Nations.
                                    </p>

                                    <div class="clearfix"></div><!-- clearfix -->                                    
                                </div><!-- news-content -->

                            </div><!-- m-news-post -->   
                        </div><!-- col-lg-4 -->

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">

                            <div class="m-news-post">                                                                        
                                <div class="m-image-wrap">     
                                    <div class="hover-wrap">
                                        <div class="image-hover">                                            
                                            <div class="categories">
                                                <a href="council_client.php?cid=3">UNHRC</a>
                                                <div class="m-heading-border"></div><!-- m-heading-border -->
                                            </div>                                           
                                                                              
                                        </div>  <!-- image-hover -->
                                    </div><!-- hover-wrap -->

                                    <img src="img/c3.jpg" alt="latest post image" />                                    
                                </div><!-- m-image-wrap -->

                                <div class="news-content">
                                    <h6>
                                        <a href="council_client.php?cid=3">UNHRC</a>
                                    </h6>

                                    <p>
                                       The United Nations Human Rights Council (UNHRC) is the primary organ of the UNGA, responsible for promoting and protecting human rights around the world. The concerns of UNHRC also concentrate on important thematic human rights issues such as freedom of association, freedom of expression, freedom of belief and religion, women’s rights, LGBT rights and the rights of racial and ethnic minorities.

                                    <div class="clearfix"></div><!-- clearfix -->                                    
                                </div><!-- news-content -->

                                <!-- post popup content -->
                                
                            </div><!-- m-news-post -->                                                                

                        </div><!-- col-lg-4 -->

                        

                    </div><!-- row -->




                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">

                            <div class="m-news-post">                                                                        
                                <div class="m-image-wrap">                                        
                                    <div class="hover-wrap">
                                        <div class="image-hover">                                            
                                            <div class="categories">
                                                <a href="council_client.php?cid=4">IAEA</a>
                                                <div class="m-heading-border"></div><!-- m-heading-border -->
                                            </div>                                 
                                        </div>  <!-- image-hover -->
                                    </div><!-- hover-wrap -->                         
                                    <img src="img/c4.jpg" alt="latest post image" />                                    
                                </div><!-- m-image-wrap -->

                                <div class="news-content">
                                    <h6>
                                        <a href="council_client.php?cid=4">IAEA</a>
                                    </h6>

                                    <p>
                                        The International Atomic Energy Agency (IAEA) is the world's central intergovernmental forum for scientific and technical co-operation in the nuclear field. It works for the safe, secure and peaceful uses of nuclear science and technology, contributing to international peace and security and the United Nations' Sustainable Development Goals.
                                    </p>

                                    <div class="clearfix"></div><!-- clearfix -->                                    
                                </div><!-- news-content -->

                            </div><!-- m-news-post -->                                                                

                            <!-- post popup content -->                            

                        </div><!-- col-lg-4 -->

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">

                            <div class="m-news-post">                                                                        
                                <div class="m-image-wrap">                                        
                                    <div class="hover-wrap">
                                        <div class="image-hover">                                            
                                            <div class="categories">
                                                <a href="council_client.php?cid=5">OSCE</a>
                                                <div class="m-heading-border"></div><!-- m-heading-border -->
                                            </div>                                
                                        </div>  <!-- image-hover -->
                                    </div><!-- hover-wrap -->                                     
                                    <img src="img/c5.jpg" alt="latest post image" />                                    
                                </div><!-- m-image-wrap -->

                                <div class="news-content">
                                    <h6>
                                        <a href="council_client.php?cid=5">OSCE</a>
                                    </h6>

                                    <p>
                                        The Organization for Security and Co-operation in Europe (OSCE) is the world's largest security-oriented intergovernmental organization. Its mandate includes issues such as arms control and the promotion of human rights, freedom of the press and fair elections. The OSCE is concerned with early warning, conflict prevention, crisis management, and post-conflict rehabilitation. 
                                    </p>

                                    <div class="clearfix"></div><!-- clearfix -->                                    
                                </div><!-- news-content -->

                            </div><!-- m-news-post -->                                                                

                        </div><!-- col-lg-4 -->

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">

                            <div class="m-news-post">                                                                        
                                <div class="m-image-wrap">                                        
                                    <div class="hover-wrap">
                                        <div class="image-hover">                                            
                                            <div class="categories">
                                                <a href="council_client.php?cid=6">Trilateral Commission</a>
                                                <div class="m-heading-border"></div><!-- m-heading-border -->
                                            </div>                       
                                        </div>  <!-- image-hover -->
                                    </div><!-- hover-wrap -->                                    
                                    <img src="img/c6.jpg" alt="latest post image" />                                    
                                </div><!-- m-image-wrap -->

                                <div class="news-content">
                                    <h6>
                                        <a href="council_client.php?cid=6">Trilateral Commission</a>
                                    </h6>

                                    <p>
                                        The Trilateral Commission was originally created in 1973 to bring together experienced leaders within the private sector to discuss issues of global concern between the Europe, North America and Asia. Thought to be an extension of the Bilderberg Commission, it extends to transatlantic cooperation; the Trilateral Commission though, is not as secretive of all its proceedings.
                                    </p>

                                    <div class="clearfix"></div><!-- clearfix -->
                                    
                                </div><!-- news-content -->

                            </div><!-- m-news-post -->            

                            <!-- post popup content -->
                        </div><!-- col-lg-4 -->

                    </div><!-- row -->

                </div><!-- m-posts -->

            </div><!-- container -->

        </div><!-- l-latest-posts -->


    </section>




    <!-- TESTIMONIALS PARALAX SECTION -->
   <section>

        <div class="l-paralax-section testimonials-paralax paralax-section2 l-section"  data-0="background-position:0px 800px;" data-10000="background-position:0px -2000px;"  id="testimonials">

            <h1 class="text-center">Sponsors</h1><br><br>
            <div class="flexslider-testimonials flexslider">
                <ul class="slides">
                    <li class="text-center">
                        <div class="container opacity">
                            <div class="col-lg-4">
                                <img src="img/dunkin.png" style="height:60%; width:60%; " alt="avatar" />                                
                            </div>
                            <div class="col-lg-4">
                                <img src="img/ramco.png" style="height:40%; width:40%; " alt="avatar" />                                
                            </div>
                            <div class="col-lg-4">
                                <img src="img/meatneat.png" style="height:35%; width:35%; " alt="avatar" />                                
                            </div>
                        </div>
                    </li>

                    <li class="text-center">
                        <div class="container opacity">
                            <div class="col-lg-4">
                                <img src="img/frenchloaf.png" style="height:40%; width:40%; " alt="avatar" />                                
                            </div>
                            <div class="col-lg-4">
                                <img src="img/decor.png" style="height:50%; width:50%; " alt="avatar" />                                
                            </div>
                            <div class="col-lg-4">
                                <img src="img/creamstones.png" style="height:35%; width:35%; " alt="avatar" />                                
                            </div>
                        </div>
                    </li>
                    <li class="text-center">
                        <div class="container opacity">
                            <div class="col-lg-6">
                                <img src="img/subway.png" style="height:50%; width:50%; " alt="avatar" />                                
                            </div>
                            <div class="col-lg-6">
                                <img src="img/lenskart.png" style="height:35%; width:35%; " alt="avatar" />                                
                            </div>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </div>
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

<div class="modal fade" id="pay" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Please enter your registered email ID to go to the payment page.</h4>
                </div>
                <div class="modal-body">
                    <p>                            
                        <form action="index.php" method="post" role="form">
                            <div class="form-group">
                                <label>Enter your registered Email ID here</label>
                                <strong>
                                    <input style="background-color:#d9dde2; color:black;" type="email" name="email" class="form-control" required>
                                </strong>
                            </div>              
                            <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-success">&nbsp; 
                            <button type="reset" class="btn btn-lg btn-warning">Reset</button>
                        </form>                               
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>          
        </div>
    </div>


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