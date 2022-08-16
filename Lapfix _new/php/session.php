<?php

session_start();
include 'includes/connection.php';
if(!isset($_SESSION['email'])){
    header('location:../index.php');
}
$username = $_SESSION['email'];

$qry = mysqli_query($con,"SELECT * FROM register WHERE email = '$username'");
$rows1 = mysqli_fetch_array($qry);



?>