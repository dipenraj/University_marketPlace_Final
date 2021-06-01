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
    <head>
		<meta charset="utf-8" />
		<title>Invoice</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
    
</head>
<title>Invoice</title>
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
                        <li class="nav-item"><a href="sell.php" class="nav-link">Sell item</a></li>
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

                                                        
                                                    echo "Invoice of your item !";

                                                    

                                                    }

                                                    else
                                                    {
                                                        echo "Invoice of your item !";
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
$con = mysqli_connect("localhost","root","","university_market_place");
$hidden_id = $_POST['hidden_id'];
$hidden_seller = $_POST['hidden_seller'];
$buyer = $_SESSION['username'];
$hidden_name = $_POST['hidden_name'];







$sql ="insert into receipt(product_id,seller,buyer,product_name) values('$hidden_id','$hidden_seller','$buyer','$hidden_name')";



	 if(mysqli_query($con,$sql)){	

	 	echo "";
	 	
	 }

else

{
	
	echo "Try again";

}

?>

                

                   
                    <?php                            

                    $db = mysqli_connect("localhost","root","","university_market_place");

                    if (isset($_POST["buy"]))
                                        {
                                         
                    $id = $_POST['hidden_id'];

                    

                     $sql = "SELECT * FROM product where product_id='$id'";
                     $mysqli_result = mysqli_query($db,$sql);

                    while($row= mysqli_fetch_array($mysqli_result))
                            
                            {


                                

		




								echo "<div class='invoice-box'>
								    <form method='post' action='delete.php' enctype='multipart/form-data'>

									<table>
										<tr class='top'>
											<td colspan='2'>
												<table>
													<tr>
														<td class='title'>
															<img src='./images/invoice_logo.png' alt='Company logo' style='width: 50%; max-width: 300px' />
														</td>

														<td>
															Invoice #: ".$row['product_id']."
														<input type='hidden' name='hidden_id' value=".$row['product_id'].">
															
															<br />
															Created: <p id='date'></p>
															<script>
															document.getElementById('date').innerHTML = Date();
															var today = new Date();

															var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
															document.getElementById('date').innerHTML = date();
															</script><br />
															
														</td>
													</tr>
												</table>
											</td>
										</tr>";

										?>

										



							<?php

							echo "
							

				<tr class='heading'>
					<td>Payment Method</td>

					<td>Check #</td>
				</tr>

				<tr class='details'>
					<td>Check</td>

					<td>1000</td>
				</tr>

				<tr class='heading'>
					<td>Item</td>

					<td>Price</td>
				</tr>

				<tr class='item'>
					<td>".$row['product_name']."</td>

					<td>A$".$row['product_price']."</td>
				</tr>

				<tr class='item'>
					<td>Delivery</td>

					<td>$0</td>
				</tr>

				

				<tr class='total'>
					<td></td>

					<td>Total:A$ ".$row['product_price']."</td>
				</tr>";

				?>
				<?php
										echo "

										<tr class='information'>
											<td colspan='2'>
												<table>
													<tr>
														<td>
															Sparksuite, Inc.<br />
															12345 Sunny Road<br />
															St.Kilda East, VIC 3183
														</td>

														<td>
															<br />
															Seller - ".$row['product_seller']."<br />";

										?>


			                    	 <?php

			                     	if ($_POST['hidden_seller']) 

			                     	{



			                     	$seller = $_POST['hidden_seller'];
                    

				                     $sql = "SELECT email,phone_num,address FROM stud_user where username='$seller'";
				                     $mysqli_result = mysqli_query($db,$sql);

				                   			 while($row= mysqli_fetch_array($mysqli_result))
                            
					                            {				                               


														echo "





														".$row['email']."<br />
														".$row['phone_num']."<br />
															</td> 
														</td></tr>
							</table>
							</td>
							</tr>
							"; 



												}
			                     				
			                     	}
									


									?>



				<?php

				echo "
			</table>
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
                                          transition: all 0.3s ease-in-out;'>Click here to go to main Homepage
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>
			</form>
		</div>";
                            


                            ?>




                            <?php

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



