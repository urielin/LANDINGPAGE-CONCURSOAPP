<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Login desafioapp</title>    
    <link href="css/bootstrap.min.css" rel="stylesheet">    
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
      <form class="form-signin">
      <!-- <form class="form-signin" method="POST" action="verificar.php" > -->
        <h2 class="form-signin-heading" style="text-align:center;">INGRESAR</h2>

        <label for="usuario" class="sr-only">Usuario</label>        
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus>

        <label for="clave" class="sr-only">Contraseña</label>
        <input type="password" id="clave" name="clave"  class="form-control" placeholder="Clave" required>

<!--         <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme 
          </label>
        </div> -->

        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="javascript:verificar();">Registrarse</button>

        <div class="form-group row justify-content-center"  id="verificado" style="font-weight:bold;margin-left: 0px; color:red;">
        <div></div>

        <script language="javascript" src="js/jquery.js"></script>

        <script>

          function verificar(){              
            var usuario = $("#usuario").val();
            var clave = $("#clave").val();

            $.post("verificar.php", { 'usuario': usuario,'clave':clave }, function(data){
            $("#verificado").html(data);
            });     
          }

        </script>

      </form>

    </div>

  </body>
</html>
