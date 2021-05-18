<?php

session_start();

?>

<!doctype html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">    
    <link rel="stylesheet" href="css/assets/flaticon.css">
    <link rel="stylesheet" href="css/assets/magnific-popup.css">    
    <link rel="stylesheet" href="css/assets/owl.carousel.css">
    <link rel="stylesheet" href="css/assets/owl.theme.css">     
    <link rel="stylesheet" href="css/assets/animate.css"> 
    <link rel="stylesheet" href="css/assets/slick.css">  
    <link rel="stylesheet" href="css/assets/meanmenu.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/demo.css">
    
</head>
<body>
    

<header class="header_inner about_page">
<!-- Preloader -->
<!-- Preloader -->


     
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>    
    

    <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
                <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="logo"></a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">
                        <li class="nav-item"><a href="index-2.php" class="nav-link">Home</a>
                            
                        </li>
                        <li class="nav-item"><a href="about.phpl" class="nav-link">About</a></li>
                        
                             
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="signout.php" class="nav-link">Sign out</a></li>
                        <li class="nav-item"><a href="sell.php" class="nav-link active">Sell item</a></li>
                        <li class="nav-item"><a>
<?php

if(isset($_SESSION['username']))
{

    
echo "<div class='sticky'><p style='font-size:25px;margin-top:10px;margin-left:100px;'>Welcome</style>";
echo " ";
echo " ";
echo  $_SESSION['username'];
echo " ";
echo "</div>";

}

?></a></li>
                    </ul>
                </div>
                <div class="mr-auto search_area ">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><i class="search_btn flaticon-magnifier"></i>
                            <div id="search">
                                <button type="button" class="close">×</button>
                                 <form>
                                     <input type="search" value="" placeholder="Search here...."  required/>
                                 </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav><!-- END NAVBAR -->
        </div> 
    </div>

    <div class="intro_wrapper">
        <div class="container">  
            <div class="row">        
                 <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="intro_text">
                        <h1>Sell an Item !</h1>
                       
                </div>              

            </div>
        </div> 
    </div>

    
</header> <!-- End nav -->







<!--Start Courses Area Section-->
<section class="popular_courses" id="related_courses_wrapper">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="title">
                    <h2>Choose an category</h2>
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div id="related_courses" class="owlCarousel">
                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="C:\wamp64\www\Uni\images\Education.jpg" alt="" class="img-fluid"></a></div>
                           
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="sell_form.php">Education</a></h3>
                                <div class="education_books">If you want to sell items like Books, Novels, Encyclopedia then choose this category.</div>
                            </div>
                            <div class="courses_info">
                                
                                <a href="sell_form.php" class="cart_btn">SELECT</a>
                            </div>
                        </div>
                    </div><!-- Ends: .single courses -->


                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="sell_form.php"><img src="C:\wamp64\www\Uni\images\sports.jpg" alt="" class="img-fluid"></a></div>
                            <div class="purchase_price">
                               
                            </div>
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="sell_form.php">Sports Goods</a></h3>
                                <div class="teachers_name">If you want to sell items like Sports goods, cloths, Gym membership then choose this category.</div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    
                                </ul>
                                <a href="sell_form.php" class="cart_btn">SELECT</a>
                            </div>
                        </div>
                    </div><!-- Ends: .single courses -->

                    <div class="single-courses">
                        <div class="courses_banner_wrapper">
                            <div class="courses_banner"><a href="#"><img src="C:\wamp64\www\Uni\images\Music.jpg" alt="" class="img-fluid"></a></div>
                            
                        </div>
                        <div class="courses_info_wrapper">
                            <div class="courses_title">
                                <h3><a href="#">Musical Intruments</a></h3>
                                <div class="teachers_name">If you want to sell items like Musical instruments like Guitars, Mics or Musica players then choose this category.</div>
                            </div>
                            <div class="courses_info">
                                <ul class="list-unstyled">
                                    <ul class="list-unstyled">
                                    
                                </ul>
                                </ul>
                                <a href="sell_form.php" class="cart_btn">SELECT</a>
                            </div>
                        </div>
                    </div>                     
                        
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->                                       
        </div>

    </div>
</section><!-- ./ End Courses Area section -->


<!-- Footer -->  
<footer class="footer_3">
    <div class="container">
          
        <div class="footer_top">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col footer_intro">
                        <img src="images/logo2.png" alt="" class="f_logo">
                        <p>Say hello to your new favourite thing. Buy and sell University second hand stuffs from the UNi students. Whenever and whereever.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col">
                        <h3></h3>
                                                
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col information">
                        <h3></h3>
                        
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col contact">
                        <h3>Contact Us</h3>
                        <p>Feel free to get in touch us via Phone or send us a message.</p>
                        <div class="contact_info">
                            <span>+000 124 325</span> 
                            <span class="email">info@yourdomain.com</span>
                        </div>
                        <ul class="social_items d-flex list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                        </ul>
                    </div>
                </div>
                 <div class="col-12 col-md-12 col-lg-12">
                    
                 </div>
            </div>
        </div>
    </div>
    <div class="shapes_bg">
        <img src="images/shapes/waves.png" alt="" class="shape_3">        
    </div>    

</footer><!-- End Footer -->
<section id="scroll-top" class="scroll-top">
    <h2 class="disabled">Scroll to top</h2>
    <div class="to-top pos-rtive">
        <a href="#"><i class = "flaticon-right-arrow"></i></a>
    </div>
</section>

    <!-- JavaScript -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>     
    <script src="js/owl.carousel.min.js"></script>   
    <script src="js/slick.min.js"></script>   
    <script src="js/jquery.meanmenu.min.js"></script>    
    <script src="js/wow.min.js"></script> 
    <!-- Counter Script -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/custom.js"></script>   
    
    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <script type="text/javascript" src="js/demo.js"></script>
    <div class="demo-style-switch" id="switch-style">
      
        <div class="switched-options">
            <div class="config-title">
                <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="logo"></a>
                <p>Education Template</p>
                
            </div>
            
</body>


</html>
