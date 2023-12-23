<?php

include "inc/connect.php"; // Using database connection file here
$db = mysqli_connect("localhost", "root", "", "cpms");
$id = $_GET['id']; // get id through query string
$del = mysqli_query($connect,"delete from parking_details where id = $id"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:bookings.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>