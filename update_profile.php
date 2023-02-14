<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Done!</title>
</head>
<body>
	<?php  

	session_start();

	include 'connection.php';

	$nameProfile = $_POST['firstname'];
	$surnameProfile = $_POST['lastname'];
	$emailProfile = trim($_POST['email']);


	//Validation of the email
	if(!filter_var($emailProfile, FILTER_VALIDATE_EMAIL)){
		echo "<h1>There was a problem</h1>";
		exit();
	}

	$emailPrevio = $_SESSION['email'];

	$_nameProfile = mysqli_real_escape_string($conn, $nameProfile);
	$_surnameProfile = mysqli_real_escape_string($conn, $surnameProfile);
	$_emailProfile = mysqli_real_escape_string($conn, $emailProfile);

	$stmt = mysqli_prepare($conn, "UPDATE usuarios2 SET firstname = '$nameProfile', lastname = '$surnameProfile', email = '$emailProfile' where email=?");

		mysqli_stmt_bind_param($stmt, 's', $emailPrevio);

		mysqli_stmt_execute($stmt);


	$_SESSION['email'] = $_emailProfile;

	if(mysqli_affected_rows($conn) == 1)
	 	echo "<h1>Successfull</h1>";
	else
     	echo "<h1>There was a problem</h1>";

	mysqli_stmt_close($stmt);





	?>

</body>
</html>