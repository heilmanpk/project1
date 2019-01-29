<?php include 'includes/header.php'; ?>
<p> SEND EMAIL</p>
<form class="contact-form" action="/test/contactform.php" method="post">
	<input type="text" name="name" placeholder="Full Name">
	<input type="text" name="mail" placeholder="Your e-mail">
	<input type="text" name="subject" placeholder="Subject">
	<textarea name="message" placeholder="Message"></textarea>
	<button type="submit" name="submit">SEND MAIL</button>
	
	<?php include 'includes/footer.php'; ?>