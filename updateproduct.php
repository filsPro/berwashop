<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php include 'navigation.php';?><center><br><br><br>

<?php 
include 'connection.php';
$productcode=$_GET['productcode'];
$sql="SELECT * FROM product where productcode='$productcode'";
$result= mysqli_query($link,$sql);
while ($row=$result->fetch_assoc()) {
	$productcode=$row['productcode'];
	?>

<form method="post" action="">
	<label>ProductCode</label>
	<input type="text" name="productcode" value="<?php echo $productcode; ?>">
	<label>ProductName</label>
	<input type="text" name="productname">
	<p></p>
	<label><input type="submit" value="UpdateProduct"></label>
</form>
<?php }?>
</body>
</html>

<?php 
if (count($_POST)>0) {
	include 'connection.php';
	$productcode=$_POST['productcode'];
$productname=$_POST['productname'];
$sql="UPDATE product SET productcode='$productcode',productname='$productname' where productcode='$productcode'";
$result= mysqli_query($link,$sql);
header("location:product.php");
}
?>