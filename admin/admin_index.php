<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CMS Portal</title>
</head>
<body>
	<h1><?php echo "{$_SESSION['user_name']}'s admin page"; ?></h1>


	<a href="admin_createuser.php">Create User</a><br>
	<a href="admin_edituser.php">Edit User</a><br>
	<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
</body>
</html>
