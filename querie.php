<?php 
include 'conns.php';

$errors = array();
if (isset($_POST['data1'])) {
	//$arr  = array( );
	//parse_str($_POST['data1'],$arr);

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$confirm = $_POST['confirm'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$nom = $_POST['nom'];
	$regstat = $_POST['regstat'];
	$tob = $_POST['tob'];
	$doe = $_POST['doe'];
	$loc= $_POST['loc'];
	$date= date("Y-m-d");

	if ($pass != $confirm) {
			array_push($errors, "The two passwords do not match");
		}
//validate password confirmation
if ($_POST["pass"]===$_POST["confirm"])
$validpassconfirm=1;
else array_push($errors, "The two passwords do not match");

if(empty($errors)){
	$query1 = "insert into sme( username,password, confirmpassword, email, phone, nameofenterprise, regstat, typeofbusiness, dateofestablishment, location, date_created, account_status) values ('".$user."','".$pass."','".$confirm."','".$email."','".$phone."','".$nom."','".$regstat."','".$tob."','".$doe."','".$loc."','".$date."', 'Active')";
	if (mysqli_query($con,$query1)) {
		echo "
			<script type='text/javascript'>
			alert('success');
			document.location.href='amen.php'
			</script>
		";
		
	}
	else{
		echo mysqli_error($con);
	}
}else{
	echo "
	<script type='text/javascript'>
	alert('passwords do not match');
	document.location.href='amen.php'
	</script>
";
}
	
}else if (isset($_POST['data2'])) {
	
	$nem = $_POST['nem'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	$phone= $_POST['phone'];
	$fi = $_POST['fi'];
	$regstatus = $_POST['regstatus'];
	$location = $_POST['location'];
	$scorelimit= $_POST['scorelimit'];


	$query2 = "insert into fi( name,email, username, password, confirm, phone, typeoffi, regstatus, location, scorelimit) values ('".$nem."','".$email."','".$username."','".$password."','".$confirm."','".$phone."','".$fi."','".$regstatus."','".$location."','".$scorelimit."')";
	if (mysqli_query($con,$query2)) {
		echo "
			<script type='text/javascript'>
			alert('success');
			document.location.href='admin.php'
			</script>
		";
		
	}
	else{
		echo mysqli_error($con);
	}
}else if(isset($_POST['data3'])){

$TypeOfEnterprise =$_POST['TypeOfEnterprise'];
$ownership = $_POST['ownership'];
$Age = $_POST['age'];
$Employees = $_POST['employees'];
$TypeOfBusiness = $_POST['typeofbusiness'];
$SalesInventory = $_POST['SalesInventory'];
$credit = $_POST['credit'];
$FixedAssets = $_POST['fixedAssets'];
$turnover = $_POST['turnover'];
$CreditHistory = $_POST['CreditHistory'];

//call the middleware endpoint that returns predicted score
$curl = curl_init();

//set some options 
curl_setopt_array($curl, [
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => 'http://localhost:8000/api/v1/predict_data/',
	CURLOPT_POST => 1,
	CURLOPT_POSTFIELDS => [
		'type_of_sme'=>$TypeOfEnterprise,
		'ownership'=>$ownership,
		'age_of_business'=>$Age,
		'employee'=>$Employees,
		'business_type'=>$TypeOfBusiness,
		'sales'=>$SalesInventory,
		'credit'=>$credit,
		'fixed_asset_value'=>$FixedAssets,
		'turnover'=>$turnover,
		'credit_history'=>$CreditHistory
	]
]);

//SEND THE REQUEST AND SAVE RESPONSE TO $resp
$resp = curl_exec($curl);
$response_array = json_decode($resp, true);


//close the request to clear up some resources
curl_close($curl);


$ins_query = "insert into sme_data(TypeOfEnterprise, Ownership, Age, Employees, TypeOfBusiness, SalesInventory, credit, FixedAssets, turnover, CreditHistory, score) values ('".$TypeOfEnterprise."','".$ownership."','".$Age."','".$Employees."','".$TypeOfBusiness."','".$SalesInventory."','".$credit."','".$FixedAssets."','".$turnover."','".$CreditHistory."', '".$response_array['scored_label']."')";
if (mysqli_query($con,$ins_query)) {
		echo "
		<script type='text/javascript'>
		alert('success');
		document.location.href='sme.php'
		</script>
	";
		
	}
	else{
		echo mysqli_error($con);
	}

}else if(isset($_POST['data4'])){

$TypeOfEnterprise =$_POST['TypeOfEnterprise'];
$ownership = $_POST['ownership'];
$Age = $_POST['age'];
$Employees = $_POST['employees'];
$TypeOfBusiness = $_POST['typeofbusiness'];
$SalesInventory = $_POST['SalesInventory'];
$FixedAssets = $_POST['fixedAssets'];
$turnover = $_POST['turnover'];
$CreditHistory = $_POST['CreditHistory'];

$ins_query = "insert into sme_data(TypeOfEnterprise, Ownership, Age, Employees, TypeOfBusiness, SalesInventory, FixedAssets, turnover, CreditHistory) values ('".$TypeOfEnterprise."','".$ownership."','".$Age."','".$Employees."','".$TypeOfBusiness."','".$SalesInventory."','".$FixedAssets."','".$turnover."','".$CreditHistory."')";
if (mysqli_query($con,$ins_query)) {
		echo "
			<script type='text/javascript'>
			alert('success');
			document.location.href='bank.php'
			</script>
		";
		
	}
	else{
		echo mysqli_error($con);
	}

}
else if (isset($_POST['submit3'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

$query3= "SELECT * FROM admin WHERE username='$username' AND password='$password' ";
$results = mysqli_query($con, $query3);

			if (mysqli_num_rows($results) == 1) {

				//session_start(); //start the session for the user

				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in as an admin";
				header('location: admin.php');
			}else {
				echo "<script type='text/javascript'>
			alert('incorrect username or password');
			document.location.href='amen.php'
			</script>";
			}
		

}else if (isset($_POST['submit2'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

$query4= "SELECT * FROM fi WHERE username='$username' AND password='$password' ";
$results = mysqli_query($con, $query4);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in as a bank";
				header('location: bank.php');
			}else {
				echo "<script type='text/javascript'>
			alert('incorrect username or password');
			document.location.href='amen.php'
			</script>";
			}
		
}else if (isset($_POST['submit1'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

$query5= "SELECT * FROM sme WHERE username='$username' AND password='$password' ";
$results = mysqli_query($con, $query5);

   $status ;
   $userId;

			if (mysqli_num_rows($results) == 1) {
			//	$row=mysqli_fetch_rows($results);

				while($row = mysqli_fetch_array($results)){
					$status = $row['account_status'];
					$userId = $row['ID'];
				}

			

				if($status=="Blocked"){
					echo "<script type='text/javascript'>
							alert('access denide account blocked');
							document.location.href='amen.php'
							</script>";
				}
				else{
				$_SESSION['username'] = $username;
				$_SESSION['userId'] = $userId;
				$_SESSION['success'] = "You are now logged in as an sme";
				header('location: sme.php');
				}
			}else {
				echo "<script type='text/javascript'>
			alert('incorrect username or password');
			document.location.href='amen.php'
			</script>";
			}
		
}
?>