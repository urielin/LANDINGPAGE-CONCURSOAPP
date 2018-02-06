<?php 

session_start();

if (isset($_SESSION['usuario'])) {?>

<?php 
$nombreServerActual = $_SERVER['SERVER_NAME'];  

if ($nombreServerActual=='localhost') {

/*   $serverName = "EDWIN-PC\SQLEXPRESS";
   $connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"sa", "PWD"=>"123456");*/
   $serverName = "10.10.1.55";
   $connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"udesafiomovil", "PWD"=>"principal*123");
   $conn = sqlsrv_connect( $serverName, $connectionInfo);

   $obtener = "
      select a.grupo_id,i.nombre,i.apellido,i.celular,i.email,i.categoria,a.titulo,a.descripcion from appmovil a inner join infopersonal i on a.grupo_id=i.grupo_id
   ";

   $obtener_todo=sqlsrv_query($conn,$obtener);                      
 }
 else {

  $serverName = "10.10.1.55";    
  $conn = mssql_connect($serverName, 'udesafiomovil', 'principal*123');
  $conndb = mssql_select_db('BDCONCURSOAPP', $conn);

          $obtener_todo = mssql_query('
            select a.grupo_id,i.nombre,i.apellido,i.celular,i.email,i.categoria,a.titulo,a.descripcion from appmovil a inner join infopersonal i on a.grupo_id=i.grupo_id  
            ');
          
  } 

 ?>

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
    <link href="css/css-index-yellow.css" rel="stylesheet" media="screen">
    <link href="css/css-app-yellow.css" rel="stylesheet" media="screen">   

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">    

    <!-- <a href="cerrar.php"  class="btn btn-lg btn-primary btn-block" type="button" >Cerrar Sesion</a> -->
  </head>

  <style type="text/css">
  body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #white;
  }
    form.form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
  </style>

  <body>

    <div class="contenedor-app container">    

    <div class="encabezado">
      <div >
        <h2 class="wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft; text-align:center;">LISTA DE INSCRITOS</h2>
      </div>
      <div>
        <div class="dropdown" >
          <button class="boton_sesion btn btn-primary dropdown-toggle " type="button" data-toggle="dropdown">
          USUARIO : <?php echo strtoupper($_SESSION['usuario']);?>
          <span class="caret"></span></button>

          <ul class="menu-app dropdown-menu">
            <li>
              <a href="cerrar_sesion.php"  class="btn btn-primary" type="button" style="margin: 0px 0 10px;border-radius: 0px;">CERRAR SESION</a>              
            </li>            
          </ul>
        </div>        
      </div>

    </div>
   

    <div class="row " style="text-align:center;" >
        <div class="tabla_responsi col-md-12 " >
          <table id="table_incidentes" class="table table-bordered table-striped ">
              <thead >
                <tr>          
                  <th>Grupo</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Celular</th>
                  <th>Email</th>
                  <th>Categoria</th>
                  <th>Titulo</th>
                  <th>Descripcion</th>          
                </tr>
              </thead>
              <tbody>
                  <?php

                  if ($nombreServerActual=='localhost') {

                    while( $row = sqlsrv_fetch_array( $obtener_todo, SQLSRV_FETCH_ASSOC) ) {

                      $grupo_id = $row["grupo_id"];
                      $nombre = $row["nombre"];
                      $apellido = $row["apellido"];
                      $celular = $row["celular"];
                      $email = $row["email"];
                      $categoria= $row["categoria"];
                      $titulo = $row["titulo"];
                      $descripcion = $row["descripcion"];           

                      echo "
                      <tr>
                        <td>".$grupo_id."</td>
                        <td>".$nombre."</td>
                        <td>".$apellido."</td>
                        <td>".$celular."</td>
                        <td>".$email."</td>
                        <td>".$categoria."</td>
                        <td>".$titulo."</td>
                        <td>".$descripcion."</td>                          
                      </tr>
                      ";                
                    }  
                  }
                  else{

                    while( $row = mssql_fetch_array($obtener_todo) ) {

                      $grupo_id = $row["grupo_id"];
                      $nombre = $row["nombre"];
                      $apellido = $row["apellido"];
                      $celular = $row["celular"];
                      $email = $row["email"];
                      $categoria= $row["categoria"];
                      $titulo = $row["titulo"];
                      $descripcion = $row["descripcion"];           

                      echo "
                      <tr>
                        <td>".$grupo_id."</td>
                        <td>".$nombre."</td>
                        <td>".$apellido."</td>
                        <td>".$celular."</td>
                        <td>".$email."</td>
                        <td>".$categoria."</td>
                        <td>".$titulo."</td>
                        <td>".$descripcion."</td>                          
                      </tr>
                      ";                
                    }

                  }   

                  ?>
              </tbody>


          </table>

        </div>
    </div>

    </div> <!-- /container -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
  

<?php
}else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL='login.php'\">";       
}
?>
