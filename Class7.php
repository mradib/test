<?php 

interface MyInterfaceName1{ 

	public function methodA(); 

} 

interface MyInterfaceName2 extends MyInterfaceName1{ 

	public function methodB(); 
} 

?> 
<?php 

interface MyInterfaceName{ 

	public function method1(); 
	public function method2(); 

} 

class MyClassName implements MyInterfaceName{ 

	public function method1(){ 
		echo "Method1 Called" . "\n"; 
	} 

	public function method2(){ 
		echo "Method2 Called". "\n"; 
	} 
} 

$obj = new MyClassName; 
$obj->method1(); 
$obj->method2(); 

?> 
