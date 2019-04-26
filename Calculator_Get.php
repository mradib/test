<html>
<body>
<?php 
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

function add ($num1, $num2){
	$b = $num1 + $num2;
	echo $b;
}
function sub ($num1, $num2){
	$b = $num1 - $num2;
	echo $b;
}
function mul ($num1, $num2){
	$b = $num1 * $num2;
	echo $b;
}
function div ($num1, $num2){
	$b = $num1 / $num2;
	echo $b;
}

if(isset($_POST['add'])){
add ($num1, $num2);	
/*$a = $_POST['num1']+$_POST['num2'];
echo $a;*/
}
if(isset($_POST['sub'])){ 
sub ($num1, $num2);	
/*$a = $_POST['num1']-$_POST['num2'];
echo $a;*/
}
if(isset($_POST['mul'])){ 
mul ($num1, $num2);	
/*$a = $_POST['num1']*$_POST['num2'];
echo $a;*/
}
if(isset($_POST['div'])){ 
div ($num1, $num2);	
/*$a = $_POST['num1']/$_POST['num2'];
echo $a;*/
}
?>  
</body>
</html>