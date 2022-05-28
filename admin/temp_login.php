<?php 
session_start();
	if ((isset($_SESSION['bool']))){ 
	echo "<script type='text/javascript'>confirm('You need login first!');</script>";
  	unset($_SESSION['bool']);
  	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>temp login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<?php include('temp_navbar.php'); ?>
<form action="temp_loginAction.php" method="post" style="margin: 5% 25% 0 25%; text-align: center;"> 
	<table> 
	<tr><td><label>Username:</label></td><td><input type="text" name="username"></td></tr> 
	<tr><td><label>Password:</label></td><td><input type="password" name="password"></td></tr> 
	</table> 
	<br>
	<input class="btn-log" type="submit" value="Login" style="margin: 0  0 0 30%;"> 
	</form> 
</body>
</html>
