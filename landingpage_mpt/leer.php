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
		
		
		/*$sql = "INSERT INTO productos (nombre, precio, existencia) VALUE('$nombre','$precio','$existencia')";*/
		$sql = "
				insert into 
					dbo.inscripcion_concurso
					  (
						  nombre, apellido, dni, ciudad, celular, email
						  
					  )
				values
					  (
						  '$nombre','$apellido','$dni','$ciudad','$celular','$email'			  						  	  				  			 
						  
					  )  
		";

		$inscripcion_concurso=sqlsrv_prepare($conn,$sql);		
		sqlsrv_execute($inscripcion_concurso);

		header("location:app.html");
		/*
		if(sqlsrv_execute($recurso)){
		echo"Agregado correctamente";
		}
		else
		{
		echo"No Agregado";
		}*/
		//$result = $this->db_b->query($sql);
		/*$result = $mysqli->query($sql);*/
		
	
	
	/*alert('registrado correctamente');*/
	
?>