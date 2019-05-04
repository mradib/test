<?php
//include 'Avenger.php';
class Ironman extends Avenger{
    public function name(){
    echo "\n Tony Stark";    
}
    public function Status(){
    echo "\n Tony Stark Deceased";
    }
	public function Director(){
	parent::Director();
	}
}

?>