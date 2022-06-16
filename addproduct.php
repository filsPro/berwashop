<?php
include 'connection.php';
$productcode=$_POST['productcode'];
$productname=$_POST['productname'];
$sql="INSERT INTO product values('$productcode','$productname')";
$result= mysqli_query($link,$sql);
header("location:product.php");
?>