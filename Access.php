<?php 
include 'Car.php';
include 'Dog.php';
  $obj = new Car;
  $obj2 = new Dog;
echo $obj->carc();
  $name = "toy";
  $obj2->model($name);
?>