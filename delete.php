<?php

if (isset($_POST['buy'])) {



	$con = mysqli_connect("localhost","root","","university_market_place");
    $id = $_POST['hidden_id'];

	$sql = "DELETE FROM product where product_id='$id'";

	if(mysqli_query($con,$sql)){	

	 	echo "<script>
	        alert('Thanks for purchasing the item !');

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
		<p style='font-size:25px;font-color:white;font-weight:bold;'> You can now contact the product seller make the trade by yourself ! Easy as it is !</p>
    
    	
					<button type='submit' class='qwer'><b>Click to go back to main page</button>
				
		</fieldset>	
	</form></center>
</body>
</html>


";


	 }

	 	else{
	 		echo "no";
	 	}






	}

	?>