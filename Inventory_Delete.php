<?php

include 'Inventory_Get.php';

$conn = new Inventory_Get;

$getId = $_GET['item'];

$conn->update("DELETE FROM inventory WHERE id=$getId",null);

header("location:index.php");

?>