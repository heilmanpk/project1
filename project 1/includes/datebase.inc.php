<?php

$servername = "joel.securewebhosting.net";
$dBusername = "divingho_project";
$dBpassword = "Patrickpatrick1";
$dBname = "divingho_project";

$conn = mysqli_connect($servername, $dBusername, $dBpassword, $dBname);

if (!$conn){
	die("Connection failed: ".mysqli_connect_error());
}