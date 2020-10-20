<?php
require_once 'dbconnection.php';
   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
   	 function rd($to,$msg=0)
   {
   		header("location: ".$to."?status=".$msg);
   }

   		$action = $_POST['action'];
   		unset($_POST['action']);
   		switch ($action) {
   			case "login":
   					$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
   					// die($email);
   					$password = htmlspecialchars($_POST['password']);
   					// $np = md5($password);
   					if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
   						$sql = "SELECT email FROM user WHERE email='$email' AND password='$password'";
   						$result = mysqli_query($conn,$sql);

   						if (mysqli_num_rows($result) > 0) {
   								session_start();
   								$_SESSION['email'] = $email;
   							   rd("view.php",0);
   						}
   						else
   						{
   							rd("login.php",0);
   						}
					}
					else
					{
						rd("login.php",0);
					}
   				break;

   			default:
   					rd("index.php");
   				break;
   		}



   }
 ?>
