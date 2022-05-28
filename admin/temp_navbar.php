<script type="text/javascript">
	function openNav() { 
		document.getElementById("mySidenav").style.width = "20%"; 
		document.getElementById("main").style.marginLeft = "250px"; 
	}
	function closeNav() { 
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("main").style.marginLeft = "0"; 
	} 
</script>
	<nav>
		<span id="sidenavbaricon" onclick="openNav()"><img src='./icon/menu6.png' alt="Ubah"></span>
		<a class="active" href="customer.php">Data Customer</a> 
		<a href="logout.php">Logout</a> 
	</nav> 

<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href=""><img src=""></a>
	<a href="index.php">Home</a>
	<a href="#">Produk</a>
	<a href="#">Pembelian</a>
	<a href="customer.php">User</a>
	<a href="#">Logout</a>	
</div>

