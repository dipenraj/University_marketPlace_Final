<?php

$cxn = mysql_connect("localhost","root","","university_market_place");

$phone = $_POST['phone'];
$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$address = $_POST['address'];



$sql="INSERT INTO stud_user(phone_num,email,username,acc_password,stu_dob,address) VALUES ('$phone', '$email', '$name', '$password', '$dob', '$address')";

echo "Barcode details Successfully Added";

?>