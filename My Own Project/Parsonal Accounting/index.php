<?php 
include_once('dbconnect.php');
if(isset($_POST['submit'])){
	
		$investing_date= $_POST['investing_date'];
		$fittings= $_POST['fittings'];
		$amount_of_money= $_POST['amount_of_money'];
		echo $investing_date;
		echo $fittings;
		echo $amount_of_money;
		$insert="insert into accounting(investing_date,fittings,amount_of_money)values('".$investing_date."','".$fittings."','".$amount_of_money."')";
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
	<title>PHP Learn 39 Video</title>
	<style type="text/css">
	h1{
		color:blue;
	}
	</style>
</head>
<body>
<h1 align="center">Use isset function with GET and POST methods </h1><hr />
	<form action="" method="post">
	<p>investing_date: <br /> <input type="text" name="investing_date" id="" /> </p>
	<p>fittings: <br /> <input type="text" name="fittings" id="" /> </p>
	<p>amount_of_money: <br /> <input type="text" name="amount_of_money" id="" /> </p>
	<input type="submit" value="submit" name="submit"/>
	
	</form>
	<hr />
	<a href="40.php" target="_blank">40</a>
</body>
</html>