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
