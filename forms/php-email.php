<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
echo $_POST['message'];


require '../assets/vendor/php-email-form/class.phpmailer.php';
require '../assets/vendor/php-email-form/class.smtp.php';

$enlace = 'cojabmia@gmail.com';     
$destinatario = $_POST['email']; 
$asunto = $_POST['subject'];
$encabezado =$_POST['subject'];
$cuerpo =   '<html><body><p>Envio un correo '.$_POST[name] .' </p>

<p>Mensaje que fue enviado es <strong>'.$_POST[message].'</strong></p>

<p>Responder al correo <strong>' .$_POST[email].'</strong><br>

Saludos</p>';


mail($destinatario,$asunto,$cuerpo) ;

$mail .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$mail = new PHPMailer;
$mail->setFrom($destinatario);
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
$mail->Username = 'cojabmia@gmail.com';
$mail->Password = 'lmyjbeefbdzpvhna';

if(!$mail->send()) {
  echo 'Email no enviado.';
  echo 'Email error: ' . $mail->ErrorInfo;
} else {
  echo 'Email enviado. '. $asunto;
  header("Location: ../index.html?email=success"); 
  
}
?>