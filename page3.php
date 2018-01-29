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
    <title>Page 3</title>
</head>

<body>
<?php echo "<p>You are logged in as : ".$_SESSION['username']."</p>"; ?>
<h1>Page 3</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
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
