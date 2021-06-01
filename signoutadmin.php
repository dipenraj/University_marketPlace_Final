<?php






if(!isset($_SESSION['name']))
{
	echo "Signed Out successful";
  header("location:admin.php");

session_start();
session_destroy();




}


?>