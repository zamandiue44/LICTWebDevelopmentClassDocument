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
			<br />
			<hr />
			PHP Strings
			<hr />
			
				<?php 
				$x = "PHP is Nice";
				echo $x."<br />";
				echo "Strings Length is = ". strlen($x)."<br />";
				echo "Strings Words is = ". str_word_count($x)."<br />";
				echo "Strings Revers is = ". strrev($x)."<br />";
				echo "Strings Position is = ". strpos($x, "Nice")."<br />";
				echo "Strings Replace is = ". str_replace("PHP", "JAVA", $x)."<br />";
				?>
			</section>
			<section class="footeroption">
				<h2><?php echo "ZamanIT.com"?></h2>
				<h1><a href="P08PHPConstants.php">NextExercise is P08PHPConstants</a></h1>
			</section>
		</div>	
	</body>
</html>
