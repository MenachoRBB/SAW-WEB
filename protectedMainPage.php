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
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="icono.png"/>
	<div class="pestanya">
		<title>Bar el Sindicat</title>
	</div>
</head>


<body bgcolor="white" text="black">
	<header>
		<div class="titulo"> <!--Titulo fijo de la página principal-->
		<h1>Bar el sindicat</h1>
		<h2>Enjoy our gastronomic experience</h2>
		</div>
	</header>
	<div id="navegador">
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
	<div class="contenido">

	<div class="expcarta">
	<section> <!--Segundo texto de la página -->
		<br><br><br><br><br><p><h1>Discover our menu</h1></p>
		<p>Our menu consists of a mixture of different dishes, among them, our specialty, our delicious hamburgers of different types that will not leave you indifferent after trying them.</p>
		<figure>
			<img src=https://barelsindicat.files.wordpress.com/2021/10/restaurante.jpg?w=806 height="400">
			<figcaption>
				Source: <a href="https://barelsindicat.wordpress.com" target = "_blank">barelsindicat.wordpress.com</a>  
			</figcaption>
		</figure>

	</section>
	</div>
	<div class="reserva"> <!--Formulario de reserva -->
	<section>
		<br><br><br><br><p><h3>BOOKINGS</h3></p>
		<p>To reserve a table, call us at 692 94 99 91 or use the following form.</p>
		<form action="reservamesa" method="post">
 		<ul>
 		<li>
    		<p>Name:</p>
   		 <input type="text" name="user_name" size="15" maxlength="20">
  		</li>
  		<br>
  		<li>
   			<p>Telephone number:</p>
   			<input type="tel" name="user_num" size="15" maxlength="9">
  		</li>
  		<br>
  		<li>
    		<p>Date:</p>
   			<input type="date" name="fecha" size="15">
 		</li>
 		<br>
 		<li>
    		<p>Hour:</p>
   			<input type="time" name="hora" size="15">
 		</li>
 		<br>
 		<li>
    		<p>Number of persons:</p>
   			<input type="number" name="personas" size="15">
 		</li>
 		<br>
 		<li>
    		<p>Something to add?:</p>
   			  <textarea id="msg" name="user_message" rows="5"></textarea>
 		</li>
		</form>
		<br>
			<li class="button">
  				<button type="submit">Enviar</button><br><br><br>
			</li>
		</ul>
	</form>
	</section>
	</div>

	<div class="final">
	<section>
		<div class="titfin"> <!--Texto final con informacion -->
			<p><h3>Bar el Sindicat</h3></p>
		</div>
		<p><h4>Opening hours::</h4></p><br>
		<p>Mon: closed Tue – Sun: 11:30 h – 22:00 h</p><br>
		<p><h4>Location:</h4></p><br>
		<p>Carrer Major, 18 Constantí, Tarragona (43120)</p><br>
		<p><h4>Reserva:</h4></p><br>
		<p>You can make your reservation by calling 692 94 99 91, writing us an email at
barelsindicat@gmail.com or by filling out the form above</p><br>
	</section>
	</div>
	<div class="copy">
	<footer> <!--Footer -->
		Author: Iván Menacho Domínguez Subject: SAW (Erasmus at Genoa) Copyright &copy;	
	</footer>
	</div>
	</div>

</body>
</html>