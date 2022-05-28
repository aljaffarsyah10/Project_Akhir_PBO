<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="index.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body onload="updateDataAPI()">

<?php include 'navbar.php';?>

<div class="daftarpantaumarket">
<h1>Daftar Pantau</h1>
    <p><b>Update data dalam: <span id="timer">0</span> Detik</b></p>
    <table id="coins">
      <tr>
        <th>Pairs</th>
        <th>Harga</th>
        <th>Beli</th>
        <th>jual</th>
        <th>Tertinggi 24h</th>
        <th>Terendah 24h</th>
      </tr>
    </table>
    <button class="btn-dark btnindex" onclick="updateDataAPI()">Start</button>
</div>

<div class="jualbeli">
	<form class="beli">
		<h2>Beli Cryptocurrency</h2>
		<table>
<!-- 			<tr>
				<th>Pairs</th>
				<th>
			</tr> -->
			<tr>
				<th>Pairs</th>
				<td><select name="pairs">
					<option hidden>Cryptocurrency</option>
					<option>BTC</option>
					<option>ETH</option>
					<option>ADA</option>
					<option>XRP</option>
					<option>UNI</option>
				</select></td>	
			</tr>
			<tr>
				<th>Jumlah IDR</th>
				<td><input type="text" name="beli" placeholder="Rp. ..."></td>
			</tr>
			<tr>
				<th>Estimasi Koin yang didapat</th>
				<td><input type="text" name=""></td>
			</tr>
		</table>
		<button class="btn-log">Beli</button>
	</form>
	<form class="jual">
		<h2>Jual Cryptocurrency</h2>
		<table>
			<tr>
				<th>Pairs</th>
				<td><select name="pairs">
					<option hidden>Cryptocurrency</option>
					<option>BTC</option>
					<option>ETH</option>
					<option>ADA</option>
					<option>XRP</option>
					<option>UNI</option>
			</tr>
			<tr>
				<th>Jumlah dalam koin</th>
				<td><input type="text" name="beli"></td>
			</tr>
			<tr>
				<th>Estimasi IDR yang didapat</th>
				<td><input type="text" name=""></td>
			</tr>
		</table>
		<button class="btn-red">Jual</button>		
	</form>

</div>

<?php include 'footer.php' ;?>

</body>
</html>