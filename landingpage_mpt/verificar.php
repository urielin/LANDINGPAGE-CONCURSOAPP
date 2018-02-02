    <?php      

     $usuario = 'edwin';
     $clave = '123456';     

/*     $a=array($nombre,$apellido,$dni,$ciudad,$celular,$email,$titulo,$descripcion);
     print_r($a); 

     print "<script type='text/javascript'>alert('registrado correctamente');</script>";       */

     $nombreServerActual = $_SERVER['SERVER_NAME'];  

     if ($nombreServerActual=='localhost') {
        $serverName = "10.10.1.55";
        $connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"udesafiomovil", "PWD"=>"principal*123");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);

        $verificar = "
                select 
                  *
                from 
                  dbo.usuariosapp
                where
                  usuario='$usuario' and
                  clave='$clave'  
        ";

/*        $params = array();
        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );*/

        $logeo=sqlsrv_query($conn,$verificar/* , $params, $options */);                 

        $filas = mysqli_num_rows($logeo);



        if ($filas>0) {
          //header("location:../listado_usuarios.php");
          /*echo '<script>location.href = "listado_usuarios.php"</script>';*/
          echo "hola";
        } 
        else {
          echo "no";
          /*echo '<span> <i style=""> El usuario y/o clave son incorrectas, vuelva a intentarlo.</i></span>';*/
        }


        /*$datos = sqlsrv_fetch_array($logeo, SQLSRV_FETCH_NUMERIC);            */

/*        $sql = "SELECT * FROM Table_1";
        $params = array();
        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
        $stmt = sqlsrv_query( $conn, $sql , $params, $options );

        $row_count = sqlsrv_num_rows( $stmt );
           
        if ($row_count === false)
           echo "Error in retrieveing row count.";
        else
           echo $row_count;*/


     }

     else{
      
/*        $serverName = "10.10.1.55";    
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

                $id = "
                        select 
                          top 1 grupo_id 
                        from 
                          dbo.appmovil order by grupo_id desc
                ";

                $obtener_id= mssql_query($conn,$id);                                 
                $grupo_id = mssql_fetch_array($obtener_id, MSSQL_NUM)            
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

                if(sqlsrv_execute($infopersonal3)){                  
                      print "<script type='text/javascript'>alert('registrado correctamente');</script>";
                }else{                  
                      print "<script type='text/javascript'>alert('No fue registrado correctamente, vuelve a ingresar');</script>";
                }   


                $sql = "
                        insert into
                            dbo.inscripcion_concurso
                              (
                                  nombre, apellido, dni, ciudad, celular, email, titulo, descripcion,categoria

                              )
                        values
                              (
                                  '$nombre','$apellido','$dni','$ciudad','$celular','$email','$titulo','$descripcion','$categoria'

                              )
                ";


                $result=mssql_query($sql);                

                if($result){                  
                      print "<script type='text/javascript'>alert('registrado correctamente');</script>";
                }else{                  
                      print "<script type='text/javascript'>alert('No fue registrado correctamente, vuelve a ingresar');</script>";
                }
                mssql_close();*/

     }
    	
        /*print "<meta http-equiv=\"refresh\" content=\"0;URL='./'\">";    		*/

    ?>
