<?php 

require "functions.php";

if(!session_id()) {
    session_start();
}

define("SITE_URL" , "http://localhost/canIhaveYourTime/"); // Replace with the URL of your website 

define("SITE_NAME" , "My Project"); // Replace with the Name of your website 


define("DATABASE_HOST" , "localhost"); // Replace with the database host. Usually its localhost
define("DATABASE_TABLE" , "canihaveyourtime"); //Replace with the database name
define("DATABASE_USER" , "root"); //Replace with the database username
define("DATABASE_PASS" , ""); //Repalce with the database password

define("ADMIN_EMAIL" , "user@example.com"); //Repalce with the admin email, emails will be sent from this address
define("EMAIL_FROM" , "John from Cool startup"); //Repalce with the "email from"



define("DEBUG" , true); //true or false


$con = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_TABLE);

if($con->connect_errno) {
    echo "Sorry, this website is experiencing problems.";
    if(DEBUG) {
	    echo "Error: Failed to make a MySQL connection, here is why: \n";
	    echo "Errno: " . $mysqli->connect_errno . "\n";	
    }
    exit;
}

if(DEBUG) {
	error_reporting(E_ALL); 
	ini_set('display_errors', 1);
}
else {
	error_reporting(0);
}