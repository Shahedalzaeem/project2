<?php 
include 'inc/users.php';
 ?>
<!DOCTYPE html>
<html>
<head>
      <title>films</title>
<meta charest="UTF-8">
<meta name="viewport" content="width=device-width", initial-scale="1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body{
background-color: #ddd;
}

table.a  {
background-color: #ddd;
border-collapse: collapse;
width: 20%;
margin-left: 5%;
margin-top: 5%;
}

table.b {
 background-color: #ddd;
 border-collapse: collapse;
 width: 20%;
 margin-left: 5%;
 margin-top: 5%;
}

table.c {
background-color: #ddd;
 border-collapse: collapse;
 width: 20%;
 margin-left: 5%;
 margin-top: 5%;
}

td {
 padding-right: 100px;
 padding-left:100px;
 text-align: left;
 border-bottom: 1px solid #ddd;
 border-left:1px solid #ddd; 
 vertical-align: middle;
 }



</style>
</head>
<body>
<nav>
  
    <ul>
      <li><a class="active" href="header.php">Home </a></li>
      <li> <a href="admin\login.php">admin</a>
    
      </li>
      <li><a href="#">About</a></li>
      <li><a href="#">types movie</a>
<div class="sub-menu-1"> 
    <ul>
      <li><a href="comedy.php">Comedy</a></li> <br>
      <li><a href="horror.php">Horror</a></li> <br>
      <li><a href="action.php">Action</a></li>
    </ul>
</div>
      </li>
      <li><a href="#">Privacy Policy</a></li>
   </ul>
<form class="search">
   <input class="srch" type="text" name="search" placeholder="search">
   <button class="btn" type="submit" name="submit"> search</button>
</form>

</nav>


<table class="a"> 
<?php 
$sql = "SELECT * FROM films where movie_id IN (1,2,3) "; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
   ?>
<tbody>
<tr>
<?php
 while($row = $result->fetch_assoc()) { 
$img= $row['image']; 
//$name = $row['name']; 
?>
<td> <img src="img/<?php echo $img ?>" width="200"> </td> 
<?php 
 }
}
?> 
</tr>
</tbody>
<?php 
$sql = "SELECT * FROM films where movie_id IN (1,2,3) "; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
   ?>
<tbody>
<tr>
<?php
 while($row = $result->fetch_assoc()) {  
?>
<td> <a href="details.php?detailsid=<?= $row['movie_id']; ?>"> details</a> </td>
<?php
 }
}
?>  
</tr>
</tbody>
</table>


<table class="b">
<?php 
$sql = "SELECT * FROM films where movie_id IN (4,5,6) "; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
   ?>
<tbody>
<tr>
<?php
 while($row = $result->fetch_assoc()) { 
$img= $row['image']; 
//$name = $row['name']; 
?>
<td> <img src="img/<?php echo $img ?>" width="200"> </td> 
<?php
 }
}
?>  
</tr>
</tbody>

<?php 
$sql = "SELECT * FROM films where movie_id IN (4,5,6) "; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
   ?>
<tbody>
<tr>
<?php
 while($row = $result->fetch_assoc()) {  
?>
<td> <a href="details.php?detailsid=<?= $row['movie_id']; ?>"> details</a> </td>
<?php
 }
}
?>  
</tr>
</tbody>
</table>


<table class="c">
<?php 
$sql = "SELECT * FROM films where movie_id IN (7,8,9) "; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) { 
?>
<tbody>
<tr>
<?php
 while($row = $result->fetch_assoc()) { 
$img= $row['image']; ?>

<td > <img src="img/<?php echo $img ?>" width="200"> </td>

<?php 
 }
}
?> 
</tr>
</tbody>
<?php 
$sql = "SELECT * FROM films where movie_id IN (7,8,9) "; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
   ?>
<tbody>
<tr>
<?php
 while($row = $result->fetch_assoc()) {  
?> 
<td> <a href="details.php?detailsid=<?= $row['movie_id']; ?>"> details</a> </td>
<?php
 }
}
?>  
</tr>
</tbody>
</table>
</body>
</html>