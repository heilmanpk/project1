<?php include 'includes/header.php'; ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="test/style/style.css">
</head>
<body>
<form action=includes/login.inc.php" methog="post" style="border:1pc solid #ccc">
	<div class="container">
	<h1>Logheaza-te</h1>
	<hr>
	<lavel for="username"><b>Nume de utilizator</b></label>
	<input type="text" placeholder="Nume de utilizator" name="username" reguired>

        <lavel for="username"><b>Parola</b></label>
	<input type="text" placeholder="Parola" name="password" reguired>
	<label>
     	 <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    	</label>
<br>

	<button type="submit"  name="signup-submit"class="signupbtn">Sign Up</button><br>


</body>
</html>
<br><br>
<?php include 'includes/footer.php'; ?>