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
table {
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
 input {
display: block;
border: 2px solid #ccc;
width: 10%;
padding: 10px;
margin: 10px auto;
margin-right: 5%;
}
 </style>
</head>
<body>

<table>
<?php 
$sql = "SELECT * FROM films where movie_id IN (7,8,9) "; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
 ?>
<tbody>
<tr>
<?php 
 while($row = $result->fetch_assoc()) { 
      $img= $row['image'];?>
<td > <img src="img/<?php echo $img ?>"  width="200" > </td>

<?php 
 }
}
?> 
</tr>
</tbody>
</table>

<form action="header.php" method="post">
    <input type="submit" name="submit" value="back" />
</form>