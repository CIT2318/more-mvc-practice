<?php
session_start();
if(!isset($_SESSION["username"]))
{
	//user tried to access the page without logging in
	header( "Location: login.php" );
};
?>
<!DOCTYPE html>
<html>
<head>
    <title>Homepage of XYZ</title>
</head>

<body>
<?php echo "<p>You are logged in as : ".$_SESSION['username']."</p>"; ?>

<h1>Welcome to XYZ inc.</h1>
<p>Find out everything you need to know about the XYZ company</p>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="page1.php">Page 1</a></li>
        <li><a href="page2.php">Page 2</a></li>
        <li><a href="page3.php">Page 3</a></li>
       	<li><a href="logout.php">Logout</a></li>
    </ul>
</nav>


</body>
</html>
