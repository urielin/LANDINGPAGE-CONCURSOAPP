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
  	  background: #eee !important;
  	}

  	.wrapper {
  	  margin-top: 80px;
  	  margin-bottom: 80px;
  	}

  	.form-signin {
  	  max-width: 380px;
  	  padding: 15px 35px 45px;
  	  margin: 0 auto;
  	  background-color: #fff;
  	  border: 1px solid rgba(0, 0, 0, 0.1);
  	}
  	.form-signin .form-signin-heading,
  	.form-signin .checkbox {
  	  margin-bottom: 30px;
  	}
  	.form-signin .checkbox {
  	  font-weight: normal;
  	}
  	.form-signin .form-control {
  	  position: relative;
  	  font-size: 16px;
  	  height: auto;
  	  padding: 10px;
  	  -webkit-box-sizing: border-box;
  	  -moz-box-sizing: border-box;
  	  box-sizing: border-box;
  	}
  	.form-signin .form-control:focus {
  	  z-index: 2;
  	}
  	.form-signin input[type="text"] {
  	  margin-bottom: -1px;
  	  border-bottom-left-radius: 0;
  	  border-bottom-right-radius: 0;
  	}
  	.form-signin input[type="password"] {
  	  margin-bottom: 20px;
  	  border-top-left-radius: 0;
  	  border-top-right-radius: 0;
  	}
  </style>

  <body>   

    <div class="wrapper container">
      <form class="form-signin">      
        <h2 class="form-signin-heading" style="text-align:center;">Ingresar Sesión</h2>

        <label for="usuario" class=" sr-only">Usuario</label>        
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus>

        <label for="clave" class="sr-only">Contraseña</label>
        <input type="password" id="clave" name="clave"  class="form-control " placeholder="Clave" required>

        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="javascript:verificar();">Ingresar</button>

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
