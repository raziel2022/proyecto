<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
<?php
require 'class.phpmailer.php';
require 'class.smtp.php';


$enlace = $_POST['email'];     
$encabezado= $_POST['subject']
$cuerpo =  $_POST['message'];
$destinatario = 'atixeret@gmail.com';


mail($destinatario,$asunto,$cuerpo) ;

$mail .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$mail = new PHPMailer;
$mail->setFrom('atixerte@gmail.com');
$mail->addAddress($enlace);
$mail->Subject = $encabezado;
$mail->Body = $cuerpo;
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->Username = 'atixerte@gmail.com';
$mail->Password = '!ToDaS%7SoNa!';

if(!$mail->send()) {
  echo 'Email no enviado.';
  echo 'Email error: ' . $mail->ErrorInfo;
} else {
  //echo 'Email enviado. '. $asunto;
  header("Location: ../../index.html"); 
  
}
  	
?>

 
	