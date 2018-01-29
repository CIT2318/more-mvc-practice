<?php
session_start();
require_once "auth-fns.php";

if(!isLoggedIn())
{
	//user tried to access the page without logging in
	header( "Location: login.php" );
};
$username = getUser();
require_once "views/index-view.php";
?>

