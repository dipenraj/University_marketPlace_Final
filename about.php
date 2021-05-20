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
    <title>Eduwise - Education HTML5 Template</title>
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
                <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="logo"></a>
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
                        <h1>About Page</h1>
                        <div class="pages_links">
                            <a href="#" title="">Home</a>
                            <a href="#" title="" class="active">About Page</a>
                        </div>
                    </div>
                </div>              

            </div>
        </div> 
    </div> 
</header> <!-- End nav -->



<section class="login_signup_option">
    <div class="l-modal is-hidden--off-flow js-modal-shopify">
        <div class="l-modal__shadow js-modal-hide"></div>
        <div class="login_popup login_modal_body">
            <div class="Popup_title d-flex justify-content-between">
                <h2 class="hidden">&nbsp;</h2>
                <!-- Nav tabs -->
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12 login_option_btn">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Register</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Login-->
                            <div class="tab-pane fade in show active" id="login" role="tabpanel">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
												<a href="forgot-password.html" title="" class="forget_pass">Forget Password ?</a>
                                            <button type="submit" class="btn btn-default login_btn">Login</button>
                                        </div> 
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="social_login">
                                                <div class="social_items">
                                                    <button class="google_login google">Login Google</button>
                                                    <button class="google_login facebook">Login Facebook</button>
                                                    <button class="google_login twitter">Login Twitter</button>
                                                    <button class="google_login linkdin">Login Linkdin</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade" id="panel2" role="tabpanel">
                                <form action="#" class="register">
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label  class="control-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                            <button type="submit" class="btn btn-default login_btn">Register</button>
                                        </div> 
                                    </div>
                                </form>
                            </div><!--/.Panel 2-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  <!-- End Login Signup Option -->




<section class="about_us">
    <div class="container">            
        <div class="row">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                <div class="about_title">
                    <span>About Us</span>
                    <h2></h2>
                 </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 p-0">
                <div class="banner_about">
                    <img src="" alt="" class="img-fluid">
                 </div>
            </div>
        </div>        
        <div class="row about_content_wrapper">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 p-0">
                <div class="about_banner_down">
                    <img src="" alt="" class="img-fluid">
                 </div>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                <div class="about_content">
                    
                 </div>
            </div>
        </div>
    </div>    
</section>


<!--========={ Popular Courses }========-->
<section class="unlimited_possibilities" id="about_unlimited_possibilities">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Unlimited Possibilities</h2>
                      
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                 <div class="single_item single_item_first">
                    <div class="icon_wrapper">
                        <i class="flaticon-student"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Learn anywhere</a></h3> 
                        <p></p>                    
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_center">
                    <div class="icon_wrapper">
                        <i class="flaticon-university"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Our Mission</a></h3> 
                        <p></p>                    
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
               <div class="single_item single_item_last">
                <div class="icon_wrapper">
                        <i class="flaticon-diploma"></i>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">Diploma Course</a></h3> 
                        <p></p>
                    </div>   
                </div>
            </div>            
            
            
                         
        </div>
    </div>
</section><!-- End Popular Courses -->


<!--========={ Register Area }========-->
<!-- ./ End Register Area section -->



<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Meet the team</h2>
                    <p></p>  
                </div><!-- ends: .section-header -->
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
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
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_center">
                     <div class="blog-img">
                        <a href="#" title=""><img src="images/blog/blog_.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>Harsh Pandav</span>  
                        <h3><a href="#" title="">Front-end developer</a></h3> 
                                      
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
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
             <div class="col-12 col-sm-6 col-md-4 col-lg-4">
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


<!--========={ Our Instructiors }========-->
<section class="our_instructors" id="about_our_instructors">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Meet The Developers</h2>
                    <p></p>  
                </div><!-- ends: .section-header -->
            </div>
            <div class="single-wrappe col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="team-single-item">
                    <figure>
                        <div class="member-img">
                            <div class="teachars_pro">
                                <img src="" alt="member img" class="img-fluid">
                            </div>
                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4><a href="#" title=""></a></h4>
                                <span></span>
                            </div>                            
                        </figcaption>
                    </figure>
                </div>
            </div>
            
            <div class="single-wrapper col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="team-single-item">
                    <figure>
                        <div class="member-img">
                            <div class="teachars_pro">
                                <img src="" alt="member img" class="img-fluid">
                            </div>
                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4><a href="#" title=""></a></h4>
                                <span></span>
                            </div>                            
                        </figcaption>
                    </figure>
                </div>
            </div>
            
            <div class="single-wrapper  col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="team-single-item ">
                    <figure>
                        <div class="member-img">
                            <div class="teachars_pro">
                                <img src="" alt="member img" class="img-fluid">
                            </div>
                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4><a href="#" title=""></a></h4>
                                <span></span>
                            </div>                            
                        </figcaption>
                    </figure>
                </div>
            </div>
            
            <div class="single-wrapper col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="team-single-item">
                    <figure>
                        <div class="member-img">
                            <div class="teachars_pro">
                                <img src="" alt="member img" class="img-fluid">
                            </div>
                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4><a href="#" title=""></a></h4>
                                <span></span>
                            </div>                            
                        </figcaption>
                    </figure>
                </div>
            </div>                    
            <div class="single-wrapper col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="team-single-item">
                    <figure>
                        <div class="member-img">
                            <div class="teachars_pro">
                                <img src="" alt="member img" class="img-fluid">
                            </div>
                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4><a href="#" title=""></a></h4>
                                <span></span>
                            </div>                            
                        </figcaption>
                    </figure>
                </div>
            </div>                    
            <div class="single-wrapper col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="team-single-item">
                    <figure>
                        <div class="member-img">
                            <div class="teachars_pro">
                                <img src="" alt="member img" class="img-fluid">
                            </div>
                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4><a href="#" title=""></a></h4>
                                <span></span>
                            </div>                            
                        </figcaption>
                    </figure>
                </div>
            </div>                    
        </div>
    </div>
</section><!-- ./ End Our Instructiors -->


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
    
</body>


</html>
