<!DOCTYPE html>
<html>
<head>
	<title>view product</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'navigation.php';?><br><br><br>
<form method="post" action="addproduct.php">
	<label>ProductCode</label>
	<input type="text" name="productcode">
	<label>ProductName</label>
	<input type="text" name="productname">
	<p></p>
	<label><input type="submit" value="AddProduct"></label>
</form>
<div class="select">
	<table border="1" cellpadding="6px" cellspacing="0px" class="table">
	<thead>
		<th>ProductCode</th>
		<th>ProductName</th>
		<th>Action</th>
	</thead>
	<?php 
include 'connection.php';
$sql="SELECT * FROM product";
$result= mysqli_query($link,$sql);
while ($row=$result->fetch_assoc()) {
	?>
<tr>
	<td><?php echo $row['productcode']; ?></td>
	<td><?php echo $row['productname']; ?></td>
	<td><a href="deleteproduct.php?productcode=<?php echo $row['productcode']; ?>" onclick="return confirm('Are you sure you want to delete?')" class="delete">delete</a>||
	    <a href="updateproduct.php?productcode=<?php echo $row['productcode']; ?>" class="update">update</a></td>
</tr>
<?php }?>
</table>
</div>
</body>
</html>