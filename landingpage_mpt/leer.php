    <?php
    $serverName = "10.10.1.55"; //serverName\instanceName
    $connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"sa", "PWD"=>"qwerty.123");
    // $connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"udesafiomovil", "PWD"=>"principal*123");
    // $conn = sqlsvr_connect( $serverName, $connectionInfo);
    // $conn = sqlsvr_connect( $serverName, $connectionInfo);
    // $conn = mssql_connect($serverName, 'sa', 'qwerty.123');
    // $connectionInfo = array( "Database"=>"Middle", "UID"=>"sasa", "PWD"=>"******");
    // $conn = sqlsrv_connect( $serverName, $connectionInfo);
    //
    // if( $conn ) {
    //      echo "Connection established.<br />";
    // }else{
    //      echo "Connection could not be established.<br />";
    //      die( print_r( sqlsrv_errors(), true));
    // }

    $conn = mssql_connect($serverName, 'udesafiomovil', 'principal*123');
    $conndb = mssql_select_db('BDCONCURSOAPP', $conn);
    // var_dump($conndb);
    		$nombre = $_POST['nombre'];
    		$apellido = $_POST['apellido'];
    		$dni = $_POST['dni'];
    		$ciudad = $_POST['ciudad'];
    		$celular = $_POST['celular'];
    		$email = $_POST['email'];
    		$titulo = $_POST['titulo'];
    		$descripcion = $_POST['descripcion'];

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
        // $sql = "
    		// 		insert into
    		// 			dbo.inscripcion_concurso
    		// 			  (
    		// 				  nombre, apellido, dni, ciudad, celular, email, titulo, descripcion
        //
    		// 			  )
    		// 		values
    		// 			  (
    		// 				  'nombre','apellido','71206269','ciudad','celular','email','titulo','descripcion'
    		// 			  )
    		// ";
        $result=mssql_query($sql);
        // var_dump($result);
        mssql_close();
    		// $inscripcion_concurso=sqlsvr_prepare($conn,$sql);
    		// sqlsvr_execute($inscripcion_concurso);

    		/*alert('registrado correctamente');*/

    		// echo "<script type='text/javascript'>alert('registrado correctamente');</script>";
        print "<meta http-equiv=\"refresh\" content=\"0;URL='./'\">";
    		// header("location:redireccion.html");

    ?>
