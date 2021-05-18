<?php

session_start();

$con = mysqli_connect("localhost","root","","university_market_place");


if(isset($_POST['upload']))


{

    $file = $_FILES['image']['name'];

    $query = "INSERT INTO image(product_image) VALUES ('$file')";

    $res = mysqli_query($con, $query);

    if ($res) {

        move_uploaded_file($_FILES['image']['tmp_name'], "$file");
}
}




?>