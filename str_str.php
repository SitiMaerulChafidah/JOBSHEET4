<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
	$email = 'sitimaerulcha@gmail.com';
	$domain = strstr($email, '@');
	echo $domain. "<br>"; // prints yahoo.com
	$mail = strstr($email, 'm');
	echo $mail; // prints sitimaerulcha@gmail.com
echo"</b>";
?>
</body>
</html>
