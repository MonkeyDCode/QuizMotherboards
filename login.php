<!DOCTYPE html>
<html lang="en">
<head>
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="signin.css" rel="stylesheet">
    <meta charset="utf-8"/>
</head>

  <body>
      <div class="col-md-4">
      <div class="container">

      <form class="form-signin" method="POST" action="validation_login.php">
        <h2 class="form-signin-heading">Login :)</h2>
        <label for="inputNick" class="sr-only">Nick</label>
        <input type="text" id="inputNick"  name="user" tabindex="1" class="form-control" placeholder="Nickname" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" name="pass" tabindex="2" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme en este equipo
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>

    </div>
        </div>
  </body>
</html>
