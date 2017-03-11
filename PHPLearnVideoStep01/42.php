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
<h1 align="center">Insert Query in PHP MYSQL</h1><hr />

<a href="http://localhost/phpmyadmin/tbl_sql.php?db=students&table=students_record&token=67ea86120f95243e3452f9dffffef7dd">SQL</a>

	
	<hr />
	<a href="43=connect.php" target="_blank">43=connect.php</a>
</body>
</html>