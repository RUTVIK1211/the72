<?php
require_once 'dbconnection.php';
   if($_SERVER["REQUEST_METHOD"] == "POST")
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
   						$sql = "SELECT email FROM users WHERE email='$email' AND password='$password'";
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
                 extract($_POST);

                  $file = $_FILES['factureclient']['name'];
                  $tmpname = $_FILES['factureclient']['tmp_name'];
                  $size = $_FILES['factureclient']['size'];
                  $error = $_FILES['factureclient']['error'];
                 $type = $_FILES['factureclient']['type'];

                  $fileext = explode('.', $file);
                  $fileactext = strtolower(end($fileext));

                  $filenewname = $userid.".".$fileactext;
                  $path = "uplods/".$filenewname;
                  move_uploaded_file($tmpname,$path);


                   $sql  = "INSERT INTO user_testing(userid,dateactuelle,societe,agencemaritime,numberbobl,numberco,datereceptionbl,datearriveeco,redaac,ddljaac,ddscpl4jada,ddsr,jdpddsrmddsn,ddrc,drdrc,jdpddrcrmddrn,tdc,poids,nombredecolis,nam,cdt,ndc,plaque,telephone,joiql,jaal,jourdepotag,arpo,arpv,arps,arpa1sdna,sdna,aak,ddk,aal,rcei,cdlenf,cdda,cdpl,cdtl,autresdepenses,coutdetransport,cdpdt,coutdefumigation,cdpf,cdsf,cdf,immigrationdgm,feri,douane,numeroedouane,bulletin,occlabo,redressementocc,cautionco,peagelufu,peagenoki,peagekenge,peagekasangulu,assurance,feuillederoute,mitendi,antifraude,douaneville,bdlf,pontpese,caution1,caution2,remboursementlient,avancesurfacture,soldesurfacture,margesociete,factureclient)
                   VALUES ('$userid','$dateactuelle','$societe','$agencemaritime','$numberbobl','$numberco','$datereceptionbl','$datearriveeco','$redaac','$ddljaac','$ddscpl4jada','$ddsr','$jdpddsrmddsn','$ddrc','$drdrc','$jdpddrcrmddrn','$tdc','$poids','$nombredecolis','$nam','$cdt','$ndc','$plaque','$telephone','$joiql','$jaal','$jourdepotag','$arpo','$arpv','$arps','$arpa1sdna','$sdna','$aak','$ddk','$aal','$rcei','$cdlenf','$cdda','$cdpl','$cdtl','$autresdepenses','$coutdetransport','$cdpdt','$coutdefumigation','$cdpf','$cdsf','$cdf','$immigrationdgm','$feri','$douane','$numeroedouane','$bulletin','$occlabo','$redressementocc','$cautionco','$peagelufu','$peagenoki','$peagekenge','$peagekasangulu','$assurance','$feuillederoute','$mitendi','$antifraude','$douaneville','$bdlf','$pontpese','$caution1','$caution2','$remboursementlient','$avancesurfacture','$soldesurfacture','$margesociete','$path');";

                  // echo "data inserted with id".$id;
                  // echo '<pre>';
                  // die($sql);
                  $result = mysqli_query($conn,$sql);
                  if ($result) {
                      echo 'insert';
                  }else
                  {
                      echo("Error description: " . mysqli_error($conn));
                  }
                // echo '<pre>';
                 // print_r($_POST);
                 // die("the 72  half done");
                // die($cmonth);
                // var_dump($counter);

                     // $sql1 =  "INSERT INTO datedata(DATEACTUELLE,DATERECEPTIONBL,DATEARRIVEECO,DDLJAAC,DDSCPL4JADA,DDSR,DDRC,DRDRC,AAK,DDK,AAL)VALUES('$dateactuelle','$datereceptionbl','$datearriveeco','$ddljaac','$ddscpl4jada','$ddsr','$ddrc','$drdrc','$aak','$ddk','$aal');
                     // "

                     // $sql2 = "INSERT INTO ndata(NUMBERBL,NUMBERCO,REDAAC,JDPDDSRMDDSN,POIDS,NOMBREDECOLIS,CDT,TELEPHONE,AVANCESURFACTURE,SOLDESURFACTURE,MARGESOCIETE)VALUES($numberbl,$numberco,$redaac,$jdpddsrmddsn,$poids,$nombredecolis,$cdt,$telephone,$avancesurfacture,$soldesurfacture,$margesociete);";


                     //  $sql3 ="INSERT INTO strdata(SOCIETE,AGENCEMARITIME,TDC,NAM,NDC,PLAQUE,JOIQL,JAAL,JOURDEPOTAG,ARPO,ARPV,ARPS,ARPA1SDNA,SDNA,RCEI,CDLENF,AUTRESDEPENSES,IMMIGRATIONDGM,FERI,DOUANE,NUMEROEDOUANE,BULLETIN,OCCLABO,REDRESSEMENTOCC,CAUTIONCO,PEAGELUFU,PEAGENOKI,PEAGEKENGE,PEAGEKASANGULU,ASSURANCE,FEUILLEDEROUTE,MITENDI,ANTIFRAUDE,DOUANEVILLE,BDLF,PONTPESE,REMBOURSEMENTLIENT)
                     //      VALUES('$societe','$agencemaritime','$tdc','$nam','$ndc','$plaque','$joiql','$jaal','$jourdepotag','$arpo','$arpv','$arps','$arpa1sdna','$sdna','$rcei','$cdlenf','$autresdepenses','$immigrationdgm','$feri','$douane','$numeroedouane','$bulletin','$occlabo','$redressementocc','$cautionco','$peagelufu','$peagenoki','$peagekenge','$peagekasangulu','$assurance','$feuillederoute','$mitendi','$antifraude','$douaneville','bdlf','$pontpese','$remboursementlient');";


                     //  $sql4 = "INSERT INTO costdata(CDDA,CDPL,CDTL,COUTDETRANSPORT,CDPDT,COUTDEFUMIGATION,CDPF,CDSF,CDF,CAUTION1,CAUTION2) VALUES('$cdda','$cdpl','$cdtl','$coutdetransport','$cdpdt','$coutdefumigation','$cdpf','$cdsf','$cdf','$caution1','$caution2');";


                          // $result1 = mysqli_query($conn,$sql1);

                          // if ($result1)
                          // {
                          //     $result2 = mysqli_query($conn,$sql2);
                          //     if ($result2) {
                          //       $result3=mysqli_query($conn,$sql3);
                          //       if ($result3) {
                          //          $result4=mysqli_query($conn,$sql4);
                          //          if ($result4) {

                                    // $file = $_FILES['factureclient'['name';
                                    // $tmpname = $_FILES['factureclient'['tmp_name';
                                    // $size = $_FILES['factureclient'['size';
                                    // $error = $_FILES['factureclient'['error';
                                   // $type = $_FILES['factureclient'['type';

                                    // $fileext = explode('.', $file);
                                    // $fileactext = strtolower(end($fileext));

                                      // if ($error==0) {
                                      //   if ($size>70000)
                                      //     {
                                            // $filenewname = $id.".".$fileactext;
                                            // $path = "uplods/".$filenewname;
                                            // move_uploaded_file($tmpname,$path);
                                               // $ram = mysqli_insert_id($conn);
                                               // $sql5 = "INSERT INTO  mdata(form_id,cid,did,nid,sid,file)VALUES('$id',$ram,$ram,$ram,$ram,'$path');";
                                               // $result5 = mysqli_query($conn,$sql5);
                                               // if ($result5) {
                                               //    echo "data inserted with id".$id;
                                               // }else
                                               // {
                                               //  die("Error: code_r5");
                                               // }
                                      //   }else
                                      //   {
                                      //     die("file size is too big");
                                      //   }
                                      // }else{
                                      //   die("some error occur during upload file");
                                      // }

                                   // }
                          //          else
                          //          {
                          //           die("Error: code_R4");
                          //          }
                          //       }
                          //       else
                          //       {
                          //         die("error: code_R3");
                          //       }
                          //     }
                          //     else
                          //     {
                          //       die("error: code_R2");
                          //     }
                          // }else{
                          //   die("error: code_R1");
                          // }
               break;
               case "updatedata":
                     // echo count($_POST)." data founded";
                     // echo "<pre>";
                     // print_r($_POST);
                     // die();
                      extract($_POST);

                    $sql = "UPDATE user_testing SET dateactuelle='$dateactuelle',societe='$societe',agencemaritime='$agencemaritime',numberbobl='$numberbobl',numberco='$numberco',datereceptionbl='$datereceptionbl',datearriveeco='$datearriveeco',redaac='$redaac',ddljaac='$ddljaac',ddscpl4jada='$ddscpl4jada',ddsr='$ddsr',jdpddsrmddsn='$jdpddsrmddsn',ddrc='$ddrc',drdrc='$drdrc',jdpddrcrmddrn='$jdpddrcrmddrn',tdc='$tdc',poids='$poids',nombredecolis='$nombredecolis',nam='$nam',cdt='$cdt',ndc='$ndc',plaque='$plaque',telephone='$telephone',joiql='$joiql',jaal='$jaal',jourdepotag='$jourdepotag',arpo='$arpo',arpv='$arpv',arps='$arps',arpa1sdna='$arpa1sdna',sdna='$sdna',aak='$aak',ddk='$ddk',aal='$aal',rcei='$rcei',cdlenf='$cdlenf',cdda='$cdda',cdpl='$cdpl',cdtl='$cdtl',autresdepenses='$autresdepenses',coutdetransport='$coutdetransport',cdpdt='$cdpdt',coutdefumigation='$coutdefumigation',cdpf='$cdpf',cdsf='$cdsf',cdf='$cdf',immigrationdgm='$immigrationdgm',feri='$feri',douane='$douane',numeroedouane='$numeroedouane',bulletin='$bulletin',occlabo='$occlabo',redressementocc='$redressementocc',cautionco='$cautionco',peagelufu='$peagelufu',peagenoki='$peagenoki',peagekenge='$peagekenge',peagekasangulu='$peagekasangulu',assurance='$assurance',feuillederoute='$feuillederoute',mitendi='$mitendi',antifraude='$antifraude',douaneville='$douaneville',bdlf='$bdlf',pontpese='$pontpese',caution1='$caution1',caution2='$caution2',factureclient='$factureclient',remboursementlient='$remboursementlient',avancesurfacture='$avancesurfacture',soldesurfacture='$soldesurfacture',margesociete='$margesociete' WHERE userno=$userno ";

                    $result = mysqli_query($conn,$sql);
                    if ($result) {
                      header("location: view.php");
                    }
                    break;
   			default:
   					rd("index");
   				break;
   		}



   }
 ?>
