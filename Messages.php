<?php

session_start();
include "Connection.php";
include "Form.php";
$form=new Form();
$conn= new Connection();
if(isset($_SESSION['Email'])&& isset($_SESSION['Password'])){
    $data=$conn->GetMessages();
    $form->Messages($data);

}
else{

    echo '<script type="text/javascript">alert("You have to login first!!");</script>';
    echo '<script>window.location="LogIn.php"</script>';

}
