<html>
<body>
<head>
	<title>Information Gathered</title>
</head>
	<?php
	$A = $_POST['A'];
	$B = $_POST['B'];
	$C = $_POST['C'];
	$ANS1 = (-$B+(sqrt(pow($B,2)-(4*$A*$C))))/(2*$A);
	$ANS2 = (-$B-(sqrt(pow($B,2)-(4*$A*$C))))/(2*$A);
	echo $ANS1."<br>";
	echo $ANS2;
		?>
</body>
</html>
