    <?php

     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];
     $dni = $_POST['dni'];
     $ciudad = $_POST['ciudad'];
     $celular = $_POST['celular'];
     $email = $_POST['email'];
     $titulo = $_POST['titulo'];
     $descripcion = $_POST['descripcion'];

    $nombreServerActual = $_SERVER['SERVER_NAME'];  

     if ($nombreServerActual=='localhost') {
      $serverName = "10.10.1.55";
      $connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"udesafiomovil", "PWD"=>"principal*123");
      $conn = sqlsrv_connect( $serverName, $connectionInfo);
            $sql = "
                    insert into 
                        dbo.inscripcion_concurso
                          (
                              nombre, apellido, dni, ciudad, celular, email, titulo, descripcion
                                
                          )
                    values
                          (
                              '$nombre','$apellido','$dni','$ciudad','$celular','$email','$titulo','$descripcion'
                              
                          )  
            ";

            $inscripcion_concurso=sqlsrv_prepare($conn,$sql);       
            sqlsrv_execute($inscripcion_concurso);   
     }
     else{
        $serverName = "10.10.1.55";    
        $conn = mssql_connect($serverName, 'udesafiomovil', 'principal*123');
        $conndb = mssql_select_db('BDCONCURSOAPP', $conn);
                $sql = "
                        insert into
                            dbo.inscripcion_concurso
                              (
                                  nombre, apellido, dni, ciudad, celular, email, titulo, descripcion

                              )
                        values
                              (
                                  '$nombre','$apellido','$dni','$ciudad','$celular','$email','$titulo','$descripcion'

                              )
                ";

        $result=mssql_query($sql);        
        mssql_close();
     }

    		
    	print "<script type='text/javascript'>alert('registrado correctamente');</script>";
        print "<meta http-equiv=\"refresh\" content=\"0;URL='./'\">";    		

    ?>
