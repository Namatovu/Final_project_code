<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit'])){

#$emailfro=$_POST['email'];
$emailTo=$_POST['emailto'];
$pass=$_POST['pass'];


require 'C:\xampp\htdocs\mail\vendor\autoload.php';


$mail = new PHPMailer(true);
try{
	$mail->isSMTP();
	$mail->SMTPDebug=2;
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';

	$mail->Username='namatovudamalie02@gmail.com';
	$mail->Password=$pass;

	$mail->SetFrom('namatovudamalie02@gmail.com','damdam');

	$mail->addAddress($emailTo);
	$mail->ishtml(true);
	$mail->Subject='testing';
	$mail->Body='<h1> see see see</h1>';
	$mail->send();
	echo 'Message has been sent';
}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>