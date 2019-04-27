<?php 

class Greetings{
    public function hello(){
        echo "hello from OOP, ";
    }
    public function name(){
        echo "A";
    }
}
    $greet = new Greetings();
    $greet->hello();
    $greet->name();
    
?>