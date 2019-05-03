<?php
//include 'Avenger.php';
class Spiderman extends Avenger{
    public function name(){
    echo "\n Peter Parker";    
}
    public function Status(){
    echo "\n Peter Parker Too Young";
    }
	public function Director(){
	parent::Director();
	}
}

?>