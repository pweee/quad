<html>
<body>
<head>
	<title>Information Gathered</title>
</head>
	<?php
	$A = $_POST['A'];
	$B = $_POST['B'];
	$C = $_POST['C'];
	$ans1 = (-$B+(sqrt(pow($B,2)-(4*$A*$C))))/(2*$A);
	$ans2 = (-$B-(sqrt(pow($B,2)-(4*$A*$C))))/(2*$A);
	echo "x1= " . $ans1;
	echo "x2= " . $ans2;
		?>
</body>
</html>
