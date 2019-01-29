<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "contact@divinghost.com";
	$headers = "From: ".$mailFrom;
	$txt = "Ai primit un email de la ".$name.".\n\n".$message;


	mail($mailTo, $subject, $txt, $headers);
	header("Location: contact.php?mailsend");
}
	