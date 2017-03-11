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
<h1 align="center">Create Table in PHP MYSQL</h1><hr />
<pre>
	ID
	Name 
	Email
	Address
	Joining_Date
</pre>
<a href="http://localhost/phpmyadmin/sql.php?db=students&token=67ea86120f95243e3452f9dffffef7dd&goto=db_structure.php&table=students_record&pos=0">students_record</a>

	
	<hr />
	<a href="42.php" target="_blank">42</a>
</body>
</html>