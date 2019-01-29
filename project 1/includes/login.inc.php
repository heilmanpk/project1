<?php 

if (isset($_POST['login-submit'])) {
	require 'database.inc.php';
	$mailu = $_POST['mailu'];	
	$password = $_POST['psw'];

	 if (empty($mailu) || empty($password)) {
	 header("Location: ../login.php?error=emptyfields")
	 exit();
	}
	else {
	$sql ="SELECT * FROM conturi WHERE username=? OR emailuser=?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	header("Location: ../login.php?error_sqlerror");
	exit();
}
	else {
	mysqli_stmt_bind_param($stmt, "ss", $mailu, $mailu);
	mysqli_stmt_execute($stmt);
	$result = mysqly_stmt_get_result($stmt);
	if ($row = mysqli_fetch_assoc($result)) {
		$pswCheck = password_verify($password, $row['password']);
		if ($pswCheck == false){
		header("Location: ../index.php?error=wrongpassword");
		exit();
	}
	else if ($pswCheck == true){
		session_start();
		$_SESSION['ContID'] = $row['contID'];
		$_SESSION['username'] = $row['username'];

		header("Location: ../login.php?login=succes");
		exit();

}
	}
	else {
	header("Location: ../login.php?error-nouser");
}
}
	}
}
else {
	header("Location: ../index.php");
	exit();
}