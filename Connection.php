<?php 
$pdo = new PDO("mysql:host=localhost;dbname=ctg219-oop","root","");
if($pdo){
    echo "Connected";
}

class Connection{
    
}

$conn = new Connection;
$conn-> insertAvenger(1,"Captain Stupid","Teleport",1);
?> 