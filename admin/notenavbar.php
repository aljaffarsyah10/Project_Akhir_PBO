<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" type="text/css" href="style2.css">

<script type="text/javascript">
// 	/* Set the width of the side navigation to 250px */
// function openNav() {
//   document.getElementById("mySidenav").style.width = "250px";
// }

// /* Set the width of the side navigation to 0 */
// function closeNav() {
//   document.getElementById("mySidenav").style.width = "0";
// }


// /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
// function openNav() {
//   document.getElementById("mySidenav").style.width = "250px";
//   document.getElementById("main").style.marginLeft = "250px";
// }

// /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
// function closeNav() {
//   document.getElementById("mySidenav").style.width = "0";
//   document.getElementById("main").style.marginLeft = "0";
// } 

// /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
// function openNav() {
//   document.getElementById("mySidenav").style.width = "250px";
//   document.getElementById("main").style.marginLeft = "250px";
//   document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
// }

// /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
// function closeNav() {
//   document.getElementById("mySidenav").style.width = "0";
//   document.getElementById("main").style.marginLeft = "0";
//   document.body.style.backgroundColor = "white";
// }  

// /* Open the sidenav */
// function openNav() {
//   document.getElementById("mySidenav").style.width = "100%";
// }

// /* Close/hide the sidenav */
// function closeNav() {
//   document.getElementById("mySidenav").style.width = "0";
// } 

/* Open the sidenav */
function openNav() {
  document.getElementById("mySidenav").style.display = "block";
}

/* Close/hide the sidenav */
function closeNav() {
  document.getElementById("mySidenav").style.display = "none";
}
</script>
</head>
<body>
<nav>
<!-- <aside>	
	<div class="aside">
		<ul>
			<li><img src=""></li>
			<li><a href="">Home</a></li>
			<li><a href="">Produk</a></li>
			<li><a href="">Pembelian</a></li>
			<li><a href="">User</a></li>
			<li><a href="">Logout</a></li>
		</ul>
	</div>
</aside> -->

 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()">open</span>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
  ...
</div> 

</nav>	
</body>
</html>