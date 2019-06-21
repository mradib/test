<?php

include 'Inventory_Get.php';

$conn = new Inventory_Get;

//search
if(isset($_POST['src'])){
	$query = $_POST['search'];
	$result = $conn->getAll("SELECT * FROM inventory WHERE name LIKE '%$query%'",null);
}else{
	$result = $conn->getAll("SELECT * FROM inventory",null);
}


if(isset($_POST['submit'])){
	$item = $_POST['item'];
	$manufacturer = $_POST['manufacturer'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	
	$conn->insertData($item,$manufacturer,$quantity,$price);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>form collection</title>
</head>
<body>


	<form action="" method="POST" enctype="multipart/form-data">
		<input type="text" name="item" placeholder="Item"><br>
		<input type="text" name="manufacturer"><br>
		<input type="number" name="quantity"><br>
		<input type="number" name="price"><br>
		<input type="submit" name="submit" value="Insert">
	</form>

	<hr>
	<form action="" method="POST">
		<input type="text" name="search">
		<input type="submit" name="src" value="search">
	</form>
	<hr>

	<table border="1">
		<?php 
		foreach ($result as $res){
		?>
		<tr>
			<td><?php echo $res['item'] ?></td>
			<td><?php echo $res['manufacturer'] ?></td>
			<td><?php echo $res['quantity'] ?></td>
			<td><?php echo $res['price'] ?></td>
		</tr>

		<?php
		}
		?>
	</table>

</body>
</html>