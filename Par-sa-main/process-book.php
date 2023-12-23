<?php

	require('inc\connect.php');
	session_start();
	  $model = $_SESSION["model"];
	  $plateno = $_SESSION["plateno"];
	  $vehicle_type = $_SESSION["vehicle_type"];
	  $plot = $_SESSION["plot"];
	  $status="RESERVED";
	  $from = $_SESSION["from"];
	  $to = $_SESSION["to"];
	  $email  = $_SESSION["email"];
			
			/*CHECK IF RESERVED */
			
	$sql="SELECT * FROM parking_details WHERE vehicle_type='$vehicle_type' and plot='$plot' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);


	$count=mysqli_num_rows($result);


	if($count==1)
	{
 		header('location:error-book.php');
	}

	else
	{
		$sql = "UPDATE users SET pl_booked = 'YES' WHERE plate_no = '$plateno'";
		mysqli_query($connect, $sql); 
        
		$query = "INSERT INTO `parking_details` (status, model, vehicle_type, plot,platenumber,d1,d2) VALUES ('$status', '$model', '$vehicle_type', '$plot', '$plateno', '$from','$to')";
        $result = mysqli_query($connect, $query);


		if($result){
			header('location:mail.php');
			exit;
        }
	}
    
?>