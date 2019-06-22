<?php
include 'Inventory_Get.php';

$conn = new Inventory_Get;


if(isset($_POST['submit'])){
    $message = $_POST['message'];
	$username = "testuser";
	$password = 1;
	$data = array(
		':message' => $message
	);
	$conn->update("INSERT INTO messages (message) VALUES (:message)",$data);

	echo "message sent to admin";	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>message admin</title>
</head>
<body>

	<form action="" method="POST">
		<input type="text" name="message">
		<input type="submit" name="submit" value="send">
	</form>

</body>
</html>