<!DOCTYPE html>
<html>
<head>
	<title>view product In</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'navigation.php';?><br><br><br>
<center>
<div>
	<table border="1" cellpadding="6px" cellspacing="0px" class="table">
	<thead>
		<th>ProductCode</th>
		<th>Date</th>
		<th>Quantity</th>
		<th>UniquePrice</th>
        <th>TotalPrice</th>
		<th>Action</th>
	</thead>
	<?php 
include 'connection.php';
$sql="SELECT * FROM productout";
$result= mysqli_query($link,$sql);
while ($row=$result->fetch_assoc()) {
	?>
<tr>
	<td><?php echo $row['productcode']; ?></td>
	<td><?php echo $row['date']; ?></td>
	<td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['uniqueprice']; ?></td>
    <td><?php echo $row['totalprice']; ?></td>
	<td><a href="deleteproductout.php?productcode=<?php echo $row['productcode']; ?>" onclick="return confirm('Are you sure you want to delete?')" class="delete">delete</a>||
	    <a href="updateproductout.php?productcode=<?php echo $row['productcode']; ?>" class="update">update</a></td>
</tr>
<?php }?>
</table>
</div>
</body>
</html>