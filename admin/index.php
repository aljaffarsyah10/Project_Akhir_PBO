<?php 
session_start();
	if (!isset($_SESSION['username'])){
	$_SESSION['bool']="1"; 
	header("Location: temp_login.php"); 
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body  onload="updateDataAPI()">
<?php 
include 'temp_navbar.php';
?>

<div id="main">
	<div class="laman_article">
		<h1>Admin</h1>
		<p>Hallo Admin -----(isi sql select)</p>
	</div>
</div> 



</body>
</html>