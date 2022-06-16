<?php
include 'connection.php';
$productcode=$_GET['productcode']; 
$sql="DELETE FROM productout where productcode='$productcode'";
$result= mysqli_query($link,$sql);
header("location:productout.php");
?>