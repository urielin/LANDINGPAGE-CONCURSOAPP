<?php 

	require_once('../lib/pdf/mpdf.php');

	$nombreServerActual = $_SERVER['SERVER_NAME'];  

	if ($nombreServerActual=='localhost') {

	/*   $serverName = "EDWIN-PC\SQLEXPRESS";
	   $connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"sa", "PWD"=>"123456");*/
	   $serverName = "10.10.1.55";
	   $connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"udesafiomovil", "PWD"=>"principal*123");
	   $conn = sqlsrv_connect( $serverName, $connectionInfo);

	   $representante = "
	      select * from inforepresentante
	   ";

	   $obtener_todo=sqlsrv_query($conn,$representante);                      
	 }
	 else {

	  $serverName = "10.10.1.55";    
	  $conn = mssql_connect($serverName, 'udesafiomovil', 'principal*123');
	  $conndb = mssql_select_db('BDCONCURSOAPP', $conn);

    $obtener_todo = mssql_query('
      select * from inforepresentante
      ');
	          
	  } 	 

	$html ='    
    <header class="clearfix">
      <table width="100%" border="0" style="height:  100px;">
        <tbody>
            <tr>
              <td valign="center" style="background:rgb(133, 50, 78); padding: 0px;" bgcolor="#85324e"><img src="../images/escudotacna.png" height="90px"></td>
              <td bgcolor="#85324e" style="background:rgb(133, 50, 78);padding: 0px;text-align:left;padding-top: 40px;" width="85%" align="left" valign="center" ><b><font color="#FFFFFF">Municipalidad Provincial de Tacna</font></b></td>
              <td valing="center" style="background:rgb(133, 50, 78);padding: 0px;" bgcolor="#85324e" align="right"><img src="../images/logo2.png"></td>
            </tr>
        </tbody>
      </table>
    </header>
    <h1>REPRESENTANTES DE LA APLICACIÓN</h1>
    <main>
      <table>
        <thead>
          <tr>
            <th class="representante">Grupo</th>
            <th class="representante">Nombre</th>
            <th class="representante">Apellido</th>
            <th class="representante">Celular</th>
            <th class="representante">Email</th>
            <th class="representante">Categoria</th>
            <th class="representante">Titulo</th>            
            <th style="width:260px;text-align:center;" class="ancho_descripcion representante">Descripcion</th>            
          </tr>
        </thead>
        <tbody>';       

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

          	$html .= '<tr>
			            <td class="representante">'.$grupo_id.'</td>
			            <td class="representante">'.$nombre.'</td>
			            <td class="representante">'.$apellido.'</td>
			            <td class="representante">'.$celular.'</td>
			            <td class="representante">'.$email.'</td>
			            <td class="representante">'.$categoria.'</td>
			            <td class="representante">'.$titulo.'</td>
			            <td class="representante">'.$descripcion.'</td>
			          </tr>';              
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

            $html .= '<tr>
                  <td class="representante">'.$grupo_id.'</td>
                  <td class="representante">'.$nombre.'</td>
                  <td class="representante">'.$apellido.'</td>
                  <td class="representante">'.$celular.'</td>
                  <td class="representante">'.$email.'</td>
                  <td class="representante">'.$categoria.'</td>
                  <td class="representante">'.$titulo.'</td>
                  <td class="representante">'.$descripcion.'</td>
                </tr>';               
          }

        }           

    $html .= '
        </tbody>
      </table>
    </main>
    <footer>
      <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;margin-left:-100px;">
            <div>©Copyright DesafioApp<span style="color:#828282">
            Sub Gerencia de Tecnologí&shy;as de Información y Comunicaciones</span>.
            </div>
          </div>
    </footer>
    ';

	$mpdf = new mPDF('c','A4');
	$css = file_get_contents('css/style.css');
	$mpdf ->writeHTML($css, 1);
	$html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
	$mpdf ->writeHTML($html);
	$mpdf ->Output('reporte.pdf','I');

?>
