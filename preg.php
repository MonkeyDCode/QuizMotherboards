<?php
    session_start();
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
        <p>Juego de preguntas.</p>
        <form method="POST" action="validation_preg.php"> 
       	<?php
       			include 'conect.php';
       			$sql = "SELECT pregunta,id FROM pregunta where 1 order by rand(); ";
       			$result2 = mysql_query($sql);
	            $row2 = mysql_fetch_row($result2);
	            $limit=6;         
	            $count = mysql_num_rows($result2);
	            for ($i=1;$i<=$limit;$i++)
	            {
	            	echo "<p>";
	            			$_SESSION['p'.$i]=$row2[1];
	            	echo "<h2>".$row2[0]."</h2>";
	            	$sql2 = "SELECT respuesta FROM pregunta where id=".$row2[1].";";
	            	$res= mysql_query($sql2);
	            	$ren= mysql_fetch_row($res);
	            	$respuestas[0]=$ren[0];
	            	$sql3 = "SELECT resp FROM respuesta where id_pregunta=".$row2[1].";";
	            	$res3= mysql_query($sql3);
	            	$ren3= mysql_fetch_row($res3);
	            	for($j=1;$j<4;$j++)
	            	{
	            		$respuestas[$j]=$ren3[0];
	            		$ren3= mysql_fetch_row($res3);
	            	}
	            	shuffle($respuestas);
	            	for($k=0;$k<4;$k++)
	            	{
	            		echo "<input type='radio' name='preg".$i."' value='".$respuestas[$k]."'>".$respuestas[$k]."<br>\n";
	            	}
	                echo "</p>";
	                $row2 = mysql_fetch_row($result2);

	            }

       	?>
       	<button class="btn btn-lg btn-primary btn-block" type="submit">Evaluar</button>

        </form>  
        </p>
      </div>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </body>
</html>
