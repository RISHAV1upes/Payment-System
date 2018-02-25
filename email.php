<?php

require '/lib/PHPMailerAutoload.php';

	
function mailer($body,$email){

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug = 0;

$mail->Debugoutput = 'html';

$mail->Host = 'upescsi.in'; 
$mail->Port = 25; // 
$mail->SMTPSecure = '';
$mail->SMTPAuth = true;
$mail->Username = "csitech@upescsi.in";
$mail->Password = "upescsi123";
$mail->setFrom('csitech@upescsi.in', 'UPES-CSI');
$mail->addReplyTo('csitech@upescsi.in', 'UPES-CSI');
$mail->addAddress( $email, $name);
$mail->Subject = 'Welcome To CSI-Registration';
$mail->Body    = $body;
$mail->AltBody = 'Whatever'; // Seems like this text doesnt matter.
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    return 1;
}
}
if($_GET['email']){
		$ver=hexdec( substr(sha1($_GET['body']), 0, 7) );
	$msg="verification code for".$_GET['body']."is<br>"    .$ver;
		
	$ac= mailer($msg,$_GET['email']);
	
	}