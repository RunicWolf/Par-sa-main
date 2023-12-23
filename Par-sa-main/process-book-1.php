<?php

$model=$_POST['model'];
$plateno=$_POST['plateno'];

session_start();
// Set session variables
$_SESSION["model"] = $model;
$_SESSION["plateno"] = $plateno;
//echo "Session variables are set.";
header("location:parking_space.php");

?>