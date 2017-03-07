<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>LICT Web Development Class Document.</title>
</head>
<body>
<?php
	$x = 5;
		$y = 10;
		function myTest(){
			global $x, $y, $z;
			$z = $x + $y;
			
		}
		myTest();//run function
		echo $z;//output the new value for variable $y;
?>
	
	
	
	








	<br />
	<a href="E006D10Feb17.php" target="_blank">E006D10Feb17ClickHere</a>
</body>
</html>