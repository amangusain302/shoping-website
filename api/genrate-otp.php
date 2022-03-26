<?php
	require 'vendor/autoload.php';

  require("vendor/phpmailer/src/PHPMailer.php");
  require("vendor/phpmailer/src/SMTP.php");
  require("vendor/phpmailer/src/Exception.php");

use LDAP\Result;

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data =  json_decode(file_get_contents("php://input"),true);

include "config.php";

$user_email = $data['user_email'];

$sql = "select * from user where user_email = '$user_email';";
$query = mysqli_query($con,$sql);

$result = mysqli_num_rows($query);
$user_details =mysqli_fetch_array($query,MYSQLI_BOTH);

if($result > 0)
{
    $otp = rand(11111,99999);
    $otp_update = "update user set otp = '$otp' where user_email = '$user_email';";
    $query2 = mysqli_query($con,$otp_update);
    $html = "<h3>Hi ".$user_details['username'].",</h3>Your Email One time password (OTP) is <b>".$otp."</b> <br>The OTP is vaild for 10 minutes <br> This OTP will be used to verify the device you are logging in from. For account safety, do not share your OTP with others.";
    $stmp_status = smtp_mailer($user_email,'Fixebuy OTP verification',$html);
	echo json_encode($stmp_status);
}else{
    echo json_encode(false);
}

function smtp_mailer($to,$subject, $msg){

    $mail = new  PHPMailer\PHPMailer\PHPMailer();
	$mail->IsSMTP(); 
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'TLS'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "gamingera786@gmail.com";
	$mail->Password = "9968185116";
	$mail->SetFrom("gamingera786@gmail.com");
	// $mail->addAttachment("dummy.pdf");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		return 0;
	}else{
		return 1;
	}
}


?>