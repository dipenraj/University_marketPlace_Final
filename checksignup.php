<?php
$con = mysqli_connect("localhost","root","","university_market_place");
$phone = $_POST['phone'];
$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$address = $_POST['address'];





$sql ="insert into stud_user(phone_num,email,username,acc_password,stu_dob,address) values('$phone','$email','$name','$password','$dob','$address')";



	 if(mysqli_query($con,$sql)){	

	 	echo'Thanks for registration, Login to Continue';
	 	header("location:index-3.php");
	 }

else

{
	
	echo "Try again";

}

?>