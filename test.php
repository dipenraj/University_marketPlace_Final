<?php

session_start();
$con = mysqli_connect("localhost","root","","university_market_place");

if (isset($_POST["buy"]))
{
 
 $id = $_POST['hidden_id'];

 echo $id;

 }


?>