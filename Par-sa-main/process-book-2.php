<?php

$vehicle_type=$_POST['vehicle_type'];
$plot=$_POST['plot'];
$email=$_POST['email'];

session_start();
// Set session variables
$_SESSION["vehicle_type"] = $vehicle_type;
$_SESSION["plot"] = $plot;
$_SESSION["email"] = $email;

//echo "Session variables are set.";
header('location:dates.php');

?>