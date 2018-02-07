    <?php
require "mailer.php";
require "email_message.php";
/*    session_start();

    if (isset($_SESSION['usuario'])) {
    */
     $titulo = $_POST['titulo'];
     $descripcion = $_POST['descripcion'];

     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];
     $dni = $_POST['dni'];
     $ciudad = $_POST['ciudad'];
     $celular = $_POST['celular'];
     $email = $_POST['email'];
     $categoria = $_POST['categoria'];

     $nombre2 = $_POST['nombre2'];
     $apellido2 =$_POST['apellido2'];
     $dni2 =  $_POST['dni2'];
     $ciudad2 =$_POST['ciudad2'];
     $celular2 =$_POST['celular2'];
     $email2 = $_POST['email2'];
     $categoria2 =  $_POST['categoria2'];

     $nombre3 = $_POST['nombre3'];
     $apellido3 =$_POST['apellido3'];
     $dni3 =  $_POST['dni3'];
     $ciudad3 =$_POST['ciudad3'];
     $celular3 =$_POST['celular3'];
     $email3 = $_POST['email3'];
     $categoria3 =  $_POST['categoria3'];

     $nombre4 = $_POST['nombre4'];
     $apellido4 =$_POST['apellido4'];
     $dni4 =  $_POST['dni4'];
     $ciudad4 =$_POST['ciudad4'];
     $celular4 =$_POST['celular4'];
     $email4 = $_POST['email4'];
     $categoria4 =  $_POST['categoria4'];

     $nombre5 = $_POST['nombre5'];
     $apellido5 =$_POST['apellido5'];
     $dni5 =  $_POST['dni5'];
     $ciudad5 =$_POST['ciudad5'];
     $celular5 =$_POST['celular5'];
     $email5 = $_POST['email5'];
     $categoria5 =  $_POST['categoria5'];

/*     $a=array($nombre,$apellido,$dni,$ciudad,$celular,$email,$titulo,$descripcion);
     print_r($a);

<<<<<<< HEAD
     print "<script type='text/javascript'>alert('registrado correctamente');</script>";       */

     $nombreServerActual = $_SERVER['SERVER_NAME'];

     if ($nombreServerActual=='localhost') {
/*        $serverName = "EDWIN-PC\SQLEXPRESS";
        $connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"sa", "PWD"=>"123456");*/
        $serverName = "10.10.1.55";
        $connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"udesafiomovil", "PWD"=>"principal*123");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);

        $sql = "
                insert into
                    dbo.appmovil
                      (
                          titulo, descripcion
                      )
                values
                      (
                          '$titulo','$descripcion'
                      )
        ";

        $appmovil=sqlsrv_prepare($conn,$sql);
        sqlsrv_execute($appmovil);

        $id = "
                select
                  top 1 grupo_id
                from
                  dbo.appmovil order by grupo_id desc
        ";

        $obtener_id=sqlsrv_query($conn,$id);
        $grupo_id = sqlsrv_fetch_array($obtener_id, SQLSRV_FETCH_NUMERIC);
        $grupo_id=$grupo_id[0];

        if ($nombre5!='') {

          $sql5 = "
                  insert into
                      dbo.infopersonal
                        (
                            grupo_id, nombre, apellido, dni, ciudad, celular, email, categoria
                        )
                  values
                        (
                          '$grupo_id','$nombre4','$apellido4','$dni4','$ciudad4','$celular4','$email4','$categoria4'
                        ),
                        (
                          '$grupo_id','$nombre5','$apellido5','$dni5','$ciudad5','$celular5','$email5','$categoria5'
                        )
          ";

          $infopersonal5=sqlsrv_prepare($conn,$sql5);
          sqlsrv_execute($infopersonal5);
        }
        else if($nombre4!='') {
          $sql4 = "
                  insert into
                      dbo.infopersonal
                        (
                            grupo_id, nombre, apellido, dni, ciudad, celular, email, categoria
                        )
                  values
                        (
                          '$grupo_id','$nombre4','$apellido4','$dni4','$ciudad4','$celular4','$email4','$categoria4'
                        )
          ";

          $infopersonal4=sqlsrv_prepare($conn,$sql4);
          sqlsrv_execute($infopersonal4);
        }

        $sql3 = "
                insert into
                    dbo.infopersonal
                      (
                          grupo_id, nombre, apellido, dni, ciudad, celular, email, categoria
                      )
                values
                      (
                        '$grupo_id','$nombre','$apellido','$dni','$ciudad','$celular','$email','$categoria'
                      ),
                      (
                        '$grupo_id','$nombre2','$apellido2','$dni2','$ciudad2','$celular2','$email2','$categoria2'
                      ),
                      (
                        '$grupo_id','$nombre3','$apellido3','$dni3','$ciudad3','$celular3','$email3','$categoria3'
                      )
        ";

        $infopersonal3=sqlsrv_prepare($conn,$sql3);
        sqlsrv_execute($infopersonal3);
