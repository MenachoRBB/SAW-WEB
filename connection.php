<?php 
$servername = "localhost";
$database = "S5719925";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

// Comprueba la conexion
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

// Check connection
if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
}

?>

