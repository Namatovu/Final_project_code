<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['data2'])){

$name=$_POST['name'];
$email=$_POST['emaill'];
$subject=$_POST['subject'];
$emailfro='namatovudamalie02@gmail.com';

# move_uploaded_file($_FILES["namefile"]["tmp_name"]);

#if($_FILES['file']){
	
#$path = 'C:/xampp/htdocs/uploads/'.$_FILES['file']['name'];
#move_uploaded_file($_FILES['file']["tmp_name"],$path);
#}




require 'C:\wamp\www\New\mail\vendor\autoload.php';


$mail = new PHPMailer(true);
try{
	$mail->isSMTP();
	#$mail->SMTPDebug=2;
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';

	$mail->Username='namatovudamalie02@gmail.com';
	$mail->Password='0705236059';

	$mail->SetFrom($emailfro,'damdam');

	$mail->addAddress($email);
	$mail->ishtml(true);

	#$mail->AddAttachment($path);
	$mail->Subject='Login details';
	$mail->Body='<h2> Hallo'.$name.'Kindly,receive your Login details </h2>
	               <h3> Username and Password:'.$subject.'</h3>';
	               
	$mail->send();

	if($mail->send()){
		echo 'msg sent';
			
	}
	else{

		echo 'there is an error';
	}
	
}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
