<?php
	$handle= $_POST['userEmail'];
	$pswrd= $_POST['usurePassword'];

	if($handle=="2017PGD" && $pswrd=="PGD2017"){
		session_start();
		 $_SESSION["status"] = "ADMIN";
		 header('location:index.php');
	}else{
		echo "<h1>!!!!!!INVALID!!!!!!!!!, Log In Fail.</h1>";
	}
?>