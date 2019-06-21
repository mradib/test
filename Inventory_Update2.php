<?php

// php update data in mysql database using PDO

if(isset($_POST['update']))
{
    try {
        $pdoConnect = new PDO('mysql:host=localhost;dbname=test','testuser','1');
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    
    // get values form input text and number
    
    $item = $_POST['item'];
    $manufacturer = $_POST['manufacturer'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    
    // mysql query to Update data
    
    $query = "UPDATE `inventory` SET `manufacturer`=:manufacturer,`quantity`=:quantity,`price`=:price` WHERE `item` = :item";
    
    $pdoResult = $pdoConnect->prepare($query);
    
    $pdoExec = $pdoResult->execute(array(":manufacturer"=>$manufacturer,":quantity"=>$quantity,":price"=>$price,":item"=>$item));
    
    if($pdoExec)
    {
        echo 'Data Updated';
    }else{
        echo 'ERROR Data Not Updated';
    }

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP UPDATE DATA USING PDO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="Inventory_Update2.php" method="post">
            <input type="text" name="item" required placeholder="Item"><br><br>
            <input type="text" name="manufacturer" required placeholder="Manufacturer"><br><br>
            <input type="number" name="quantity" required placeholder="Quantity"><br><br>
            <input type="number" name="price" required placeholder="Price"><br><br>
            <input type="submit" name="update" required placeholder="Update Data">
        </form>
    </body>
</html>

