<?php

session_start();
include '../includes/connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($con,"SELECT * FROM register WHERE email = '$email' && `password` = '$password'");

$num = mysqli_num_rows($query);

$data = mysqli_fetch_array($query);

$cat = $data['category'];

echo $cat;


if($num == 1){
    $_SESSION['email'] = $email;
    if($cat == "User"){

        header('location:../home.php');
    }
    else if($cat == "Admin"){
        header('location:../admin_home.php');

    }
}
else{
    header('location:../index.php');
}

?>