<?php 
	
	session_start();

	include "connection.php";

	$email = $_SESSION['email'];
	$time = time();


	//This is for show how many coffes they have donated
	$stmt = mysqli_prepare($conn, "SELECT firstname from usuarios2 where email = ?");
	mysqli_stmt_bind_param($stmt, 's', $email);
	mysqli_stmt_execute($stmt);

	$res = mysqli_stmt_get_result($stmt);
	$row = mysqli_fetch_assoc($res);
	$nameDonator = $row['firstname'];

	//Here we save every coffe
	$stmt2 = mysqli_prepare($conn, "INSERT INTO coffes (name, timest) VALUES (?,?)");
	mysqli_stmt_bind_param($stmt2, 'si', $nameDonator, $time);
	mysqli_stmt_execute($stmt2);

	if (mysqli_affected_rows($conn)==1){
     echo "<h1>Successfull</h1>";
     echo "<h3>Here are all the donations:</h3>";
	
  	$sql = "SELECT * from coffes";
	$res = mysqli_query($conn, $sql);

	echo "<table>";
	echo "<tr><th>Name</th><th>Timestamp</th></tr>";
	while ($fila = mysqli_fetch_assoc($res)) {
    $fecha = date('d/m/Y H:i:s', $fila["timest"]); // Convierte el timestamp a fecha y hora
    echo "<tr><td>" . $fila["name"] . "</td><td>" . $fecha . "</td><td>" . "</td></tr>"; // Muestra la fecha y hora en lugar del timestamp
}
	echo "</table>";

	mysqli_free_result($res);

	// Cerrar la conexión
	mysqli_close($conn);
	}else
      echo "<h1>There was a problem with your donation</h1>";

	mysqli_stmt_close($stmt);

	

?>