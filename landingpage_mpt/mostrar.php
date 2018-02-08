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
      select * from concursoapp
   ";

   $obtener_todo=sqlsrv_query($conn,$obtener);     

   $representante = "
      select * from inforepresentante
   ";

   $representante_todo=sqlsrv_query($conn,$representante);                      
 }
 else {

  $serverName = "10.10.1.55";    
  $conn = mssql_connect($serverName, 'udesafiomovil', 'principal*123');
  $conndb = mssql_select_db('BDCONCURSOAPP', $conn);

          $obtener_todo = mssql_query('
            select * from concursoapp
            ');

          $representante_todo = mssql_query('
            select * from inforepresentante
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
  form.form-signin {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
  }
  .encabezado-desafio {
    background-image:url('images/app2.jpeg');
    height: 245px;
    background-attachment: fixed;
    background-size: 1814px 897.775px;
    background-position: 50% -285.62px;
  }
  .titulo_ins{
    visibility: visible;
    animation-name: fadeInLeft;
    text-align:center;
  }
  .desafio_pdf{
   display:flex;justify-content: space-between;padding-top: 60px;margin: auto;width: 89%; 
  }
  .generar_titulo{
    width: 100%;
    display: flex;
    justify-content: space-around;
  }
  .responsive_generar{
    display:flex;
    /*margin-left: 210px;*/
  }
  .sesion_pdf{
    display: flex;
    flex-direction: column-reverse;
  }
  .contenedor_pdf{
    /*margin-left: 5px;*/
    margin-left: -26px;
    margin-right: 5px;
  }
  @media (max-width: 767px) {
    .responsive_generar{
      display: block;
      margin: auto;
      width: 214px;
      /*margin: auto;
      width: 407px;*/
    }    
    .sesion_pdf{
      display: flex;
          flex-direction: column-reverse;
          width: 321px;
          margin: auto;
    }    
    .desafio_pdf {
         display: block; 
         padding-top: 0px;
    }
    .contenedor_pdf{
      margin-left: -15px;      
    }
    .boton_sesion {
        margin: auto;
    }
  }

  </style>

  <body>

  <div class="encabezado-desafio fullscreen landing parallax" data-img-width="2000" data-img-height="1325" data-diff="100">
    <div class="desafio_pdf">
      <div class="responsive_generar">
        <div> 
          <a href="../reportes/concursantes.php" target="_blank">
            <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                <i class="glyphicon glyphicon-save" ></i> GENERAR PDF
            </button>
          </a>                        
        </div>
        <div>
          <button type='button' class='btn btn-primary' id='' name='' data-toggle='modal' data-target='#modal-ver' >REPRESENTATES</button>  
        </div>
      </div>
      <div class="sesion_pdf dropdown" >
        <button class="boton_sesion btn btn-primary dropdown-toggle " type="button" data-toggle="dropdown">
        BIENVENIDO : <?php echo strtoupper($_SESSION['usuario']);?>
        <span class="caret"></span></button>

        <ul class="menu-app dropdown-menu" style="background: none;">
          <li>
            <a href="cerrar_sesion.php"  class="btn btn-primary" type="button" style="margin: 0px 0 10px;border-radius: 0px;">CERRAR SESION</a>              
          </li>            
        </ul>
      </div>            
    </div>      

  </div>

    <div class="contenedor-app container" >    

      <div class="encabezado">
        <div class="titulo_mostrar" style="text-align: center;height: 100%;width: 100%;margin: 3%;">
          <h2 class="titulo_ins wow fadeInLeft animated animated" >LISTA DE CONCURSANTES</h2>
        </div>
        <div>

        </div>        
      </div>

    </div>
   

    <div class="row " style="text-align:center;background:white;width: 90%;margin: auto;" >
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

    <div class="modal fade in" id="modal-ver" >
            <div class="modal-dialog" style="width:90%;margin:auto;margin-top: 24px;">
              <div class="modal-content">
                <div class="modal-header" class="margin: auto;text-align: center;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span></button>
                  <h4 class="modal-title" style="text-align: center;">REPRESENTANTES DE LA APLICACIÓN</h4>                                    
                </div>

                  <div class="modal-body">
                      <div class="generar_titulo " > 
                        <a href="../reportes/representantes.php" target="_blank">
                          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                              <i class="glyphicon glyphicon-save" ></i> GENERAR PDF
                          </button>
                        </a>                        
                      </div>
                      <div class="contenedor_pdf row" >
                          <div class="tabla_responsi col-md-12">
                            <table id="table_incidentes_todos" class="table table-bordered table-striped table-responsive">
                              <thead>
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

                                    while( $info = sqlsrv_fetch_array( $representante_todo, SQLSRV_FETCH_ASSOC) ) {

                                      $grupo_id_re = $info["grupo_id"];
                                      $nombre_re = $info["nombre"];
                                      $apellido_re = $info["apellido"];
                                      $celular_re = $info["celular"];
                                      $email_re = $info["email"];
                                      $categoria_re= $info["categoria"];
                                      $titulo_re = $info["titulo"];
                                      $descripcion_re = $info["descripcion"];           

                                      echo "
                                      <tr>
                                        <td>".$grupo_id_re."</td>
                                        <td>".$nombre_re."</td>
                                        <td>".$apellido_re."</td>
                                        <td>".$celular_re."</td>
                                        <td>".$email_re."</td>
                                        <td>".$categoria_re."</td>
                                        <td>".$titulo_re."</td>
                                        <td>".$descripcion_re."</td>                          
                                      </tr>
                                      ";                
                                    }  
                                  }
                                  else{

                                    while( $info = mssql_fetch_array($representante_todo) ) {

                                      $grupo_id_re = $info["grupo_id"];
                                      $nombre_re = $info["nombre"];
                                      $apellido_re = $info["apellido"];
                                      $celular_re = $info["celular"];
                                      $email_re = $info["email"];
                                      $categoria_re= $info["categoria"];
                                      $titulo_re = $info["titulo"];
                                      $descripcion_re = $info["descripcion"];           

                                      echo "
                                      <tr>
                                        <td>".$grupo_id_re."</td>
                                        <td>".$nombre_re."</td>
                                        <td>".$apellido_re."</td>
                                        <td>".$celular_re."</td>
                                        <td>".$email_re."</td>
                                        <td>".$categoria_re."</td>
                                        <td>".$titulo_re."</td>
                                        <td>".$descripcion_re."</td>                          
                                      </tr>
                                      ";                
                                    }

                                  }   

                                  ?>
                              </tbody>

                            </table>

                          </div>
                      </div>
                  </div>

              </div>
              <!-- /.modal-content -->
            </div>
              <!-- /.modal-dialog -->
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
