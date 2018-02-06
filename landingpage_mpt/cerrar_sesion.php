<?php

session_start();

if (isset($_SESSION['usuario'])) {

  session_destroy();
  print "<meta http-equiv=\"refresh\" content=\"0;URL='./'\">";    		
  
}else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL='login.php'\">";       
}  

 ?>
