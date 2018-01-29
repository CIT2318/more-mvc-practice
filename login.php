<?php
session_start();
if(isset($_SESSION["username"]))
{
	header( "Location: index.php" ); //they are logged in, send them to the homepage
};
if(isset($_POST['login'])) //they have submitted the login form
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username==="testuser" && $password === "letmein")
	{
		$_SESSION["username"]="testuser"; 
		header( "Location: index.php" ); //successful login go to the home page
	}else{
		$error_msg="Wrong login details."; //incorrect username or password
	}
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form : XYZ inc.</title>
</head>

<body>
<h1>Welcome to XYZ inc.</h1>
<?php
if(isset($error_msg))
{
	echo "<p>".$error_msg."</p>";
}
?>
<form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <label for="password" >Password:</label>
    <input type="password" id="password" name="password">
    <input type="submit" name="login" value="Login">
</form>

</body>
</html>
