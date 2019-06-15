<?php
include 'Inventory_Get.php';

$conn = new Inventory_Get;

//update method
if(isset($_POST['submit'])){

	$item = $_POST['item'];
	$manufacturer = $_POST['manufacturer'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];

	$data = array(
		':item' => $name,
		':manufacturer' => $manufacturer,
		':quantity' => $quantity,
		':price' => $price
	);

	$conn->update("UPDATE inventory SET item=:item,manufacturer=:manufacturer,quantity=:quantity,price=:price WHERE id=$getId",$data);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>

	<form action="" method="POST">
		<?php
			foreach($res as $r){
		?>
		<input type="text" name="item" value="<?php echo $r['item']; ?>">
		<input type="text" name="manufacturer" value="<?php echo $r['manufacturer']; ?>">
		<input type="text" name="quantity" value="<?php echo $r['quantity']; ?>">
		<input type="text" name="price" value="<?php echo $r['price']; ?>">
		<input type="submit" name="submit" value="Update">
		<?php
			}
		?>
	</form>

</body>
</html>