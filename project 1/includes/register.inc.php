<?php 

if(isset($_POST['signup-submit'])){

		require 'datebase.inc.php';


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['psw'];
$repeatpassword = $_POST['pswrepeat'];

	 if (empty($username) || empty($mail) || empty($psw) || empty($pswrepeat))  { 
	 	header("Location: ../register.php?error=emptyfields&username=".$username."$mail=");
	 	exit();
	 }
	 else if (!filter_var($emai, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
	 	header("Location : ../register.php?error=invalidmail");
	 	exit();
	 }
	 else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 	header("Location : ../register.php?error=invalidmail$usename=".$username);
	 	exit();
	 }
	 else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
	 	header("Location: ../register.php?error=invalidusername$mail=".$email);
	 	exit();
	 }
	 else if($psw == $pswrepet) {
	 	header("Location: ../register.php?error=passwordcheckusername=".$username."$mail=".$email);
	 	exit();
	 }

	 else {

	 	$slq = "SELECT username FROM conturi WHERE username=?";
	 	$stmt = mysqli_stmt_init($conn);
	 	if (!mysqli_stmt_prepare($stmt, $slq)) {
	 		header("Location: ../register.php?error=sqlerror");
	 		exit();
	 	} else {
	 		mysqli_stmt_bind_param($stmt, "s", $username);
	 		mysqli_stmt_execute($stmt);
	 		mysqli_stmt_store_result($stmt);
	 		$resultCheck = mysql_stmt_num_rows($stmt);
	 		if ($resultCheck > 0) {
	 			header("Location: ../register.php?error=usertaken&mail=".$email);
	 		}
	 		else {

	 			$slq = "INSERT INTO conturi (username, email, password) VALUES (?, ?, ?,)";
	 			$stmt = mysqli_stmt_init($conn);
	 			if (!mysqli_stmt_prepare($stmt, $sql)) {
	 				exit();
	 			}
	 			else {

	 				$hasedPsw = password_hash($password, PASSWORD_DEFAULT);
	 				mysqli_stmt_bind_param($stmt, "sss". $username, $email, $hasedPsw);
	 				mysqli_stmt_execute($stmt);
	 				header("Location: ../register.php?signup=succes");
	 				exit();
	 			}
	 		}
	 	}

	 }

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
}


