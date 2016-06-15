<?php
	include 'conect.php';

	function altaUsuario($user, $pass){
		$sql = "INSERT INTO USER (nickname,password) VALUES('$user','$pass');";
		$result = mysql_query($sql);
		return $result;
	}


	function validaUsuario($user, $pass){
		$sql = "SELECT id,nickname FROM user WHERE nickname = '$user' AND password = '$pass'; ";
		$result = mysql_query($sql);
		$count = mysql_num_rows($result);
		if($count == 1){
			$row = mysql_fetch_row($result);
			return $row;
		}
		else{
			return null;
		}
	}

	function creaSesion($id, $user){
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['user'] = $user;
		$sql = "SELECT sesiones,preguntas_correctas,score FROM user WHERE nickname = '$user'; ";
		$result2 = mysql_query($sql);
		$row2 = mysql_fetch_row($result2);
		$_SESSION['sesiones']=$row2[0];
		$_SESSION['preguntas']=$row2[1];
		$_SESSION['score']=$row2[2];
	}

	


	function isEmptyQuery($sql){
		$validate = mysql_query($sql);
		$count = mysql_num_rows($validate);
		if($count >= 1){
			return false;
		}else
			return true;
	}

	function cerrarSesion(){
		session_start();
		session_unset();
		session_destroy();
		header('Location:login.php');
	}

	function getInfoUsuario($id){
		$sql = "SELECT * FROM usuario WHERE id_usuario = $id;";
		$res = mysql_query($sql);
		$row = mysql_fetch_row($res);
		return $row;
	}
?>