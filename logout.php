<?php
session_start();
include "auth/auth-fncs.php";
logout();
header( "Location: login.php" );
?>
