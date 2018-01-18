    <?php
    $serverName = "10.10.1.55"; //serverName\instanceName
    $connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"sa", "PWD"=>"qwerty.123");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    	
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

    		$inscripcion_concurso=sqlsrv_prepare($conn,$sql);		
    		sqlsrv_execute($inscripcion_concurso);
    		
    		/*alert('registrado correctamente');*/

    		echo "<script type='text/javascript'>alert('registrado correctamente');</script>";
    		header("location:redireccion.html");
    		
    ?>

