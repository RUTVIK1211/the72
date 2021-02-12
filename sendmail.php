<?php
	if($_POST['contact'])
	{
						// Include autoload.php file
						require 'phpmailer/PHPMailerautoload.php';
						// Create object of PHPMailer class
						$mail = new PHPMailer(true);
						$output = '';
						if (isset($_POST['contact'])) {
							$name = $_POST['name'];
							$email = $_POST['email'];
							$message = $_POST['message'];
								$mail->isSMTP();
								$mail->Host = 'smtp.gmail.com';
								$mail->SMTPAuth = true;
								// Gmail ID which you want to use as SMTP server
								$mail->Username = 'narmadasands1@gmail.com';
								// Gmail Password
								$mail->Password = '123456@abc';
								$mail->SMTPSecure = 'tls';
								$mail->Port = 587;
								// Email ID from which you want to send the email
								// narmadasands1@gmail.com
								$mail->addAddress('narmadasands@gmail.com');
								$mail->setFrom('narmadasands1@gmail.com',$name);
								// Recipient Email ID where you want to receive emails
								$mail->isHTML(true);
								$mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";
								if($mail->send())
								{
									header("location: index.php?sucess");
								}
								else{
									header("Location: index.php?fail");
						}
	}
	}
?>
