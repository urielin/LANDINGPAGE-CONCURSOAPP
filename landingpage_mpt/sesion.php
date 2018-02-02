<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--     <meta name="description" content="">
    <meta name="author" content=""> -->
    
    <title>Login desafioapp</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <style type="text/css">
	body {
	      padding-top: 40px;
	      padding-bottom: 40px;
	      background-color: #eee;
	}
  	form.form-signin {
  	    max-width: 330px;
  	    padding: 15px;
  	    margin: 0 auto;
  	}
  </style>

  <body>

    <div class="container">
      <form class="form-signin" method="POST" action="verificar.php" >
        <h2 class="form-signin-heading" style="text-align:center;">INGRESAR</h2>

        <label for="usuario" class="sr-only">Usuario</label>        
        <input type="text" id="usuario" class="form-control" placeholder="Usuario" required autofocus>

        <label for="contraseña" class="sr-only">Contraseña</label>
        <input type="password" id="contraseña" class="form-control" placeholder="Contraseña" required>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme 
          </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
