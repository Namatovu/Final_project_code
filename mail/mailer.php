<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['data2'])){

$emailfro=$_POST['email'];
$name=$_POST['nem'];
$username=$_POST['username'];
$pass=$_POST['password'];
$phone=$_POST['phone'];
$type=$_POST['fi'];
$status=$_POST['regstatus'];
$location=$_POST['location'];
$scorelimit=$_POST['scorelimit'];


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

	$mail->addAddress('namatovudamalie02@gmail.com');
	$mail->ishtml(true);

	#$mail->AddAttachment($path);
	$mail->Subject='Application Details';
	$mail->Body='<h2>The following are the financial institution details </h2>
	               <h3> Name of financial institution:'.$name.'</h3>
	               <h3> Username:'.$username.'</h3>
	               <h3> password:'.$pass.'</h3>
	               <h3> phone contact:'.$phone.'</h3>
	               <h3> Registration status:'.$status.'</h3>
	               <h3> location:'.$location.'</h3>
	               <h3> credit score limit:'.$scorelimit.'</h3>
	               <h3> Email address:'.$emailfro.'</h3>';
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