/*        if(sqlsrv_execute($infopersonal3)){
              print "<script type='text/javascript'>alert('registrado correctamente');</script>";
        }else{
              print "<script type='text/javascript'>alert('No fue registrado correctamente, vuelve a ingresar');</script>";
        }            */

     }
     else{

        $serverName = "10.10.1.55";
        $conn = mssql_connect($serverName, 'udesafiomovil', 'principal*123');
        $conndb = mssql_select_db('BDCONCURSOAPP', $conn);

                $sql = "
                insert into
                    dbo.appmovil
                      (
                          titulo, descripcion
                      )
                values
                      (
                          '$titulo','$descripcion'
                      )
                ";

                $appmovil=mssql_query($sql);

                $id = mssql_query('select
                                  top 1 grupo_id
                                from
                                  dbo.appmovil order by grupo_id desc');

                $grupo_id = mssql_fetch_assoc($id);
                $grupo_id=$grupo_id['grupo_id'];

                if ($nombre5!='') {

                  $sql5 = "
                          insert into
                              dbo.infopersonal
                                (
                                    grupo_id, nombre, apellido, dni, ciudad, celular, email, categoria
                                )
                          values
                                (
                                  '$grupo_id','$nombre4','$apellido4','$dni4','$ciudad4','$celular4','$email4','$categoria4'
                                ),
                                (
                                  '$grupo_id','$nombre5','$apellido5','$dni5','$ciudad5','$celular5','$email5','$categoria5'
                                )
                  ";

                  $infopersonal5=mssql_query($sql5);

                }
                else if($nombre4!='') {
                  $sql4 = "
                          insert into
                              dbo.infopersonal
                                (
                                    grupo_id, nombre, apellido, dni, ciudad, celular, email, categoria
                                )
                          values
                                (
                                  '$grupo_id','$nombre4','$apellido4','$dni4','$ciudad4','$celular4','$email4','$categoria4'
                                )
                  ";

                  $infopersonal4=mssql_query($sql4);

                }

                $sql3 = "
                        insert into
                            dbo.infopersonal
                              (
                                  grupo_id, nombre, apellido, dni, ciudad, celular, email, categoria
                              )
                        values
                              (
                                '$grupo_id','$nombre','$apellido','$dni','$ciudad','$celular','$email','$categoria'
                              ),
                              (
                                '$grupo_id','$nombre2','$apellido2','$dni2','$ciudad2','$celular2','$email2','$categoria2'
                              ),
                              (
                                '$grupo_id','$nombre3','$apellido3','$dni3','$ciudad3','$celular3','$email3','$categoria3'
                              )
                ";


                $infopersonal3=mssql_query($sql3);

                /*if(sqlsrv_execute($infopersonal3)){
                      print "<script type='text/javascript'>alert('registrado correctamente');</script>";
                }else{
                      print "<script type='text/javascript'>alert('No fue registrado correctamente, vuelve a ingresar');</script>";
                }   */

                mssql_close();

     }
/*        print "<script type='text/javascript'>alert('registrado correctamente');</script>";
        print "<meta http-equiv=\"refresh\" content=\"0;URL='./'\">";    		    */
        echo file_get_contents("./message_confirmation.php",FILE_USE_INCLUDE_PATH);
        $nombres=$nombre;
        $apellidos=$apellido;
        $nombreapp=$titulo;
        // $nombres="Urielapp";
        // $apellidos="Urielapp";
        // $nombreapp="Urielapp";
        $email_message=email_message($nombres,$apellidos,$nombreapp);
        // echo $email_message;
        //ENVIAR MENSAJE A PERSONA REGISTRADA
        $msg = $email_message;
        $subj = 'Registro Exitoso Desafio Movil 2018';
        // $to = 'urieljnvp@gmail.com';
        $to = $email;
        $from = 'desafiomovil2018@munitacna.gob.pe';
        $name = 'Desafiomovil2018';
        //
        if (smtpmailer($to, $from, $name, $subj, $msg)) {
          echo 'Yippie, message send via Gmail';
        } else {
          if (!smtpmailer($to, $from, $name, $subj, $msg, false)) {
            if (!empty($error)) echo $error;
          } else {
            echo 'Yep, the message is send (after doing some hard work)';
          }
        }
/*    }else{
      print "<meta http-equiv=\"refresh\" content=\"0;URL='login.php'\">";
    }*/

    ?>
