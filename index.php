<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>project web</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="index.js"></script>
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="./assets/jquery.js"></script> -->
    <script type="text/javascript" src="./assets/addjs.js"></script>
</head>
<body  onload="updateDataAPI()">

<?php include 'navbar.php';?>

<div class="imgmenu overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" >
  <div class="col-md-5 p-lg-5 mx-auto">   
   <img id="menulogo" src="img/logo.png">
    <p class="textmenu lead font-weight-normal"><b>Aljaffarsyah adalah sebuah website yang bergerak di bidang cryptocurrency, yang diciptakan oleh segelintir anak bangsa yang melihat peluang bisnis dalam perkembangan teknologi blokchain yang sedang berkembang.</b></p>
    <a class="btn btn-menu" href="market.php">Trade Now</a>
  </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>


<h1>Daftar Pantau</h1>
<div class="daftarpantau">
    <p><b>Update data dalam: <span id="timer">0</span> Detik</b></p>
    <table id="coins">
      <tr>
        <th>Pairs</th>
        <th>Harga</th>
        <th>Beli</th>
        <th>jual</th>
        <th>Tertinggi 24h</th>
        <th>Terendah 24h</th>
    </table>
    <button class="btn-dark btnindex" onclick="updateDataAPI()">Start</button>
</div>

<?php include 'footer.php' ;?>

</body>
</html>