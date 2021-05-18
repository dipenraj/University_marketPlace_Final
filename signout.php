<?php

if(!isset($_SESSION['username']))
{
	echo "Signed Out successful";
  header("location:index-3.php");
}




session_unset();
session_destroy();




?>