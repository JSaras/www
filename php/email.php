<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email</title>
</head>
<body>
	<?php
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $comments = $_POST['message'];
	  

	  $to = 'jeff.saras@gmail.com';
	  $subject = 'Message from' . $name . 'on JeffSaras.com';
	  $msg = $name . "Sent this message: " . $comments . "<br />" .
	  $name . "contact info is " . "Email: " . $email . "  Website: " . $website;
	  mail($to, $subject, $msg, 'From:' . $email);

	  echo 'Thanks for submitting the form.<br />';

	?>

	<a href="http://profile.jeffsaras.com">Go back to the site</a>
</body>
</html>