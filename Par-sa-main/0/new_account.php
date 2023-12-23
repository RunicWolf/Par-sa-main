<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Create Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
	?>
	
	<section id="content">
		<div class="left-signup">
		</div>
		<div class="left-signup">
		<p class="head">New Admin Registration</p>


		<form id="registration" action="new_account.php" method="post">
		<input type="text" name="fname" value="" placeholder="First Name"/>
		<input type="text" name="lname" value="" placeholder="Last Name"/>
		<input type="text" name="phone" value="" placeholder="Phone Number"/>
		<input type="password" name="password"value="" placeholder="Password"/>
		<input type="Submit" name="Submit" value="Create Account"/>

		<?php
	include('../inc/connect.php');
	include('../inc/insert.php');
	if (isset($_POST['Submit'])) {
	$phone=$_POST['phone'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$password=$_POST['password'];
	$table_name='admins';
	
	
	$form_data = array(
	    'name' =>  $fname. ' ' .$lname ,
		'phone' => $phone,
		'username' => $fname,
		'password' => $password,
		'access' => 1
	);
		
	
	//echo dbRowInsert($table_name, $form_data);
	$conn->multi_query( dbRowInsert($table_name, $form_data));
	$conn->close();
	}
	
?>
		
		
				
		</form>
		</div>
	</section>
	</section>
</body>
</html>