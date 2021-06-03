<?php

session_start();

$con = mysqli_connect("localhost","root","","university_market_place");








$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];

 



$sql ="insert into contact_form(name,email,subject,description
) values('$name','$email','subject','$comment')";

	



		if(mysqli_query($con,$sql)){


	echo "<script>
          alert('Your inquiry has been submitted successfully !');

          setTimeout(function(){
            window.location.href = 'contact.php';
         }, 1000);

          </script>";


     }
	  	
	  else
	  {
	  	echo "work again";
	  }

?>


