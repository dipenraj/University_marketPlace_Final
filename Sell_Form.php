<?php

session_start();


?>

<!--Hi this is dipen-->


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
                        <li class="nav-item"><a href="index-3.php" class="nav-link">Home</a>
                           
                        </li>
                        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                             
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
                        <li class="nav-item"><a href="sell.php" class="nav-link active">Sell item</a></li>
                        <li class="nav-item"><a>
<?php

if(isset($_SESSION['username']))
{

    
echo "<div class='sticky'><p style='font-size:25px;margin-top:10px;margin-left:100px;'>Welcome";
echo " ";
echo " ";
echo  $_SESSION['username'];
echo " </p></style>";
echo "</div>";

}

?></a></li>
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
                        <h1>Sell an Item!  </h1>
                       
                </div>              

            </div>
        </div> 
    </div>

    
</header> <!-- End nav -->







<section class="contact_info_wrapper">
     <div class="container">  
        <div class="row">  

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="contact_form_wrapper">
                    <h3 class="title">Fill out the form</h3>
                    <div class="leave_comment">
                        <div class="contact_form">


                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                       <input type="text" class="form-control" id="Fname" name="Fname"  placeholder="Name of the product" required="">
                                    </div>
                                    
                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                       <input class="form-control" id="address" name="address"  placeholder="Price of the Product in AUD" required="" type="number">
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 form-group">

                                                <p class="form-control" placeholder="Name of the Seller - " > Seller -  

                                                    <?php

                                                        if(isset($_SESSION['username']))
                                                        {


                                                        echo  $_SESSION['username'];


                                                        }
                                                    ?>
                                                </p>
                                    </div> 
                                                                       
                                    <div class="col-12 col-sm-12 col-md-6 form-group">

                                        <label>Please choose category</label>
                                            <select class="form-control" name="ccode" required=""> Choose Category
                                                <option selected="">----Category----</option>
                                                <option value="Sports"> Sports</option>
                                                <option value="Education"> Education</option>
                                                <option value="Music"> Music</option>
                                            </select>
                
                                    </div> 


                                    <form>
                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                        <input class="form-control" type="file" name="image" required="">
                                        <button class="form-control" name="upload" type="submit" value="upload" required="">upload
                                        </button>

                                        

                                     
                                    </div>
                                     </form>
                            

                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                        <textarea class="form-control" type="text" name="uage" id="comment" placeholder="Product description" required=""></textarea>
                                    </div>
                                    
                                     <div class="col-12 col-sm-12 col-md-12 submit-btn">
                                        <button type="submit" class="text-center">Submit your item</button>
                                    </div>
                                </div>
                            </form>   
                        </div>
                    </div> 
                </div>
           </div>
    


                                            <?php

                                            $con = mysqli_connect("localhost","root","","university_market_place");
                                            $sel = "SELECT 'product_image' from product";  
                                            $que = mysqli_query($con,$sel);

                                            $output = "";

                                            if (mysqli_num_rows($que) < 1){

                                                $output  .= "No image uploaded ";

                                            }

                                            while ($row = mysqli_fetch_array($que)) {

                                                $output .= "<img src='".$row['product_image']." 'style='width:400px;height:400px;'>";
                                                # code...
                                            }
                                        ?>


                                    


                
           </div>
        </div>
    </div>
</section> <!-- Contact Info Wrappper-->

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
