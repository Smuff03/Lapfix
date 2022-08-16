<?php

include '../includes/connection.php';

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = $_POST['email'];
$mob = $_POST['mob'];
$year = $_POST['year'];
$topic = $_POST['appointment-topic'];
$desc = $_POST['appointment-desc'];
$ate = $_POST['ate'];
$time = $_POST['time'];
$price = $_POST['price'];
$brand = $_POST['brand'];
echo $brand;
echo $ate;
$insert = mysqli_query($con, "INSERT INTO request(`name`,email,`mob`,`year`,`price`,`appointment-topic`,`appointment-desc`,`brand`,`D`,`time`) VALUES('$name','$email','$mob','$year','$price','$topic','$desc','$brand','$ate','$time')");

if($insert){
    echo "<script>alert('Your request has been submitted...'); window.location='../home.php'</script>";
}
else{
    echo "<script>alert('Your request has been denied...')</script>";
}

// $url = "http://localhost/Project/web-design/home.php";
// header("Location: $url");
// exit();
