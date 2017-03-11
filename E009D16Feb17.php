<?php
if(isset($_POST['zaman']))
{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];

echo $fname."<br />";
echo $lname."<br />";
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Zaman is Learning</title>
</head>
<body>

<form action="" method="POST">
	<fieldset>
		<legend>Personal Information: </legend>
		First name: <br />
		<input type="text" name="firstname" value="" />
		<br />
		Last Name: <br />
		<input type="text" name="lastname" value="" />
		<br />
		<br />
		<input type="submit" value="Submit" name="zaman" />
		<br />
	</fieldset>
</form>
	<br />
	<a href="E010D16Feb17.php" target="_blank">E010D16Feb17ClickHere</a>

</body>
</html>