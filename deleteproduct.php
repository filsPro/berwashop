<?php 
include 'connection.php';
$productcode=$_GET['productcode'];
$sql="DELETE FROM product where productcode='$productcode'";
$result= mysqli_query($link,$sql);
header("location:product.php");
?>