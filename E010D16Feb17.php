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
		<input type="text" name="firstname" placeholder="Please give First Name" value="" />
		<br />
		Last Name: <br />
		<input type="text" name="lastname" value="" />
		<br />
		<br />
		<input type="submit" value="Submit" name="zaman" />
		<br />
	</fieldset>
	Select Your Favorite color: 
	<input type="coor" name="favcolor"  /><br />
	Minimum to Maximum: 
	<input type="number" name="quantity"  min="0" max="10" /><br />
	Readonly
	<input type="text" value="John" readonly /><br />
	Disabled
	<input type="text" value="John" disabled /><br />
	Size: 
	<input type="text" value="Syed Zaman" size="40" /><br />
	Maximum Length:
	<input type="text" maxlength="5"/><br />
	Minimum Length:
	<input type="text" minlength="4"/><br />
	Autofocus 
	<input type="text" autofocus/><br />
	Multiple: 
	<input type="file" name="img" multiple/><br />
	Country code
	<input type="text" name="country_code" pattern="[A-Za-z]{3}"/><br />
	Required:
	<input type="text" required/><br />


	
</form>
	<br />
	<a href="E011D17Feb17.php" target="_blank">E011D17Feb171ClickHere</a>

</body>
</html>