<?php
session_start();
include 'inc/users.php';
?>
<!doctype html>
<html>
<head>
    <title>insert</title>
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
height: 600px;
width: 800px;
border: 2px solid #ccc;
padding: 60px;
background: #fff;
border-radius: 15px;
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
}
</style>
</head>
<div>

<form action="db.php" method="post">
        <div>
                   <label>Name</label>
                   <input type="text" name="name"  class="medium" >
       </div>
       <div class="form-group">
                   <label>type movie</label>
                   <input type="text" name="type"  class="medium" >
       </div>
       <div class="form-group">
                    <label>director</label>
                    <input type="text" name="director"  class="medium" > 
       </div>
       <div class="form-group">
                    <label>caption</label>
                    <input type="text" name="caption"  class="medium" >
       <div class="form-group">
                    <label>stars</label>
                    <input type="text" name="stars"  class="medium" > 
        </div>
        <div class="form-group">
                    <label>image</label>
                    <input type="text" name="image"  class="medium" > 
        </div>
        <div>
                    <input type="submit" name="save_film" value="insert" >
        </div>
        </form> 
</div>