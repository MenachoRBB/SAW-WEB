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


//Sanitization of the input
$_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$_lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$_email = mysqli_real_escape_string($conn, $_POST['email']);
$_pass = mysqli_real_escape_string($conn, $_POST['pass']);


$hash = password_hash($_pass, PASSWORD_DEFAULT);
$stmt = mysqli_prepare($conn, "INSERT INTO usuarios2 (firstname, lastname, email, password) VALUES (?,?,?,?)");
mysqli_stmt_bind_param($stmt, 'ssss', $_name, $_lastname, $_email, $hash);
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