<!DOCTYPE html>
<html>
<head>
	<title>Report Status</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'navigation.php'; ?>;<center>
<br><br><br>
<div>
	<h1>Report of Product in the stock</h1>
<table border="1" cellpadding="6px" cellspacing="0px" class="table">
	<thead>
		<th>Index N<sup>o</sup></th>
		<th>ProductCode</th>
		<th>ProductName</th>
		<th>Date</th>
		<th>Quantity</th>
		<th>UniquePrice</th>
        <th>TotalPrice</th>
	</thead>
	<?php 
include 'connection.php';
$a=1;
$sql="SELECT * FROM product JOIN productin ON product.productcode=productin.productcode";
$result= mysqli_query($link,$sql);
while ($row=$result->fetch_assoc()) {
	?>
<tr>
	<td><?php echo $a++; ?></td>
	<td><?php echo $row['productcode']; ?></td>
	<td><?php echo $row['productname']; ?></td>
	<td><?php echo $row['date']; ?></td>
	<td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['uniqueprice']; ?></td>
    <td><?php echo $row['totalprice']; ?></td>	
</tr>
<?php }?>
</table>
</div><br><br><br>
<div>
	<h1>Report of Product Out the stock</h1>
<table border="1" cellpadding="6px" cellspacing="0px" class="table">
	<thead>
		<th>Index N<sup>o</sup></th>
		<th>ProductCode</th>
		<th>ProductName</th>
		<th>Date</th>
		<th>Quantity</th>
		<th>UniquePrice</th>
        <th>TotalPrice</th>
	</thead>
	<?php 
include 'connection.php';
$a=1;
$sql="SELECT * FROM product JOIN productout ON product.productcode=productout.productcode";
$result= mysqli_query($link,$sql);
while ($row=$result->fetch_assoc()) {
	?>
<tr>
	<td><?php echo $a++; ?></td>
	<td><?php echo $row['productcode']; ?></td>
	<td><?php echo $row['productname']; ?></td>
	<td><?php echo $row['date']; ?></td>
	<td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['uniqueprice']; ?></td>
    <td><?php echo $row['totalprice']; ?></td>	
</tr>
<?php }?>
</table>
</div>
</center>
</body>
</html>