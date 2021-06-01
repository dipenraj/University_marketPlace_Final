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
<title>Buy page</title>
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
                <a class="navbar-brand" href="index-2.php"><img src="images/logo.png" alt="logo"></a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">
                        <li class="nav-item"><a href="index-2.php" class="nav-link">Home</a>
                           
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
                        <h1><?php

                                                    if(isset($_SESSION['username']))
                                                    {

                                                        
                                                    echo "Buy this Item !";

                                                    

                                                    }

                                                    else
                                                    {
                                                        echo "Buy this Item ! -
                                                         Login to Continue";
                                                    }

                                                    ?></h1>
                       
                </div>              

            </div>
        </div> 
    </div>

    
</header> <!-- End nav -->


<section class="popular_courses">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                
            </div>



                

                   
                    <?php                            

                    $db = mysqli_connect("localhost","root","","university_market_place");

                    if (isset($_POST["buy"]))
                                        {
                                         
                    $id = $_POST['hidden_id'];

                    

                     $sql = "SELECT * FROM product where product_id='$id'";
                     $mysqli_result = mysqli_query($db,$sql);

                    while($row= mysqli_fetch_array($mysqli_result))
                            
                            {


                                



                        echo "<section class='events-area'>
    <div class='container'>
        <div class='row'>
            <div class='col-12 col-sm-12 col-md-12 col-lg-15'>
            <form method='post' action='invoice.php' enctype='multipart/form-data'>

                <div class='col-sm-12 events_full_box'>
                <div class='events_single'>
                    <div class='event_banner'>
                        <a href='#'><img src='uploads/".$row['product_image']."' alt='' class='img-fluid'></a>
                    </div>
                    <div class='event_info'>
                        <h3><a href='#' title=''>".$row['product_name']."</a></h3>
                        <div class='events_time'>
                            <span class='time'><i class='flaticon-clock-circular-outline'></i> Seller | ".$row['product_seller']."</span>
                            <span><i class='fas fa-map-marker-alt'></i> Category | ".$row['product_category']."</span>
                        </div>
                         <p>".$row['product_description']."</p>
                        <div class='event_dete' style='bottom:100px;height:40px; width:170px;'>
                        
                            <span class='date'> Price | A$ ".$row['product_price']."</span>
                            <input type='hidden' name='hidden_name' value=".$row['product_name'].">
                            <input type='hidden' name='hidden_seller' value=".$row['product_seller'].">
                            <input type='hidden' name='hidden_id' value=".$row['product_id'].">
                            <input type='hidden' name='hidden_price' value=".$row['product_price'].">
                            
            
                            
                        </div>
                       <section class='contact_info_wrapper'>
                            <div class='container'>  
                                <div>  
                                    <div>
                                        <button type='submit' name='buy' class='text-center' style='background: #ff5a2c;
                                          font-weight: 500;
                                          border-radius: 100;
                                          color: #ffffff;
                                          font-family: 'Poppins', sans-serif;
                                          display: inline-block;
                                          font-size: 12px;
                                          text-transform: uppercase;
                                          text-decoration: none;
                                          height: 36px;
                                          line-height: 36px;
                                          padding: 0 20px;
                                          -webkit-transition: all 0.3s ease-in-out;
                                          transition: all 0.3s ease-in-out;'>Buy this Item !
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>   
                    </div>
                </div>  
            </div> 
            </form>
        </div>
        </div>
    </div>
</section>";
                            }




                   
                    
           }

                    ?>
                        
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
    <script type="text/javascript" src="js/demo.js"></script>
    <div class="demo-style-switch" id="switch-style">
      
        <div class="switched-options">
            <div class="config-title">
                <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="logo"></a>
                <p>Education Template</p>
                
            </div>
            
</body>


</html>
