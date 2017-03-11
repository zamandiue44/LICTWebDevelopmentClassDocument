<?php 
if(isset($_POST['first']) &&($_POST['last'])){
		echo $_POST['first'];
		echo " ";
		echo $_POST['last'];
		//mysql_query();

}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Learn</title>
	<style type="text/css">
	h1{
		color:blue;
	}
	</style>
</head>
<body>
<h1 align="center">Use isset function with GET and POST methods </h1><hr />
	<form action="" method="post">
	<p>First Name: <br /> <input type="text" name="first" id="" /> </p>
	<p>Last Name: <br /> <input type="text" name="last" id="" /> </p>
	<input type="submit" value="submit" />
	
	</form>
	<hr />
	<a href="40.php" target="_blank">40</a>
</body>
</html>