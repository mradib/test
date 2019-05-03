<?php
//include 'Avenger.php';
class CaptainAmerica extends Avenger{
    public function name(){
    echo "\n Steve Rogers";    
    }
    public function Status(){
    echo "\n Steve Rogers Retired";
    }
	public function Director(){
	parent::Director();
	}
}

?>