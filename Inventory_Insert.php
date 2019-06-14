<?php
include 'Inventory_Get.php';

$conn = new Inventory_Get;


if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$data = array(
		':item' => $item,
		':manufacturer' => $manufacturer,
		':quantity' => $quantity,
		':price' => $price
	);
	$conn->update("INSERT INTO users (item,manufacturer,quantity, price) VALUES (:item,:manufacturer,:quantity,:price)",$data);

	echo "Inserted";	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>

	<form action="" method="POST">
		<input type="text" name="item">
		<input type="text" name="manufacturer">
		<input type="text" name="quantity">
		<input type="text" name="price">
		<input type="submit" name="submit" value="register">
	</form>

</body>
</html>