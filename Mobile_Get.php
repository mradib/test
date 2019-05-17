<?php 
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
function add ($num1, $num2, $num3){ 
$Model = $num1; 
$Name  = $num3;
$Price = $num2;
if(!empty($Model)){
	if(!empty($Price)){
	if(!empty($Name)){
		$host = "localhost";
        $dbusername = "testuser";
        $dbpassword = "1";
        $dbname = "test";
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if(mysqli_connect_error()){
             die('Connection Error ('. mysqli_connect_errno().')'. mysqli_connect_error());
            }
        else{
	         $sql = "INSERT INTO mobiles (Model, Name, Price) values ('$Model','$Name','$Price')";
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
        echo "Name cannot be left empty";
		die();
	}
	}
	else{
		echo "Price cannot be left empty";
		die();
	}
}
else	{
	echo "Model cannot be left empty";
	die();
} 
}
function search ($num1, $num2, $num3){
	$Model = $num1; 
    $Name  = $num3;
    $Price = $num2;
if(!empty($Model)){
	if(!empty($Price)){
	if(!empty($Name)){
		$host = "localhost";
        $dbusername = "testuser";
        $dbpassword = "1";
        $dbname = "test";
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	if(mysqli_connect_error()){
             die('Connection Error ('. mysqli_connect_errno().')'. mysqli_connect_error());
            }
    else{
	         $sql = "SELECT Model, Name, Price FROM mobiles WHERE Price <= $Price";
	         $result = $conn->query($sql);

        if ($result->num_rows > 0) {
                // output data of each row
            while($row = $result->fetch_assoc()) {
                 echo "Model: " . $row["Model"]. " Name: " . $row["Name"]. " Price: " . $row["Price"]. "<br>";
                }
        } else {
                 echo "0 results";
        }
		    }
	         
		
	$conn->close();
}
	else{
        echo "Name cannot be left empty";
		die();
	}
	}
	else{
		echo "Price cannot be left empty";
		die();
	}
}
    else{
	    echo "Model cannot be left empty";
	    die();
}
} 

if(isset($_POST['add'])){ 
add ($num1, $num2, $num3);	
/*$a = $_POST['num1']/$_POST['num2'];
echo $a;*/
}

if(isset($_POST['search'])){ 
search ($num1, $num2, $num3);	
/*$a = $_POST['num1']/$_POST['num2'];
echo $a;*/
}

?>