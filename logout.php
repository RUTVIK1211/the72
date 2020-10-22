<?php
session_start();
if ($_SESSION['email']) {
	unset($_SESSION['email']);
	session_destroy();
	header("Location: index.php");
}
?>
