<?php session_start();
if ($_SESSION['username']) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>

<nav>
	<a href="#" class="logo">BERWA SHOP</a>
	<a href="index.php" class="link">Home</a>
	<a href="product.php" class="link">Product Info</a>
	<a href="productin.php" class="link">ProductIn</a>
	<a href="productout.php" class="link">ProductOut</a>
	<a href="report.php" class="link">Report</a>
	<a href="logout.php" class="logout">Logout</a>
</nav>

</body>
</html>
<?php 
}else{
	header("location:login.php");
}
?>