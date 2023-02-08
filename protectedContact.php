
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
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="icono.png"/>
	<meta charset="utf-8">
</head>
	<header>
		<div class="titulofijo">
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


	<div class="contenidocontacto">
	<section><h2>Contact</h2> <!--Información de contacto -->
	<p>Feel free to contact us using the contact information below, or send us a message using the form.</p><br><br>

	<h3>Get in contact</h3><br>
	<a href="https://www.google.com/maps/search/Carrer+Major,+18,+Ciudad,+43120,+Constantí,+Tarragona,+España/@41.1539253,1.1932976,14z/data=!3m1!4b1" target="_blank" style="color:black">Carrer Major, 18 <br>Constantí(43120), Tarragona<br><br></a>
	Send us a mail on barelsindicat@gmail.com<br><br>
	Call us at +34 692 94 99 91<br><br>
	Contact us in <a href="https://www.instagram.com/barelsindicat/" target="_blank" style="color:black">Instagram</a><br><br>
	</section>
	<section>
		<h2>Send us a message through this form</h2><br>
		Name:(Mandatory)<br>
		<input type="text" name="username"><br><br>
		Email: (Mandatory)<br>
		<input type="email" name="email"><br><br>
		Messahge: (Mandatory)<br>
		<textarea id="msg" name="user_message" rows="5"></textarea><br><br>
		<button type="submit">Enviar</button><br><br>
	</div>
	</section>
</body>
</html>