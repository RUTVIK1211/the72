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
                  // die("the 72  half done");
                          extract($_POST);
                $counter=0;
                $tsql = "SELECT * from counter";
                $result = mysqli_query($conn,$tsql);
                $data =  mysqli_fetch_row($result); 

                $month = $data[1];
                $cmonth =date("m");
                // die($cmonth);
                if ($month!=$cmonth) 
                {
                  $counter = 1;
                  $sql="UPDATE counter set cmonth=$cmonth,counter=0";
                  $result = mysqli_query($conn,$sql);
                }
                else
                {
                  $counter = $data[0];
                 $counter++;
                }
                // var_dump($counter);

               
                $id="ETS_";
                $id.= date('m');
                $id.="_".date("Y")."_".$counter ;
                
              

                     $sql1 =  "INSERT INTO datedata(DATEACTUELLE,DATERECEPTIONBL,DATEARRIVEECO,DDLJAAC,DDSCPL4JADA,DDSR,DDRC,DRDRC,AAK,DDK,AAL)VALUES('$dateactuelle','$datereceptionbl','$datearriveeco','$ddljaac','$ddscpl4jada','$ddsr','$ddrc','$drdrc','$aak','$ddk','$aal');
                     ";


                        // echo '<pre>';
                        //  print($sql1);
                        //  echo '</pre>';

                        //  die();
                        //  echo '<br><br><br><pre>';
                        //  print($sql2);
                        //  echo '</pre>';
                        //  echo '<br><br><br><pre>';
                        //  print($sql3);
                        //  echo '</pre>';
                        //  echo '<br><br><br><pre>';
                        //  print($sql4);
                        //  echo '</pre>';

                     $sql2 = "INSERT INTO ndata(NUMBERBL,NUMBERCO,REDAAC,JDPDDSRMDDSN,POIDS,NOMBREDECOLIS,CDT,TELEPHONE,AVANCESURFACTURE,SOLDESURFACTURE,MARGESOCIETE)VALUES($numberbl,$numberco,$redaac,$jdpddsrmddsn,$poids,$nombredecolis,$cdt,$telephone,$avancesurfacture,$soldesurfacture,$margesociete);";


                      $sql3 ="INSERT INTO strdata(SOCIETE,AGENCEMARITIME,TDC,NAM,NDC,PLAQUE,JOIQL,JAAL,JOURDEPOTAG,ARPO,ARPV,ARPS,ARPA1SDNA,SDNA,RCEI,CDLENF,AUTRESDEPENSES,IMMIGRATIONDGM,FERI,DOUANE,NUMEROEDOUANE,BULLETIN,OCCLABO,REDRESSEMENTOCC,CAUTIONCO,PEAGELUFU,PEAGENOKI,PEAGEKENGE,PEAGEKASANGULU,ASSURANCE,FEUILLEDEROUTE,MITENDI,ANTIFRAUDE,DOUANEVILLE,BDLF,PONTPESE,REMBOURSEMENTLIENT)
                          VALUES('$societe','$agencemaritime','$tdc','$nam','$ndc','$plaque','$joiql','$jaal','$jourdepotag','$arpo','$arpv','$arps','$arpa1sdna','$sdna','$rcei','$cdlenf','$autresdepenses','$immigrationdgm','$feri','$douane','$numeroedouane','$bulletin','$occlabo','$redressementocc','$cautionco','$peagelufu','$peagenoki','$peagekenge','$peagekasangulu','$assurance','$feuillederoute','$mitendi','$antifraude','$douaneville','bdlf','$pontpese','$remboursementlient');";


                      $sql4 = "INSERT INTO costdata(CDDA,CDPL,CDTL,COUTDETRANSPORT,CDPDT,COUTDEFUMIGATION,CDPF,CDSF,CDF,CAUTION1,CAUTION2) VALUES('$cdda','$cdpl','$cdtl','$coutdetransport','$cdpdt','$coutdefumigation','$cdpf','$cdsf','$cdf','$caution1','$caution2');";


                          $result1 = mysqli_query($conn,$sql1);

                          if ($result1) 
                          {
                              $result2 = mysqli_query($conn,$sql2);
                              if ($result2) {
                                $result3=mysqli_query($conn,$sql3);
                                if ($result3) {
                                   $result4=mysqli_query($conn,$sql4);
                                   if ($result4) {

                                    $file = $_FILES['factureclient']['name'];
                                    $tmpname = $_FILES['factureclient']['tmp_name'];
                                    $size = $_FILES['factureclient']['size'];
                                    $error = $_FILES['factureclient']['error'];
                                    $type = $_FILES['factureclient']['type'];

                                    $fileext = explode('.', $file);
                                    $fileactext = strtolower(end($fileext));

                                      if ($error==0) {
                                        if ($size>70000) 
                                          {
                                            $filenewname = $id.".".$fileactext;
                                            $path = "uplods/".$filenewname; 
                                            move_uploaded_file($tmpname,$path);
                                               $ram = mysqli_insert_id($conn);
                                               $sql5 = "INSERT INTO  mdata(form_id,cid,did,nid,sid,file)VALUES('$id',$ram,$ram,$ram,$ram,'$path');";
                                               $result5 = mysqli_query($conn,$sql5);
                                               if ($result5) {
                                                  echo "data inserted with id".$id;
                                               }else
                                               {
                                                die("Error: code_r5");
                                               }
                                        }else
                                        {
                                          die("file size is too big");
                                        }
                                      }else{
                                        die("some error occur during upload file");
                                      }
                                                        
                                   }
                                   else
                                   {
                                    die("Error: code_R4");
                                   }
                                }
                                else
                                {
                                  die("error: code_R3");
                                }
                              }
                              else
                              {
                                die("error: code_R2");
                              }
                          }else{
                            die("error: code_R1");
                          }





               break;

   			default:
   					rd("index");
   				break;
   		}



   }
 ?>
