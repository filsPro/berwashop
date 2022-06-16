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
$sql="SELECT * FROM productout where productcode='$productcode'";
$result= mysqli_query($link,$sql);
while ($row=$result->fetch_assoc()) {
	$productcode=$row['productcode'];
	?>

<form method="post" action="">
	<label>ProductCode</label>
	<input type="text" name="productcode" value="<?php echo $productcode; ?>">
	<label>Date</label>
	<input type="date" name="date">
	<label>Quantity</label>
	<input type="text" name="quantity">
	<label>uniqueprice</label>
	<input type="text" name="uniqueprice">
	<label>TotalPrice</label>
	<input type="text" name="totalprice" disabled>	<p></p>
	<label><input type="submit" value="UpdateProductOut"></label>
</form>
<?php }?>
</body>
</html>
<?php 
if (count($_POST)>0) {
include 'connection.php';
$productcode=$_POST['productcode'];
$date=$_POST['date'];
$quantity=$_POST['quantity'];
$uniqueprice=$_POST['uniqueprice'];
$totalprice=$quantity*$uniqueprice;
$sql="UPDATE productout SET productcode='$productcode',date='$date',quantity='$quantity',uniqueprice='$uniqueprice',totalprice='$totalprice' where productcode='$productcode'";
$result= mysqli_query($link,$sql);
header("location:productout.php");
}
?>