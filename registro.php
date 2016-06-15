<!DOCTYPE html>
<html lang="en">
<head>
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="signin.css" rel="stylesheet">
    <meta charset="utf-8"/>
</head>

    <body>
        <div class="container">

      <form class="form-signin" method="POST" action="validation_up.php">
        <h2 class="form-signin-heading">Registro</h2>
          <hr>
          <p>
            Nickname
            <label for="inputNick" class="sr-only">Nickname</label>
        <input type="text" id="inputNick" name="user" class="form-control" placeholder="nickname" required autofocus>
        </p>
        
        <p>
            Contraseña
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Contraseña" required>
        </p>
          <p>
            Confirmar contraseña
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPasswordConfirm" name="pass2" class="form-control" placeholder="Contraseña" required>
        </p>
          
          <div class="checkbox">
          <label>
            <input type="checkbox" value="confirm"> Acepto los <a href="#">términos y condiciones</a>
          </label>
        </div>
            
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarme</button>
      </form>

    </div>
    </body>
</html>