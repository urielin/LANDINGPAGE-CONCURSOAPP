<?php
	
	/*$mysqli=new mysqli("localhost","root","password","excel"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}*/
$serverName = "10.10.1.55"; //serverName\instanceName
$connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"sa", "PWD"=>"qwerty.123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}	

/*$servidor = "10.10.1.55";
$database = "excel";
$info = array('Database'=>$database);
$cn = sqlsrv_connect($servidor, $info);*/

?>