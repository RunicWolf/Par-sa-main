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
		

			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;
			
			/* Exception class. */
			require 'C:\xampp\htdocs\parsa\PHPMailer\PHPMailer\src\Exception.php';
			
			/* The main PHPMailer class. */
			require 'C:\xampp\htdocs\parsa\PHPMailer\PHPMailer\src\PHPMailer.php';
			
			/* SMTP class, needed if you want to use SMTP. */
			require 'C:\xampp\htdocs\parsa\PHPMailer\PHPMailer\src\SMTP.php';

			$mail = new PHPMailer;

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  			  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'keril.trash2004@gmail.com';                 // SMTP username
			$mail->Password = 'KerilP2204';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
			$mail->Port = 587; 

			$mail->From = 'keril.trash2004@gmail.com';
			$mail->FromName = 'Keril Patel';
			$mail->addAddress($email);               // Name is optional
			$mail->addReplyTo('keril.trash2004@gmail.com', 'Keril Patel');
		
			$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Thank you for booking your parking';
			$mail->Body    = "Thank you for booking your parking. Your Parking Slot is $vehicle_type : $plot. Time Details: $from to $to ";
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				header('location:success.php');
			}

		?>