<?php 
include 'Gorib.php';

    class MyStatus implements Gorib{ 

	public function lowMoney(){ 
		echo "Low Money" . "\n"; 
	} 

	public function Homeless(){ 
		echo "Homeless". "\n"; 
	} 
} 

$obj = new MyStatus; 
$obj->lowMoney(); 
$obj->Homeless(); 

?> 