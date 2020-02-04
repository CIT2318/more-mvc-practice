<?php
function login($username,$password){
	if($username==="testuser" && $password === "letmein")
	{
		$_SESSION["username"]=$username;
		return true;
	}else{
		return false;
	}
}

function logout(){
	$_SESSION = array();
	session_destroy();
}

function isLoggedIn(){
	if(isset($_SESSION["username"])){
		return true;
	}
	return false;
}

function getUser(){
	return $_SESSION["username"];
}

?>
