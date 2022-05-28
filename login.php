<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<?php include 'navbar.php';?>

<div class="formLogin">
	<div>
		<img src="img/logo.png">
	</div>
	<h3>Login Akun Alj-Exchange</h3>
<form>
	<table>
		<tr>
			<td><input type="text" name="email" placeholder="email"></td>
		</tr>
		<tr></tr>
		<tr>
			<td><input type="password" name="password" placeholder="password"></td>
		</tr>
	</table>
	<button class="btn-light">Login</button>
	<h3>Belum punya akun ? <a href="register.php">Daftar disini</a> </h3>
</form>
</div>


<?php include 'footer.php' ;?>

</body>
</html>