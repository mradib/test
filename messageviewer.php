<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Messages</th></tr>";

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
    $stmt = $conn->prepare("SELECT * FROM messages"); 
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



if(isset($_POST['submit'])){
    $message = $_POST['message'];
	$username = "testuser";
	$password = 1;
	$data = array(
		':message' => $message
	);
	$conn->update("DELETE FROM messages WHERE message = :message", $data);

	echo "Deleted";	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>view and delete</title>
</head>
<body>

	<form action="" method="POST">
		<input type="text" name="message">
		<input type="submit" name="submit" value="delete">
	</form>

</body>
</html>