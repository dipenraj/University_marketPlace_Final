<?php

session_start();

?>

<!doctype html>
<html lang="en">
<!-- this is just comment for the new beginning-->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Goole Font -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">    
    <link rel="stylesheet" href="css/assets/flaticon.css">
    <link rel="stylesheet" href="css/assets/magnific-popup.css">    
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/assets/owl.carousel.css">
    <link rel="stylesheet" href="css/assets/owl.theme.css">     
    <link rel="stylesheet" href="css/assets/animate.css"> 
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="css/assets/slick.css">  
    <!-- Mean Menu-->
    <link rel="stylesheet" href="css/assets/meanmenu.css">
    <!-- main style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/demo.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="header_inner about_page">
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>    
    

    <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
                <a class="navbar-brand" href="index-2.php"><img src="images/logo.png" alt="logo"></a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">
                        <li class="nav-item"><a href="index-2.php" class="nav-link">Home</a>
                            
                        </li>
                        <li class="nav-item"><a href="about.php" class="nav-link active">About</a></li>
                        
                             
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                        <?php

                                                    if(isset($_SESSION['username']))
                                                    {

                                                        
                                                    echo " <li class='nav-item'><a href='signout.php' class='nav-link'>Sign out</a></li>";

                                                    

                                                    }

                                                    else
                                                    {
                                                        echo "<li class='nav-item'><a href='index-3.php' class='nav-link'>Sign In</a></li>";
                                                    }

                                                    ?>
                        
                        <li class="nav-item"><a href="sell.html" class="nav-link">Sell item</a></li>
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
                    
                </div>
            </nav><!-- END NAVBAR -->
        </div> 
    </div>

    <div class="intro_wrapper">
        <div class="container">  
            <div class="row">        
                 <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="intro_text">
                        <h1>About Us</h1>
                        
                    </div>
                </div>              

            </div>
        </div> 
    </div> 
</header> <!-- End nav -->




<section class="unlimited_possibilities">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Say Hello to your new favourite place</h2>
                    <p>Register now and join University students on the University marketplace for all the second hand stuff</p>  
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                 <div class="single_item single_item_first">
                    <div class="icon_wrapper">
                        <i class="flaticon-student"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Make deals within your campus</a></h3> 
                        <p>Now you no need to go outside for your campus needs, Just simply register and get the best of your college life needs</p>                    
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_center">
                    <div class="icon_wrapper">
                        <i class="flaticon-university"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Trusted purchase</a></h3> 
                        <p>Thats an Awesome Part! You are dealing with your college mate or anyone whom you know.</p>                    
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
               <div class="single_item single_item_last">
                <div class="icon_wrapper">
                        <i class="flaticon-diploma"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Multiple Producsts, One Destination</a></h3> 
                        <p>You can sell books, Musical Intruments, Sports equipments anytime</p>
                    </div>   
                </div>
            </div>             
        </div>
    </div>
</section><!-- End Unlimited Possibilities -->








<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Meet the team</h2>
                    <p></p>  
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-6">
                 <div class="single_item single_item_first">
                    <div class="blog-img">
                        <a href="#" title=""><img src="images/blog/blog_.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>Frontend developer/ Team leader</span>  
                        <h3><a href="#" title="">DIPEN RAJ <br></a></h3> 
                                      
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-6">
                <div class="single_item single_item_center">
                     <div class="blog-img">
                        <a href="#" title=""><img src="images/blog/blog_.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>Front-end developer</span>  
                        <h3><a href="#" title="">Harsh Pandav</a></h3> 
                                      
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-6">
               <div class="single_item single_item_last">
                     <div class="blog-img">
                        <a href="#" title=""><img src="images/blog/blog_.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>Back-end developer</span>  
                        <h3><a href="#" title="">Shubham Mourya   </a></h3> 
                                      
                    </div>   
                </div>
            </div>
             <div class="col-12 col-sm-6 col-md-4 col-lg-6">
               <div class="single_item single_item_last">
                     <div class="blog-img">
                        <a href="#" title=""><img src="images/blog/blog_.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>technical writer</span>  
                        <h3><a href="#" title="">Anusha Burla   </a></h3> 
                                      
                    </div>   
                </div>
            </div>
        </div>
    </div>
</section><!-- End Blog  -->


    


<!-- End Testimonial -->






<section class="teamgroup">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-0"> 
                <div class="teamgroup_info_wrapper">
                    
                    
                </div>   
                <div class="teamgroup_info_banner">
                    <img src="" alt="" class="img-fluid">
                </div>  
            </div>
        </div>
    </div>                
</section>



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
                    
                </div>
                
                

                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col">
                        <h3>Useful Links</h3>
                        <ul class="quick_inf0">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="Sell.php">Sell an Item</a></li>
                            <li><a href="index-3.php">Back to Main Page</a></li>
                            
                        </ul>                         
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
                        
                    </div>
                </div>
                 <div class="col-12 col-md-12 col-lg-12">
                    <div class="">
                        <a></a>

                        <br>
                        <br>
                    </div>
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
    
</body>


</html>
