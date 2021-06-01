<?php

session_start();

$con = mysqli_connect("localhost","root","","university_market_place");








$name = $_POST['Fname'];
$price = $_POST['address'];
$description = $_POST['uage'];
$category = $_POST['ccode'];
$seller = $_SESSION['username'];
$file = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
 



$sql ="insert into product(product_name,product_price,product_description,product_category,product_seller,product_image) values('$name','$price','$description','$category','$seller','$file')";


 if (isset($_SESSION['username'])) {
 	# code...
 

	$img_ex = pathinfo($file, PATHINFO_EXTENSION);
	$img_path_lc = strtolower($img_ex);

	$allowed_exs =  array("jpg" ,"jpeg" ,"png");
	if (in_array($img_path_lc, $allowed_exs)) {



		$target = "uploads/".basename($_FILES['image']['name']);


		move_uploaded_file($tmp_name, $target);


		if(mysqli_query($con,$sql)){


	echo "<script>
	        alert('Your item has been added to University marketplace successfullly');

	        </script>";

	        echo "<!DOCTYPE html>
<html>
<head>
	<title>
		Login Go back!
	</title>
	<style>
		button.qwer{
      background-color: #008CBA;
      color: white; border: 5px solid yellow;
      padding: 15px 32px;
      text-align: center;
      display: inline-block;
      font-size: 25px;
      margin: 10px 5px;
      cursor:pointer;
      border-radius:100px;
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      transition-duration: 0.8s;margin-top:-10px;} /*This coding used for styling the button and by using differents properties 
      we can create an creative button */
     
      .qwer:hover {
      background-color: #FFFFF0;
      color:#0066FF;box-shadow: 0 16px 32px 0 rgba(0,0,0,0.4), 0 12px 40px 0 rgba(0,0,0,0.40);
      }
	</style>
</head>
<body background='IMAGES/58.png'><center>
<form  action='index-2.php' method='post'>
    <!--As I have used javascript in this webpage, as soon as I'll click on submit button 'return validation()'' programm will execute, and whatever I have commanded in javascript will be there on webpage -->
	
	<fieldset style='box-shadow: 0 16px 32px 0 rgba(0,0,0,0.4), 0 12px 40px 0 rgba(0,0,0,0.40);height:150px;
                   width:600px;background-color:#0080FF;border-color:yellow;border-width:5px;margin-top:200px;font-color:white;'>
		<!--fieldset tag is used for designing-->
		<p style='font-size:25px;font-color:white;font-weight:bold;'> Thank you for selling an item, You can see your item on the main page now</p>
    
    	
					<button type='submit' class='qwer'><b>Click to go to main page</button>
				
		</fieldset>	
	</form></center>
</body>
</html>


";


     }
	  	
	    
	  else
	  {

	  	$em = "You can't upload this type of files";
	  	echo $em;
	  }
	

	}



else{
	echo "You can't upload this type of file, You can only upload files which has extension - '.jpg','jpeg',''.png'";
}
 


}


else
{

	echo "Login to contine";
}

?>


