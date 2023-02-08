<?php

session_start();

if(!isset($_SESSION['email']))
	header("Location: index.html");
?>


<!DOCTYPE html>
<html lang="es-ES">
<html>
<head>
	<title>Donate a coffe!</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="icono.png"/>
	<meta charset="utf-8">
</head>
	<header>
		<div class="titulofijo"> <!--Barra de navejacion con titulo fija -->
		<h1>Bar el sindicat</h1>
		<h2>Enjoy our gastronomic experience</h2>
		</div>
	</header>
<body>
	<div id="navegadorfijo">
	<nav>
		<ul type="circle"> <!--Lista para declarar el navegador fijo que irá arriba-->
			<li> <a href="protectedMainPage.php" style="color:white">Main page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> <a href="protectedMenu.php" style="color:white">Menu</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> <a href="protectedAU.php" style="color:white"> About us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> <a href="coffe.php" style="color:white"> Donate a coffe</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> <a href="show_profile.php" style="color:white"> Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> <a href="protectedContact.php" style="color:white">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> <form action="logout.php"><input type="submit" value="Log out"></form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
		</ul>
	</nav>
	</div>
	<section>
		<div class="contentinfo">
		
		<div class="nosencontramos">
			<div id="bordeBoton">
				<form action="updateCoffe.php" target="_blank">
					<input type="submit" name="submit" value="Donate a coffe!" id="submit" />
				</form>
			</div>
	</div>
	</section>
</div>
</body>
</html>