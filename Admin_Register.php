<?php
include 'Inventory_Get.php';

$conn = new Inventory_Get;

if(isset($_POST['submit'])){
    $admin = $_POST['admin'];
    $password = $_POST['password'];
	$username = "testuser";
	$password = 1;
	$data = array(
		':admin' => $admin,
        ':password' => $password
	);
	$conn->update("INSERT INTO admin (admin, password) VALUES (:admin, :password)",$data);

	echo "message sent to admin";	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>admin register</title>
</head>
<body>

	<form action="" method="POST">
		<input type="text" name="admin" placeholder="add admin's username">
        <input type="password" name="password" placeholder="password">
		<input type="submit" name="submit" value="register">
	</form>

</body>
</html>