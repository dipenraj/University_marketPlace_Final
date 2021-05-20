<?php






if(!isset($_SESSION['username']))
{
	echo "Signed Out successful";
  header("location:index-2.php");

session_start();
session_destroy();




}


?>