<?php 
include 'connection.php';
$productcode=$_GET['productcode'];
$sql="SELECT productcode,quantity,uniqueprice,totalprice FROM productin where productcode='$productcode'";
$result= mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
 
 // declare values to be inserted in productout

$productcode=$row['productcode'];
$quantity=$row['quantity'];
$uniqueprice=$row['uniqueprice'];
$totalprice=$row['totalprice'];

$sql1= mysqli_query($link,"INSERT INTO productout(productcode,quantity,uniqueprice,totalprice) values('$productcode','$quantity', '$uniqueprice', '$totalprice')");
// remove values on productin table

if ($sql1==true) {
	$productcode=$_GET['productcode'];
	$sql="DELETE FROM productin where productcode='$productcode'";
	$result= mysqli_query($link,$sql);
}
header("location:productin.php");
?>