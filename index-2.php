<?php

session_start();

?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University marketplace</title>
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
    <link rel="stylesheet" href="css/assets/preloader.css"/>    

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="css/assets/revolution/layers.css">
    <link rel="stylesheet" href="css/assets/revolution/navigation.css">
    <link rel="stylesheet" href="css/assets/revolution/settings.css">    
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
<header class="header_four">
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
                        <li class="nav-item"><a href="index-3.php" class="nav-link active">Home</a>
                           
                        </li>
                        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                             
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="signout.php" class="nav-link">Sign out</a></li>
                        <li class="nav-item"><a href="sell.php" class="nav-link">Sell item</a></li>
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
              
            </nav><!-- END NAVBAR -->
        </div> 
    </div>

    <!--here I deleted the search bar, need to add some more pages as well.-->


    <!--==================
        Slider
    ===================-->
    <div class="rev_slider_wrapper">
        <div id="rev_slider_1" class="rev_slider">
            <ul>
                <li data-index="rs-1706" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <div class="slider-overlay"></div>
                    <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                    <img src="images/banner/banner_1.jpg" alt="Sky" class="rev-slidebg"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption font-lora sfb tp-resizeme letter-space-5 h-p" 
                        data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-200','-280','-250','-200']" 
                        data-fontsize="['20','40','40','28']"
                        data-lineheight="['70','80','70','70']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":400,"to":"o:1;","delay":100,"split":"chars","splitdelay":0.05,"ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

                        style="z-index: 7; color:#fff; font-family:'Rubik', sans-serif; max-width: auto; max-height: auto; white-space: nowrap; font-weight:500;">
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption NotGeneric-Title   tp-resizeme" 
                        id="slide-3045-layer-1" 
                        data-x="['left','center','center','center']" data-hoffset="['250','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-120','-140','-140','-120']" 
                        data-fontsize="['65','120','100','70']"
                        data-lineheight="['70','120','70','70']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 900; white-space: nowrap;text-transform:left;">Welcome to
                    </div>

                    <!-- LAYER NR.3 -->
                    <div class="tp-caption NotGeneric-Title   tp-resizeme" 
                        id="slide-3045-layer-1" 
                        data-x="['left','center','center','center']" data-hoffset="['250','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-40','0','-10','-40']" 
                        data-fontsize="['65','120','100','70']"
                        data-lineheight="['70','120','70','70']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 900; white-space: nowrap;text-transform:left;">University Marketplace
                    </div>

                    <!-- LAYER NR. 4 -->
                    
                </li>

               
            </ul><!-- END SLIDES LIST -->
        </div><!-- END SLIDER CONTAINER -->
    </div><!-- END SLIDER CONTAINER WRAPPER -->
</header> <!--  End header section-->





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







<section class="popular_courses">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Marketplace items</h2>
                    <p>All the students items will be shown here.</p>  
                </div><!-- ends: .section-header -->
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="images/courses/courses_1.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">$15</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">All the class 12 notebooks</a></h3>
                            <div class="teachers_name">seller - <a href="#" title="">John</a></div>
                        </div>
                        <div class="courses_info">
                            
                            <a href="#" class="cart_btn">buy now</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->



            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="images/courses/courses_2.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">$780</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">2015 Dell Laptop</a></h3>
                            <div class="teachers_name">Seller - <a href="#" title="">Denise Wood</a></div>
                        </div>
                        <div class="courses_info">
                            
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="images/courses/courses_3.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">120$</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">Networking management book</a></h3>
                            <div class="teachers_name">seller - <a href="#" title="">Preston Marshall</a></div>
                        </div>
                        <div class="courses_info">
                            
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->


<div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="images/courses/courses_2.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">$780</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">2015 Dell Laptop</a></h3>
                            <div class="teachers_name">Seller - <a href="#" title="">Denise Wood</a></div>
                        </div>
                        <div class="courses_info">
                            
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="images/courses/courses_3.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">120$</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">Networking management notebook 18th edition</a></h3>
                            <div class="teachers_name">seller - <a href="#" title="">Preston Marshall</a></div>
                        </div>
                        <div class="courses_info">
                            
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->


            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="images/courses/courses_2.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">$780</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">2015 Dell Laptop</a></h3>
                            <div class="teachers_name">Seller - <a href="#" title="">Denise Wood</a></div>
                        </div>
                        <div class="courses_info">
                            
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="images/courses/courses_3.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">120$</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">Networking management notebook 18th edition</a></h3>
                            <div class="teachers_name">seller - <a href="#" title="">Preston Marshall</a></div>
                        </div>
                        <div class="courses_info">
                            
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->



            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="images/courses/courses_2.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">$780</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">2015 Dell Laptop</a></h3>
                            <div class="teachers_name">Seller - <a href="#" title="">Denise Wood</a></div>
                        </div>
                        <div class="courses_info">
                            
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="#"><img src="images/courses/courses_3.jpg" alt="" class="img-fluid"></a></div>
                        <div class="purchase_price">
                            <a href="#" class="read_more-btn">120$</a>
                        </div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="#">Networking management notebook 18th edition</a></h3>
                            <div class="teachers_name">seller - <a href="#" title="">Preston Marshall</a></div>
                        </div>
                        <div class="courses_info">
                            
                            <a href="#" class="cart_btn">Add to Cart</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->
            
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
                        <h3>Useful Links</h3>
                        <ul class="quick_inf0">
                            <li><a href="#">Leadereship</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Diversity</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Press</a></li>
                        </ul>                         
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col information">
                        <h3>information</h3>
                        <ul class="quick_inf0">
                            <li><a href="#">Leadereship</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Diversity</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Press</a></li>
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
                        <ul class="social_items d-flex list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                        </ul>
                    </div>
                </div>
                 <div class="col-12 col-md-12 col-lg-12">
                    <div class="">
                        <a></a>>
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
    <!-- Revolution Slider -->
    <script src="js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
    <script src="js/assets/revolution/jquery.themepunch.tools.min.js"></script> 
    <script src="js/jquery.magnific-popup.min.js"></script>     
    <script src="js/owl.carousel.min.js"></script>   
    <script src="js/slick.min.js"></script>   
    <script src="js/jquery.meanmenu.min.js"></script>  
    <!-- Counter Script -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/wow.min.js"></script> 
    <!-- Revolution Extensions -->
    <script src="js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
    <script src="js/assets/revolution/revolution.js"></script>
    <script src="js/custom.js"></script> 


    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <script type="text/javascript" src="js/demo.js"></script>
   
</body>


</html>
