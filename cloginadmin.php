<?php
session_start();
 


$con = mysqli_connect("localhost","root","","university_market_place");


$email = $_POST['email'];
$password = $_POST['password'];


$sql = "select name,emailid,password from admin where emailid='$email' and password='$password' ";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){

	while($record=mysqli_fetch_assoc($result)){
    $_SESSION['name'] = $record['name'];
	header("location:admin_page.php");

}
}
else{
	
	echo "<script>
	        alert('Wrong information inserted! please check your email and password again!');

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
      background-color: #FFFFFF;
      color:#0066FF;box-shadow: 0 16px 32px 0 rgba(0,0,0,0.4), 0 12px 40px 0 rgba(0,0,0,0.40);
      }
	</style>
</head>
<body background='IMAGES/58.png'><center>
<form  action='index-3.php' method='post'>
    <!--As I have used javascript in this webpage, as soon as I'll click on submit button 'return validation()'' programm will execute, and whatever I have commanded in javascript will be there on webpage -->
	
	<fieldset style='box-shadow: 0 16px 32px 0 rgba(0,0,0,0.4), 0 12px 40px 0 rgba(0,0,0,0.40);height:150px;
                   width:600px;background-color:#0080FF;border-color:yellow;border-width:5px;margin-top:200px;font-color:white;'>
		<!--fieldset tag is used for designing-->
		<p style='font-size:25px;font-color:white;font-weight:bold;'> Go back to login page.</p>
    
    	
					<button type='submit' class='qwer'><b>Click here</b></button>
				
		</fieldset>	
	</form></center>
</body>
</html>


";


	
}









?>