<?php 

use PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "includes/phpmailer/Exception.php";
require "includes/phpmailer/phpmailer.php";
require "includes/phpmailer/SMTP.php";
require "playground.php";


function query($sql) {

	global $con;
	if ($result = $con->query($sql)) {
	
		//$user = $result->fetch_assoc();
		return $result;

	}
	else {
		echo "query failed: ".$sql."<br>";
		echo $con->error."<br>";	

		return false;
	}

}

//todo
function get_option($option_name) {

}

function update_option($option_name, $value) {

}


function is_user_logged_in() {

	if(isset($_SESSION["user_id"])) {
		return true;
	}
	else {
		return false;
	}

}

function pre($arr) {
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}

function redirect_with_data($url , $custom_data) {
	$str = "?";

	foreach($_POST as $k => $v) {
		if( strpos($k, "pass") === false ) 
		$str .= "$k=$v&";
	}
	foreach($custom_data as $k => $v) {
		$str .= "$k=$v&";
	}

	$str = rtrim($str , "&");
	$redirect_to =  $url.$str;
	header("location: $redirect_to");
	exit;
}


function rget($key) {
	if(isset($_GET[$key])) {
		return $_GET[$key];
	}
	else {
		return "";
	}
}

function my_mail($to , $title , $message) {

	$mail = new PHPMailer(true);
	$mail->SMTPDebug = 2; 
	$mail->isSMTP();  
	$mail->Host = 'smtp1.example.com';
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'user@example.com';                 // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom("ADMIN_EMAIL", "EMAIL_FROM"); 
    $mail->addAddress($to);     // Add a recipient
  	
  	$mail->Subject = $title;
    $mail->Body    = $message;
    $mail->send();

}