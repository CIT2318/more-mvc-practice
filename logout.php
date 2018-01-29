<?php
session_start();
require_once "auth-fns.php";
logout();
header( "Location: login.php" );
?>

