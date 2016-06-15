<?php

    session_start();
	include 'control.php';
	$p1= $_SESSION['p1'];
	$p2= $_SESSION['p2'];
	$p3= $_SESSION['p3'];
	$p4= $_SESSION['p4'];

	$_SESSION['preg1']= $_POST['preg1'];
	$_SESSION['preg2']= $_POST['preg2'];
	$_SESSION['preg3']= $_POST['preg3'];
	$_SESSION['preg4']= $_POST['preg4'];
	$_SESSION['preg5']= $_POST['preg5'];
	$_SESSION['preg6']= $_POST['preg6'];
	$_SESSION['sesiones']=$_SESSION['sesiones']+1;


?>
<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Preguntas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Acerca</a></li>
            <li><a href="#contact">Contacto</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="session_close.php">Cerrar sesión</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Preguntas</h1>
        <p>Evaluación</p>
        <table class="table">
            <thead >
              <tr class="active">
                <th>Pregunta</th>
                <th>tu respuesta</th>
                <th>respuesta correcta</th>
              </tr>
            </thead>

            <tbody>

       	<?php
       	        error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);

       			$link=mysql_connect("localhost", "root", "");
				mysql_select_db("arqui",$link) OR DIE ("Error: No es posible establecer la conexión");
       			$preguntas=0;
       			for($i=1;$i<=6;$i++)
       			{
       				$sql="SELECT pregunta,respuesta FROM pregunta WHERE id=".$_SESSION['p'.$i].";";
       				$result = mysql_query($sql);
              		$row = mysql_fetch_row($result);
              		$cadena='danger';
              		//echo strcmp($row[1],$_SESSION['preg'.$i]);
              		if(strcmp($row[1],$_SESSION['preg'.$i])==0)
              		{$cadena='success';$preguntas++;}

			       			echo '<tr class='.$cadena.'>';
			                  echo "<th>".$row[0]."</th>";
			                  echo "<th>".$_SESSION['preg'.$i]."</th>";
			                  echo "<td>".$row[1]."</td>";
			                echo "</tr>";
       			}
       			$ses=$_SESSION['sesiones'];
       			$pregu=$_SESSION['preguntas']+$preguntas;
       			$_SESSION['preguntas']=$pregu; 
       			$score=(($pregu)/($ses*6))*10;
       			$_SESSION['score']=$score;
       			//echo $ses."   ". $pregu."   ".$score."  ".$_SESSION['user'];
       			$que="UPDATE user SET SESIONES=".$ses.",PREGUNTAS_CORRECTAS=".$pregu.", score=".$score." WHERE nickname ='".$_SESSION['user']."';";
       			//echo $que;
       			$result = mysql_query($que); 
       			mysql_close($link);
       	?>
 
    <p>          <a class="btn btn-lg btn-success" href="inicio.php" role="button">Regresar</a>
      </div>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </body>
</html>
