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
   							   rd("view",0);
   						}
   						else
   						{
   							rd("login",0);
   						}
					}
					else
					{
						rd("login",0);
					}
   				break;
            case "adddata":
                  // echo '<pre>';
                  // print_r($_POST);
                  // die();
                     extract($_POST);
                     $sql1 =  "INSERT INTO datedata('DATEACTUELLE','DATERECEPTIONBL','DATEARRIVEECO','DDLJAAC','DDSCPL4JADA','DDSR','DDRC','DRDRC','AAK','DDK','AAL')
                              VALUES($dateactuelle,$datereceptionbl,$datearriveeco,$ddljaac,$ddscpl4jada,$ddsr,$ddrc,$drdrc,$aak,$ddk,$aal);
                     ";

                     $sql2 = "INSERT INTO ndata('NUMBERBL','NUMBERCO','REDAAC','JDPDDSRMDDSN','POIDS','NOMBREDECOLIS','CDT','TELEPHONE','AVANCESURFACTURE','SOLDESURFACTURE','MARGESOCIETE')
                              VALUES($numberbl,$numberco,$redaac,$jdpddsrmddsn,$poids,$nombredecolis,$cdt,$telephone,$avancesurfacture,$soldesurfacture,$margesociete);";




                        echo '<pre>';
                         print($sql1);
                         echo '</pre>';
                        echo '<br><br><br><pre>';
                         print($sql2);
                         echo '</pre>';


               break;

   			default:
   					rd("index");
   				break;
   		}



   }
 ?>
