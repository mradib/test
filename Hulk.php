<?php
//include 'Avenger.php';
class Hulk extends Avenger{
    public function name(){
    echo "\n Bruce Banner";    
}
    public function Status(){
    echo "\n Bruce Banner Active";
    }
	public function Director(){
	parent::Director();
	}
}

?>