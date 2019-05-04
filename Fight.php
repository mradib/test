<?php 
include 'CaptainAmerica.php';
include 'Ironman.php';
include 'Hulk.php';
include 'Spiderman.php';
//require_once 'Avenger.php';
$obj = new CaptainAmerica;
$obj2 = new Ironman;
$obj3 = new Hulk;
$obj4 = new Spiderman;
$obj->name();
$obj->Status();
$obj2->name();
$obj2->Status();
$obj3->name();
$obj3->Status();
$obj4->name();
$obj4->Status();
$obj4->Director();
?>