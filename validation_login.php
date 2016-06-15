<?php
	include 'control.php';

	$user = $_POST["user"];
	$pass = $_POST["pass"];

	$row = validaUsuario($user, $pass);

	if($row==null){
		header("Location: login.php");
	}else{
		creaSesion($row[0], $row[1]);
		header("Location: inicio.php");
		//echo "bienvenido ".$_SESSION['user'];
	}
?>