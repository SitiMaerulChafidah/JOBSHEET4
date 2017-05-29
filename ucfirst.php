<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
	$foo = 'Hello world!';
	$foo = ucfirst($foo); //Hello world!
	$bar = 'HELLO WORLD!';
	$bar = ucfirst($bar); //HELLO WORLD!
	$bar = ucfirst(strtolower($bar)); //Hello World!
	echo"$foo <br>$bar";
echo"</b>";
?>
</body>
</html>
