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
	<p class="phead">Users</p>
	<div style="width:660px;background:white;padding:10px;margin:auto;">
		
	<table border="2">
  <tr>
    <td>Name</td>
    <td>Phone</td>
    <td>Plate No</td>
    <td>Delete</td>
  </tr>

<?php

include "inc/connect.php"; // Using database connection file here

$query=mysqli_query($connect,"select * from users where access=2")or die(mysqli_error());

while($data = mysqli_fetch_array($query))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['phone']; ?></td>
    <td><?php echo $data['plate_no']; ?></td>    
    <td><a href="delete.php?id=<?php echo $data['phone']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

	</div></div>
	</section>
	</section>
</body>


<!--
<body>
	<section id="container">
	<?php
			include('inc/header.php');
			include('inc/connect.php');
						
	?>
	
	<section id="content">
	<div>
	<p class="phead">Users</p>
	<div style="width:600px;background:white;padding:10px;margin:auto;">
		
						<form method="post" action="delete.php" >
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                           
                            <thead>
						
                                <tr>
                                    <th>CHK</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th style="width:100px;">Plate No</th>
                                                             
                                </tr>
                            </thead>
                            <tbody>
							<?php 
							$query=mysqli_query($connect, "select * from users where access='2'")or die(mysqli_error());
							while($row=mysqli_fetch_array($query)){
							$plate_no=$row['plate_no'];
							?>
                              
										<tr>
										<td>
										<input name="selector[]" type="checkbox" value="<?php echo '$plate_no'; ?>">
										</td>
                                         <td><?php echo $row['name'] ?></td>
                                         <td><?php echo $row['phone'] ?></td>
                                         <td><?php echo $row['plate_no'] ?></td>
                                       
                                </tr>
                         
						          <?php } ?>
                            </tbody>
                        </table>
						<input type="submit" class="btn btn-danger" value="Delete" name="delete">
          
		</form>
	</div></div>
	</section>
	</section>
</body>
-->
</html>