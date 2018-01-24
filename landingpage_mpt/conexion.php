<?php

$nombreServerActual = $_SERVER['SERVER_NAME'];	

if ($nombreServerActual=='localhost') {

	$serverName = "10.10.1.55"; 
	$connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"udesafiomovil", "PWD"=>"principal*123");
	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	if( $conn ) {
	     echo "Conexión establecida.<br />";
	}else{
	     echo "Conexión no se pudo establecer.<br />";
	     die( print_r( sqlsrv_errors(), true));
	}
}
else{
	
	$serverName = "10.10.1.55"; 
	$conn = mssql_connect($serverName, 'udesafiomovil', 'principal*123');
	$conndb = mssql_select_db('BDCONCURSOAPP', $conn);
	var_dump($conndb);
	if( $conn ) {
	     echo "Conexión establecida.<br />";
	}else{
	     echo "Conexión no se pudo establecer.<br />";
	     die( print_r( sqlsvr_errors(), true));
	}		
}

?>
