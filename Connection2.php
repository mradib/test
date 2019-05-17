<?php 
$username = "dummy";
$password = "password";
if(!empty($username)){
	if(!empty($password)){
		$host = "localhost";
        $dbusername = "testuser";
        $dbpassword = "1";
        $dbname = "test";
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if(mysqli_connect_error()){
             die('Connection Error ('. mysqli_connect_errno().')'. mysqli_connect_error());
}
        else{
	         $sql = "INSERT INTO test (username, password) values ('$username','$password')";
	         if ($conn->query($sql)){
		echo "New record is inserted successfully";
		    }
	         else{
		echo "Error: ". $sql ."<br>";
	        }
	$conn->close();
}
	}
	else{
        echo "Password cannot be left empty";
		die();
	}
}
else	{
	echo "Username cannot be left empty";
	die();
}
?> 