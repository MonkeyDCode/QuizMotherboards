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
        <p>Motherboards</p>
        <p>
          <table class="table">
            <thead >
              <tr class="active">
                <th>Usuario</th>
                <th>Juegos jugados</th>
                <th>Preguntas correctas</th>
                <th>Score</th>
              </tr>
            </thead>
            <tbody>
              <tr class="info">
                <th> <?php echo $_SESSION['user']?></th>
                <td><?php echo $_SESSION['sesiones']?></td>
                <td><?php echo $_SESSION['preguntas']?></td>
                <td><?php echo $_SESSION['score']?></td>
              </tr>
            </tbody>
          </table>
          
        </p>
        <p>          <a class="btn btn-lg btn-success" href="inicio.php" role="button">Regresar</a>
        </p>
      </div>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </body>
</html>
