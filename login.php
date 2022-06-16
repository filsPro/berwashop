<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><center>
	<h1>Login Form</h1>
<form action="" method="post">
		<label>UserName</label>
	<input type="text" name="username">
		<label>Password</label>
	<input type="password" name="password">
	<p></p>
	<label><input type="submit" value="Login"></label><p></p>
	<a href="register.php" style="text-decoration: none; color: blue;">Create an account</a>

</form>
</body>
</html>

<?php 
if (count($_POST)>0) {
	include 'connection.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * FROM shopkeeper where username='$username' AND password='$password'";
	$result= mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($result);
	if (is_array($row)) {
		$_SESSION['username']=$row['username'];
		$_SESSION['password']=$row['password'];
	echo "<script>alert('welcome to berwashop market');
	window.location.href='index.php';</script>";
	}else{
		echo "<script>alert('username or password not match');
	window.location.href='login.php';</script>";
	}
}
?>