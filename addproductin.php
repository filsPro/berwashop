<?php
include 'connection.php';
$productcode=$_POST['productcode'];
$date=$_POST['date'];
$quantity=$_POST['quantity'];
$uniqueprice=$_POST['uniqueprice'];
$totalprice=$quantity*$uniqueprice;
$sql="INSERT INTO productin values('$productcode','$date','$quantity','$uniqueprice','$totalprice')";
$result= mysqli_query($link,$sql);
header("location:productin.php");
?>