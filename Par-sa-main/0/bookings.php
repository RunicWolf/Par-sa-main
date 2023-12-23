<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Car Park Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
			include('inc/connect.php');
						
	?>
	
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<div>
	<p class="phead">Bookings</p>
	<div style="width:660px;background:white;padding:10px;margin:auto;">
		
	<table border="2">
  <tr>
    <td>Vehicle Type</td>
    <td>Date & Time</td>
    <td>Plate No</td>
	<td>Status</td>
	<td>Id</td>
	<td>Delete</td>
  </tr>

<?php

include "inc/connect.php"; // Using database connection file here

$query=mysqli_query($connect,"select * from parking_details") or die(mysqli_error());

while($data = mysqli_fetch_array($query))
{
?>
  <tr>
    <td><?php echo $data['vehicle_type']; ?></td>
    <td><?php echo $data['d1']; ?></td>
    <td><?php echo $data['platenumber']; ?></td>    
	<td><?php echo $data['status']; ?></td> 
	<td><?php echo $data['id']; ?></td>
    <td><a href="deletebooking.php?id='<?php echo $data['id']; ?>'">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

	</div></div>
	</section>
	</section>
</body>
</html>