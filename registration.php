<!DOCTYPE html>
<html>
<head>
<body>

<?php

session_start();


$nombre = $_POST['firstname'];
$apellido = $_POST['lastname'];
$correo = trim($_POST['email']);
$pass = $_POST['pass'];

if(empty($nombre) || empty($apellido) || empty($correo) || empty($pass)){
      echo 'There\'s an error with your registration, try again';
}else{

include("connection.php");

$hash = password_hash($pass, PASSWORD_DEFAULT);

//Sanititzar 
$stmt = mysqli_prepare($conn, "INSERT INTO usuarios2 (firstname, lastname, email, password) VALUES (?,?,?,?)");
mysqli_stmt_bind_param($stmt, 'ssss', $nombre, $apellido, $correo, $hash);
mysqli_stmt_execute($stmt);

if (mysqli_affected_rows($conn)==1)
      echo "<h1>Successfull</h1>";
else
      echo "<h1>There was a problem when registering you</h1>";

mysqli_stmt_close($stmt);

}
?>
</body>
</html>