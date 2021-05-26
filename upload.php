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


	echo "data added successfully";
	echo "<a href='Sell_form.php'>Go back</a>";


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


