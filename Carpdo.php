<?php
class Connection{
    public $conn;
    public function _construct()
    {
        $this-> conn = new PDO('mysql:host=localhost;dbname=ctg219-oop','root','');
    }
    public function insertAvenger($name,$power,$is_died)
}