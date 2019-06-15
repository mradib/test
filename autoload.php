<?php
spl_autoload_register(function($test){
include'src/'.$test.'.php';
});
?>