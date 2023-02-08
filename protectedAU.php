
<?php

session_start();

if(!isset ($_SESSION['email']))
{
	header("Location: index.html");

}

?>






<!DOCTYPE html>
<html lang="es-ES">
<html>
<head>
	<title>About us</title>
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
		<h1>About us</h1> <!--Información -->
		<figure>
			<img src=icono.png height="200">
			<figcaption>
				Source: <a href="https://icon-icons.com/es/icono/local-bar/90386" target = "_blank" style="color:black">here</a>  
			</figcaption>

		</figure>
		<br><br>
		<div class="nosencontramos">
		<p><h2>We are at Carrer Major, 18, 43120 Constantí, Tarragona</h2></p>
		<p>We are a company with several years of experience in the hospitality sector, hoping to provide a good experience to each person who decides to visit our premises.</p>
		<p>Here you will find hamburgers, sandwiches, combined dishes and much more.</p>
		<p>You can find the link to our address on Google Maps <a href="https://www.google.com/maps/dir/41.1437422,1.221747/Bar+Sindicat+Agrícola,+Carrer+Major,+18,+43120+Constantí,+Tarragona/@41.1483175,1.208767,15z/data=!3m2!4b1!5s0x12bac204723ab7e7:0xba0fa7738d5cf069!4m9!4m8!1m1!4e1!1m5!1m1!1s0x12a3fd7f932b1405:0x30b333b62b088875!2m2!1d1.2133397!2d41.1530946" target="blank" style="color:black">here</a></p>
	</div>
	</section>
</div>
</body>
</html>