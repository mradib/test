<html>
<body>
<form id="loginForm" method="post">
<div class="form-group">
<label for="admin" class="control-label">Username / Email id</label>
<input type="text" class="form-control" id="admin" name="admin"  required="" title="Please enter you username" placeholder="username" >
 <span class="help-block"></span>
 </div>
<div class="form-group">
<label for="password" class="control-label">Password</label>
<input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" required="" title="Please enter your password">
 <span class="help-block"></span>
</div>
<button type="submit" class="btn btn-success btn-block" name="login">Login</button>
</form>
</body>
</html>
<?php
  session_start();
//Database Configuration File
include('Inventory_Get.php');
error_reporting(0);
  if(isset($_POST['login']))
  {
    // Getting username/ email and password
    $admin=$_POST['admin'];
    $password=md5($_POST['password']);
    // Fetch data from database on the basis of username/email and password
    $sql ="SELECT admin, password FROM `admin` WHERE (admin=:admin) and (LoginPassword=:password)";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':admin', $admin, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount() > 0)
  {
    $_SESSION['userlogin']=$_POST['admin'];
    echo "<script type='text/javascript'> document.location = 'messageviewer.php'; </script>";
  } else{
    echo "<script>alert('Invalid Details');</script>";
  }
}
?>