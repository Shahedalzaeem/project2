<!doctype html>
<html>
<head>
<title>LOGIN</title>
<?php
include "../inc/users.php";
?>
<style>
body {
background: #1690A7;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
}
*{
font-family: sans-serif;
box-sizing: border-box;
}
form{
width: 500px;
border: 2px solid #ccc;
padding: 60px;
background: #fff;
border-radius: 15px;
}
h2 {
text-align: center;
margin-bottom: 40px;
}
input {
display: block;
border: 2px solid #ccc;
width: 95%;
padding: 10px;
margin: 10px auto;
}
label{
color: #888;
font-size: 18px;
padding: 10px;
}
button{
float: right;
background: #555;
padding: 10px 15px ;
color: #fff;
border-radius: 5px;
margin-right: 10px;
border: none;
}
button:hover{
opacity: .7;
}
.error{
background:#f2DEDE;
color: #A94442;
padding: 10px;
width: 95%;
border-radius: 5px;
}
</style>
</head>
<body>
<div class="container">
<form action="login_post.php" method="post" >
<h2>LOGIN </h2>
<?php 
if(isset($user_error)){
 echo $user_error;
}
?>
<label> Name </label>
<input type="text" name="username" placeholder="Enter name"> <br>
<?php 
if(isset($pass_error)){
 echo $pass_error;
}
?>
<label> Password </label>
<input type="password" name="pasword" placeholder="Enter password"> <br>

<button name='submit' type="submit" >login</button>
</form>
</div>
</body>
</html>