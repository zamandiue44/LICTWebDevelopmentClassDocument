<?php 
$fonts = "verdana";
$bgcolor = "#FF8D33";
$fontcolor = "blue";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>ZamanWebEducation</title>
	<style type="text/css">
	body{font-family:<?php echo $fonts?>}
	.phpcoding{ width:900px; margin: 0 auto; background:<?php echo "#ddd";?>;  min-height:400px; }
	.headeroption, .footeroption{background:<?php echo $bgcolor; ?>; color:<?php echo $fontcolor; ?>; text-align:center;padding:20px}
	.headeroption h2, .footeroption h2{margin:0}
	.maincontent{min-height: 400px; padding:20px;}
	</style>
	
	
</head>
	<body>
		<div class="phpcoding">
			<Section class="headeroption">
				<h2><?php echo "PHP Fundamentals Training.";?></h2>
			</section>
			<section class="maincontent">
			1. String. 
			2. Integer.
			3. Float.
			4. Boolean.
			5. Array. 
			6. Object. 
			7. Null.
			8. Resource 
			<br />
			<hr />
			5. Array. 
			<hr />
			
				<?php 
				$x = array("Syed Zaman", "Ajharul Pinto", "Abdul Razzak");
				
				var_dump($x);
				
				
				
			
				
				?>
			</section>
			<section class="footeroption">
				<h2><?php echo "ZamanIT.com"?></h2>
				<h1><a href="P06PHPObject.php">NextExercise is Object</a></h1>
			</section>
		</div>	
	</body>
</html>
