<?php
include 'Inventory_Get.php';

$conn = new Inventory_Get;
$item = $_POST['item'];


if(isset($_POST['submit'])){
	$username = "testuser";
	$password = 1;
	$data = array(
		':item' => $item
	);
	$conn->update("DELETE FROM inventory WHERE item = :item", $data);

	echo "Deleted";	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>

	<form action="" method="POST">
		<input type="text" name="item">
		<input type="submit" name="submit" value="register">
	</form>

</body>
</html>