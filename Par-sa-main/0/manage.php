<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Messages</title>
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
	<p class="phead">Manage Admins</p>
	<div style="width:660px;background:white;padding:10px;margin:auto;">
		
	<table border="2">
  <tr>
    <td>Name</td>
    <td>Phone</td>
    <td>Delete</td>
  </tr>

<?php

include "inc/connect.php"; // Using database connection file here

$query=mysqli_query($connect,"select * from admins where access=1")or die(mysqli_error());

while($data = mysqli_fetch_array($query))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['phone']; ?></td>  
    <td><a href="deleteadmin.php?id=<?php echo $data['phone']; ?>">Delete</a></td>
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