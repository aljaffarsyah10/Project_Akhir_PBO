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

<div class="formReg">
	<div>
		<img src="img/logo.png">
	</div>
	<h3>Registrasi Akun Alj-Exchange</h3>
<form>
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td id="gender">
				<input type="radio" name="gender" id="lk">
					<label for="lk">Pria</label>
				<input type="radio" name="gender" id="pr">
					<label for="pr">Wanita</label>
			</td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" required></td>
		</tr>
		<tr>
			<td>Konfirmasi Password</td>
			<td><input type="password" name="password" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea rows="5" column="100" name="alamat" required></textarea> </td>
		</tr>
		<tr>
			<td>No. HP</td>
			<td><input type="text" name="nohp" required></td>
		</tr>
	</table>
	<br/><button class="btn-log">Daftar</button>

</form>

</div>


<?php include 'footer.php' ;?>

</body>
</html>