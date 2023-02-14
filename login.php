<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

</head>
<body>
<?php

//error_reporting(0);
session_start();

$email = trim($_POST['email']);
$pass = $_POST['pass'];

if(empty($email) || empty($pass)){
	echo 'There is something empty';
}
//Validation of the email
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "<h1>There was a problem</h1>";
		exit();
}else{

include("connection.php");

//SanitizATION
$_email = mysqli_real_escape_string($conn, $email);
$_pass = mysqli_escape_string($conn, $pass);

$stmt = mysqli_prepare($conn, "SELECT * FROM usuarios2 where email = ?");
mysqli_stmt_bind_param($stmt, 's', $_email);
mysqli_stmt_execute($stmt);

$res = mysqli_stmt_get_result($stmt);

$rows = mysqli_num_rows($res);
echo $rows;




if($rows == 1){
	$row = mysqli_fetch_assoc($res);
	$hash = $row['password'];
	if(password_verify($_pass, $hash)){
		echo '<script>alert("Successfull log in");</script>';
		
		$_SESSION['loggedin'] = true;
		$_SESSION['email'] = $row['email'];
		header("Location: protectedMainPage.php");
	}else{
		echo '<script>alert("Error with credentials");</script>';	
		$_SESSION['loggedin'] = false;
		header ("location: index.html");
	}

}else{
	header("Location: index.html");
	mysqli_stmt_close($stmt);
}
}
?>
</body>
</html>