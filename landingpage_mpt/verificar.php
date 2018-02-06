    <?php      

    session_start();

     $user = $_POST['usuario'];
     $password = $_POST['clave'];

     $nombreServerActual = $_SERVER['SERVER_NAME'];  

     if ($nombreServerActual=='localhost') {

/*        $serverName = "EDWIN-PC\SQLEXPRESS";
        $connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"sa", "PWD"=>"123456");*/
        $serverName = "10.10.1.55";
        $connectionInfo = array( "Database"=>"BDCONCURSOAPP", "UID"=>"udesafiomovil", "PWD"=>"principal*123");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);

        $verificar = "
                select 
                  *
                from 
                  dbo.usuariosapp                
        ";

        $comparar=sqlsrv_query($conn,$verificar);                 
        $select = sqlsrv_fetch_array($comparar, SQLSRV_FETCH_NUMERIC);            
        $usuario=$select[1]; 
        $clave=$select[2]; 

        if ($usuario==$user && $clave==$password) {

          $usuario_sesion=$user;
          $clave_sesion=$password;

          echo '<script>location.href = "mostrar.php"</script>';

          $_SESSION['usuario'] = $usuario_sesion;
          $_SESSION['clave'] = $clave_sesion;
        }
        else{
          echo '<span>Clave y/o Usuario incorrecto.</span>';
        }

     }

     else{
      
        $serverName = "10.10.1.55";    
        $conn = mssql_connect($serverName, 'udesafiomovil', 'principal*123');
        $conndb = mssql_select_db('BDCONCURSOAPP', $conn);        

                $verificar = mssql_query('
                  select 
                    *
                  from 
                    dbo.usuariosapp 


                                  ');

/*                  where
                    usuario='$usuario' and clave='$clave' */

/*                if (!mssql_num_rows($verificar)) {
                    echo '<span>Clave y/o Usuario incorrecto.</span>';
                } else {
                    for ($i = 0; $i < mssql_num_rows($query); ++$i) {
                        echo mssql_result($query, $i, 'username'), PHP_EOL;
                    }
                }*/

                $comparar = mssql_fetch_assoc($verificar);
                $usuario=$comparar['usuario'];
                $clave=$comparar['clave'];

                if ($usuario==$user && $clave==$password) {

                  $usuario_sesion=$user;
                  $clave_sesion=$password;

                  echo '<script>location.href = "mostrar.php"</script>';

                  $_SESSION['usuario'] = $usuario_sesion;
                  $_SESSION['clave'] = $clave_sesion;
                }
                else{
                  echo '<span>Clave y/o Usuario incorrecto.</span>';
                }

                mssql_close();

     }
    	
        

    ?>
