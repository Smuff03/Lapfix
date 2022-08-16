<?php

include '../includes/connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$category = $_POST['category'];

$check = mysqli_query($con, "SELECT * FROM register WHERE `name` = '$name' && email = '$email' && `password` = '$password' && category = '$category'");
$num = mysqli_fetch_array($check);

if($num == 1){
    echo "<script>alert('You have already registered'); window.location = '../index.php'</script>";
}
else{
    $insert = mysqli_query($con, "INSERT INTO register(`name`,email,`password`,category) VALUES('$name','$email','$password','$category')");
    if($insert){
        echo "<script>alert('Successfully Registered... Please Login to Proceed!'); window.location = '../index.php'</script>";
    }
    else{
        echo "<script>alert('You have not registered properly'); window.location = '../index.php'</script>";
    }   
}
?>