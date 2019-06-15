<?php
class Inventory_Get{
	public $conn;
	public function __construct(){
		$this->conn = new PDO('mysql:host=localhost;dbname=test','testuser','1');
	}
	public function insertData($item,$manufacturer,$quantity,$price){
		try{
			$statement = $this->conn->prepare("INSERT INTO inventory(:item,:manufacturer,:quantity,:price)VALUES(:item,:manufacturer,:quantity,:price)");
			$statement -> execute(
			array(
			':item' => $item,
			':manufacturer' => $manufacturer,
			':quantity' => $quantity,
			':price' => $price
			)
			);
			echo "Inserted";
		}catch(\Exception $e){
			echo "error: ".$e->getMessage();
		}
	}
	public function getAll($query,$array)
	{
		$statement = $this->conn->prepare($query);
		$statement->execute($array);
		return $statement->fetchAll();
	}


	public function update($query,$array)
	{
		$statement = $this->conn->prepare($query);
		$statement->execute($array);
	}


}
?>