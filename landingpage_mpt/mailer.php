<?php
// require_once('vendor/phpmailer/phpmailer/class.phpmailer.php');

require "vendor/phpmailer/phpmailer/PHPMailerAutoload.php";
require "vendor/phpmailer/phpmailer/class.phpmailer.php";


define('GUSER', 'desafiomovil2018@gmail.com'); // GMail username
define('GPWD', 'principal*123'); // GMail password

// define('GUSER', 'urieljnvp@gmail.com'); // GMail username
// define('GPWD', 'u777i33l'); // GMail password

define('SMTPUSER', 'desafiomovil2018@munitacna.gob.pe'); // sec. smtp username
define('SMTPPWD', 'principal*123'); // sec. password
define('SMTPSERVER', 'mail.munitacna.gob.pe'); // sec. smtp server


function smtpmailer($to, $from, $from_name, $subject, $body, $is_gmail = true) {
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();

	$mail->SMTPDebug = 1;
	$mail->SMTPAuth = true;
	//$mail->Port = 465;

	if ($is_gmail) {
		$mail->SMTPSecure = 'ssl';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465;
		$mail->Username = GUSER;
		$mail->Password = GPWD;
	} else {
		$mail->Host = SMTPSERVER;
		$mail->Username = SMTPUSER;
		$mail->Password = SMTPPWD;
	}
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;

	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo;
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}
$msg = 'Su registro fue exitoso ';
$subj = 'Registro Exitoso Desafio Movil 2018';

//$to = 'edwinluislimachimamani@gmail.com';

$to = 'urieljnvp@gmail.com';
$from = 'desafiomovil2018@munitacna.gob.pe';
$name = 'Desafiomovil2018';
//
// if (smtpmailer($to, $from, $name, $subj, $msg)) {
// 	echo 'Yippie, message send via Gmail';
// } else {

	if (smtpmailer($to, $from, $name, $subj, $msg)) {
		echo 'Yippie, message send via Gmail';
	} else {
		if (!smtpmailer($to, $from, $name, $subj, $msg, false)) {
			if (!empty($error)) echo $error;
		} else {
			echo 'Yep, the message is send (after doing some hard work)';
		}
	}
// }
 ?>
