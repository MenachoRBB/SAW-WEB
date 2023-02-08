<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Arreglar para que solo salga en caso de que haya funcionado-->
	<title>Done!</title>
</head>
<body>
	<?php  

	session_start();

	include 'connection.php';

	$nameProfile = $_POST['firstname'];
	$surnameProfile = $_POST['lastname'];
	$emailProfile = $_POST['email'];

	$emailPrevio = $_SESSION['email'];

	$stmt = mysqli_prepare($conn, "UPDATE usuarios2 SET firstname = '$nameProfile', lastname = '$surnameProfile', email = '$emailProfile' where email=?");

		mysqli_stmt_bind_param($stmt, 's', $emailPrevio);

		mysqli_stmt_execute($stmt);


	$_SESSION['email'] = $emailProfile;

	if(mysqli_affected_rows($conn) == 1)
	 	echo "<h1>Successfull</h1>";
	else
     	echo "<h1>There was a problem</h1>";

	mysqli_stmt_close($stmt);





	?>

</body>
</html>