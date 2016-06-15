<?php
	include 'control.php';

	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$pass2 = $_POST["pass2"];
	if(strcmp($pass, $pass2)==0)
	{
		$row = altaUsuario($user, $pass);

		if($row==1){
			header("Location: login.php");
		}else{
			header("Location: registro.php");
		}
	}
	else
	{
			header("Location: registro.php");
	}
	
?>