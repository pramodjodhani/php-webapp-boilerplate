<?php 
/*
*
* This file can be used to check if any particular functions are working correctly.
*
*
*/


if(isset($_GET["playground"])) {

	my_mail("test@test" , "test" , "test");

}