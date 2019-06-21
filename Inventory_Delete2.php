<?php
if(isset($_POST['delete']))
{
$servername = "localhost";
$username = "testuser";
$password = "1";
$dbname = "test";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM inventory WHERE item = :item";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP DELETE DATA USING PDO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="Inventory_Delete2.php" method="post">
            <input type="text" name="item" required placeholder="Item"><br><br>
            <input type="submit" name="delete" required placeholder="Delete Data">
        </form>
    </body>
</html>