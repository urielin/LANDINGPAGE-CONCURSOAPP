<?php
require "mailer.php";
require "email_message.php";
$nombres="Urielapp";
$apellidos="Urielapp";
$nombreapp="Urielapp";
$email_message=email_message($nombres,$apellidos,$nombreapp);
echo $email_message;
$msg = $email_message;
$subj = 'Registro Exitoso Desafio Movil 2018';
$to = 'urieljnvp@gmail.com';
$from = 'desafiomovil2018@munitacna.gob.pe';
$name = 'Desafiomovil2018';
//
if (smtpmailer($to, $from, $name, $subj, $msg, false)) {
  echo 'Yippie, message send ';
} else {
  if (!smtpmailer($to, $from, $name, $subj, $msg )) {
    if (!empty($error)) echo $error;
  } else {
    echo 'Yep, the message is send via Gmail';
  }
}
 ?>
