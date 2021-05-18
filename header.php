<?php

session_start();

if(isset($_SESSION['username'])){

	echo "<!doctype html>
<html lang='en'>


<head>
    <!-- Required meta tags -->
    <meta charset='UTF-8'>
    <meta name='description' content=''>
    <meta name='keywords' content='HTML,CSS,XML,JavaScript'>
    <meta name='author' content='Ecology Theme'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>University marketplace</title>
    <link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'>
    <!-- Goole Font -->
    <link href='https://fonts.googleapis.com/css?family=Rubik:400,500,700' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet'> 
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='css/assets/bootstrap.min.css'>
    <!-- Font awsome CSS -->
    <link rel='stylesheet' href='css/assets/font-awesome.min.css'>    
    <link rel='stylesheet' href='css/assets/flaticon.css'>
    <link rel='stylesheet' href='css/assets/magnific-popup.css'>    
    <!-- owl carousel -->
    <link rel='stylesheet' href='css/assets/owl.carousel.css'>
    <link rel='stylesheet' href='css/assets/owl.theme.css'>     
    <link rel='stylesheet' href='css/assets/animate.css'> 
    <!-- Slick Carousel -->
    <link rel='stylesheet' href='css/assets/slick.css'>  
    <link rel='stylesheet' href='css/assets/preloader.css'/>    

    <!-- Revolution Slider -->
    <link rel='stylesheet' href='css/assets/revolution/layers.css'>
    <link rel='stylesheet' href='css/assets/revolution/navigation.css'>
    <link rel='stylesheet' href='css/assets/revolution/settings.css'>    
    <!-- Mean Menu-->
    <link rel='stylesheet' href='css/assets/meanmenu.css'>
    <!-- main style-->
    <link rel='stylesheet' href='css/style.css'>    
    <link rel='stylesheet' href='css/responsive.css'>
    <link rel='stylesheet' href='css/demo.css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
      <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->
</head>
<body>
<header class='header_four'>
<!-- Preloader -->
<div id='preloader'>
    <div id='status'>&nbsp;</div>
</div>    
    

    <div class='edu_nav'>
        <div class='container'>
            <nav class='navbar navbar-expand-md navbar-light bg-faded'>
                <a class='navbar-brand' href='index-2.html'><img src='images/logo.png' alt='logo'></a>
                <div class='collapse navbar-collapse main-menu' id='navbarSupportedContent'>
                    <ul class='navbar-nav nav lavalamp ml-auto menu'>
                        <li class='nav-item'><a href='index-3.html' class='nav-link active'>Home</a>
                           
                        </li>
                        <li class='nav-item'><a href='about.html' class='nav-link'>About</a></li>
                             
                        <li class='nav-item'><a href='contact.html' class='nav-link'>Contact</a></li>
                        <li class='nav-item'><a href='signout.php' class='nav-link'>Sign out</a></li>
                        <li class='nav-item'><a href='sell.html' class='nav-link'>Sell item</a></li>
                        <li class='nav-item'><a  class='nav-link'>
</a></li>
                    </ul>
                </div>
              
            </nav><!-- END NAVBAR -->
        </div> 
    </div>";

}




else{

echo "<!doctype html>
<html lang='en'>


<head>
    <!-- Required meta tags -->
    <meta charset='UTF-8'>
    <meta name='description' content=''>
    <meta name='keywords' content='HTML,CSS,XML,JavaScript'>
    <meta name='author' content='Ecology Theme'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>University marketplace</title>
    <link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'>
    <!-- Goole Font -->
    <link href='https://fonts.googleapis.com/css?family=Rubik:400,500,700' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet'> 
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='css/assets/bootstrap.min.css'>
    <!-- Font awsome CSS -->
    <link rel='stylesheet' href='css/assets/font-awesome.min.css'>    
    <link rel='stylesheet' href='css/assets/flaticon.css'>
    <link rel='stylesheet' href='css/assets/magnific-popup.css'>    
    <!-- owl carousel -->
    <link rel='stylesheet' href='css/assets/owl.carousel.css'>
    <link rel='stylesheet' href='css/assets/owl.theme.css'>     
    <link rel='stylesheet' href='css/assets/animate.css'> 
    <!-- Slick Carousel -->
    <link rel='stylesheet' href='css/assets/slick.css'>  
    <link rel='stylesheet' href='css/assets/preloader.css'/>    

    <!-- Revolution Slider -->
    <link rel='stylesheet' href='css/assets/revolution/layers.css'>
    <link rel='stylesheet' href='css/assets/revolution/navigation.css'>
    <link rel='stylesheet' href='css/assets/revolution/settings.css'>    
    <!-- Mean Menu-->
    <link rel='stylesheet' href='css/assets/meanmenu.css'>
    <!-- main style-->
    <link rel='stylesheet' href='css/style.css'>    
    <link rel='stylesheet' href='css/responsive.css'>
    <link rel='stylesheet' href='css/demo.css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
      <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->
</head>
<body>
<header class='header_four'>
<!-- Preloader -->
<div id='preloader'>
    <div id='status'>&nbsp;</div>
</div>    
    

    <div class='edu_nav'>
        <div class='container'>
            <nav class='navbar navbar-expand-md navbar-light bg-faded'>
                <a class='navbar-brand' href='index-2.html'><img src='images/logo.png' alt='logo'></a>
                <div class='collapse navbar-collapse main-menu' id='navbarSupportedContent'>
                    <ul class='navbar-nav nav lavalamp ml-auto menu'>
                        <li class='nav-item'><a href='index-3.html' class='nav-link active'>Home</a>
                           
                        </li>
                        <li class='nav-item'><a href='about.html' class='nav-link'>this is without login</a></li>
                             
                        <li class='nav-item'><a href='contact.html' class='nav-link'>Contact</a></li>
                        <li class='nav-item'><a href='signout.php' class='nav-link'>Sign out</a></li>
                        <li class='nav-item'><a href='sell.html' class='nav-link'>Sell item</a></li>
                        <li class='nav-item'><a  class='nav-link'>
</a></li>
                    </ul>
                </div>
              
            </nav><!-- END NAVBAR -->
        </div> 
    </div>";

}

?>

