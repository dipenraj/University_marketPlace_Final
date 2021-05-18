<?php

session_start();

$con = mysqli_connect("localhost","root","","university_market_place");







$name = $_POST['Fname'];
$price = $_POST['address'];
$description = $_POST['uage'];
$category = $_POST['ccode'];
$seller = $_SESSION['username'];
$file = $_FILES['image']['name'];
 



$sql ="insert into product(product_name,product_price,product_description,product_category,product_seller,product_image) values('$name','$price','$description','$category','$seller','$file')";


 
	 if(mysqli_query($con,$sql))

	 {
	echo "data added successfully";
	

	}



else{
	echo "No worries mate";
}

?>


