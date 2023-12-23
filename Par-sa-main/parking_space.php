<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Car Park Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
	<link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">
	<script>

	window.addEvent('domready', function(){
		new Picker.Date($$('----'), {
			timePicker: true,
			positionOffset: {x: 5, y: 0},
			pickerClass: 'datepicker_bootstrap',
			useFadeInOut: !Browser.ie
		});
	});

	</script>
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>
	
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<form class="box login" action="process-book-2.php" method="post">
	<fieldset class="boxBody">
	<label><strong>Parking Details</strong></label>
	<hr />
	   <label>Select type of Vehicle</label>
		
	   <select name="vehicle_type" class="cjComboBox" >
			<option value="Four">4 Wheeler</option>
			<option value="Two">2 Wheeler</option>
		
		</select>
			<select name="plot" class="cjComboBox" >
			<optgroup label="4 Wheeler">
			<option value="PL 001">PL 001</option>
			<option value="PL 002">PL 002</option>
			<option value="PL 003">PL 003</option>
			<option value="PL 004">PL 004</option>
			<option value="PL 005">PL 005</option>
			<option value="PL 006">PL 006</option>
			<option value="PL 007">PL 007</option>
			<option value="PL 008">PL 008</option>
			<option value="PL 009">PL 009</option>
			<option value="PL 010">PL 010</option>
			</optgroup>
			<optgroup label="2 Wheeler">
			<option value="TL 001">TL 001</option>
			<option value="TL 002">TL 002</option>
			<option value="TL 003">TL 003</option>
			<option value="TL 004">TL 004</option>
			<option value="TL 005">TL 005</option>
			<option value="TL 006">TL 006</option>
			<option value="TL 007">TL 007</option>
			<option value="TL 008">TL 008</option>
			<option value="TL 009">TL 009</option>
			<option value="TL 010">TL 010</option>
			</optgroup>
			</select>

			<label>Enter your email</label>
	  <input type="text" name="email" placeholder="eg. abc@gmail.com" required>

	<footer>
	  <input type="submit" class="btnLogin" value="Proceed to Date & Time" tabindex="4">
	</footer>
</form>
	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>