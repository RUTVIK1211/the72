<?php
	require_once 'dbconnection.php';
	$id = $_POST['id'];
	$sql =  "SELECT * FROM user_testing WHERE userno=$id";

	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);


	$output = "<form>
		<input type='text' value='".$data['dateactuelle'] ."'/>
	</form>";
	echo ($output);
	// echo "<pre>";
	// print_r($data);
	// die("moj ma revu ne moj ma khavu");
 ?>
