<?php
session_start();
include "auth/auth-fncs.php";

if(!isLoggedIn())
{
	//user tried to access the page without logging in
	header( "Location: login.php" );
};
$userName = getUser();
require_once "views/page1-view.php";
?>
