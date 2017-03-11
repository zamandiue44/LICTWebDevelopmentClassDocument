<?php
include_once('dbconnect.php');

if(isset($_POST['zaman']))
{
	echo $name=$_POST['name'];
echo 	$email=$_POST['email'];
	echo $address=$_POST['address'];
	echo $joining_date=$_POST['joining_date'];
	
	$insert="insert into students_record(name,email,address,joining_date)values('".$name."','".$email."','".$address."','".$joining_date."')";
	$query=mysqli_query($connection, $insert);
	if($query)
	{
		echo "Data Send";
	}
	else
	{
		echo "Data Not Send !";
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Insert PHP from data in msql Tables</title>
	<style type="text/css">
	h1{
		color:blue;
	}
	</style>
</head>
<body>
		<form action=""  method="post">
			<p>Name: <br /> <input type="text" name="name" /></p>
			<p>Email: <br /> <input type="text" name="email" /></p>
			<p>Address: <br /> <input type="text" name="address" /></p>
			<p>Joining Date: <br /> <input type="text" name="joining_date" /></p>
			<p><input type="submit" value="Submit" name="zaman"/></p>
			
		</form>

	<hr />
	<a href="45.php" target="_blank">45</a>
</body>
</html>