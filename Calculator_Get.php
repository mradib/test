<html>
<body>
<?php 
if(isset($_POST['add'])){ 
$a = $_POST['num1']+$_POST['num2'];
echo $a;
}
if(isset($_POST['sub'])){ 
$a = $_POST['num1']-$_POST['num2'];
echo $a;
}
if(isset($_POST['mul'])){ 
$a = $_POST['num1']*$_POST['num2'];
echo $a;
}
if(isset($_POST['div'])){ 
$a = $_POST['num1']/$_POST['num2'];
echo $a;
}
?>  
</body>
</html>