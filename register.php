<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><center>
	<h1>Registration form</h1>
<form action="" method="post">
	<label>ShopkeeperId</label>
	<input type="text" name="shopkeeperid">
		<label>UserName</label>
	<input type="text" name="username">
		<label>Password</label>
	<input type="password" name="password">
	<p></p>
	<label><input type="submit" value="Register"></label>
</form>
</body>
</html>

<?php 
if (count($_POST)>0) {
	include 'connection.php';
	$id=$_POST['shopkeeperid'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="INSERT INTO shopkeeper values('$id','$username','$password')";
	$result= mysqli_query($link,$sql);
	header("location:login.php");
}
?>