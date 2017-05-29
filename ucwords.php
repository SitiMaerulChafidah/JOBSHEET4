<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
	$foo = 'Hello world!';
	$foo = ucwords($foo); //Hello world!
	$bar = 'HELLO WORLD!';
	$bar = ucwords($bar); //HELLO WORLD!
	$bar = ucfirst(strtolower($bar)); //Hello World!
	echo"$foo <br>$bar";
echo"</b>";
?>
</body>
</html>
