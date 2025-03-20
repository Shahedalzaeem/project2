<!doctype html>
<html>
<head>
<?php
session_start();
include('../inc/users.php');
?>
<style>
#error{
color: rgb(255,0,0);
padding: 4px;
}
</style>
</head>
<body>
<?php 
if(isset($_POST['username']) && isset($_POST['pasword'])) {
  $username = $_POST['username'];
  $pasword = $_POST['pasword'];

if(empty($username)) {
  $user_error = '<p id="error">please enter username <p>';
  $err_s = 1 ;
}

if(empty($pasword))  {
 $pass_error = '<p id="error">please enter password <p>';
 $err_s = 1 ;
 }
 

if(!isset($err_s))   {
 $sql = "SELECT id,username,pasword FROM user WHERE  username='$username' AND  pasword='$pasword'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);
 $num_rows = mysqli_num_rows($result);

if($num_rows != 0)   {
 $_SESSION['username'] = $row['username'];
 $_SESSION['id'] = $row['id'];
 header("location: ../home.php");
 exit();
}

else{
 $user_error = '<p id="error"> wrong username or password <p>';
 include_once("login.php");
 exit();
}
}
 include_once("login.php");
}
?>
</body>
</html>