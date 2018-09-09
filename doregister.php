<?php 

require "config.php";

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["cpassword"])) {
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];

	$query = "select * from user where email = '$email' ";
	$res = query($query);
	$count = mysqli_num_rows($res);
	
	if($count > 0) {
		$err = ["error" => "email_exists"];

		redirect_with_data("register.php" , $err);
		exit;
	}

	$password = md5($password);

	$query = "insert into user set name = '$name' , email = '$email' , username = '$email', pass = '$password' ";

	query($query);

	header("location: login.php");
	
}

