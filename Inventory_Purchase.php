<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Item</th><th>Manufacturer</th><th>Quantity</th><th>Price</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "testuser";
$password = "1";
$dbname = "test";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT item, manufacturer, quantity, price FROM inventory"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

<?php
include 'Inventory_Get.php';

$conn = new Inventory_Get;
$item = $_POST['item'];
$manufacturer = $_POST['manufacturer'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

function rem($quantity){
	$data = array(
		':item' => $item,
		':manufacturer' => $manufacturer,
		':quantity' => $quantity,
		':price' => $price
	);
	$sql = "SELECT quantity FROM inventory WHERE item = :item";
    $result = $conn->query($sql);
	$remain = $result - $quantity;
	return $remain;
}

if(isset($_POST['submit'])){
	$username = "testuser";
	$password = 1;
	$data = array(
		':item' => $item,
		':manufacturer' => $manufacturer,
		':quantity' => $a,
		':price' => $price
	);
	$a = rem($quantity);
	$conn->update("UPDATE inventory SET manufacturer = :manufacturer, quantity = :quantity, price = :price WHERE item = :item", $data);

	echo "Purchased";	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>purchase</title>
</head>
<body>

	<form action="" method="POST">
		<input type="text" name="item">
		<input type="text" name="manufacturer">
		<input type="text" name="quantity">
		<input type="text" name="price">
		<input type="submit" name="submit" value="buy">
	</form>

</body>
</html>