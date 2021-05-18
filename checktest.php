<?php
$con = mysqli_connect("localhost","root","","university_market_place");
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$udob = $_POST['udob'];
$uemail = $_POST['uemail'];
$upass = $_POST['upass'];

$sql ="insert into stud_user(phone_num,email,username,acc_password,stu_dob,address) values('$phone','$uemail','$name','upass','udob','$address')";


	 
if(mysqli_query($con,$sql)){
	echo "data added successfully";
	
}

else

{
	echo "data not yet added";
	echo "location:'index-3.php'";
}

?>
