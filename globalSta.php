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
        <p>Estás loggeado cómo <?php echo $_SESSION['user']?></p>
        <p>LOS MEJORES!!</p>
        <p>
          <table class="table">
            <thead >
              <tr class="active">
                <th>#</th>
                <th>Nickname</th>
                <th>score</th>
              </tr>
            </thead>

            <tbody>
              <?php
                error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
                include 'conect.php';
              $sql = "SELECT nickname,score FROM user WHERE 1 order by score desc ";
              $result2 = mysql_query($sql);
              $row2 = mysql_fetch_row($result2);
              $limit=5;         
                $count = mysql_num_rows($result2);
                    if($count >= 5){
                      $limit=5;
                    }
                    else{
                      $limit=$count;
                    }
              for ($i=1;$i<=$limit;$i++)
              {
                echo '<tr class="info">';
                  echo "<th>".$i."</th>";
                  echo "<th>".$row2[0]."</th>";
                  echo "<td>".$row2[1]."</td>";
                echo "</tr>";
                $row2 = mysql_fetch_row($result2);
              }
              ?>
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
