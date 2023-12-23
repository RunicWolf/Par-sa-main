 <?php 
 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
	$connection = mysqli_connect("localhost", "root", "", "cpms");
	$phone=$_SESSION['phone'];
	$sql = "UPDATE users SET pl_booked = 'NO' WHERE phone = $phone";
	mysqli_query($connection, $sql);
	$sql = "UPDATE parking_details  
	INNER JOIN users  
	ON users.phone = $phone
	SET parking_details.status = 'UNBOOKED';";
	mysqli_query($connection, $sql);
	 header("Location: ../success_unbook.php");
	//}
		
}