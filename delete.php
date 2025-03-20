<?php
include 'inc/users.php' ;
$id=$_GET['deleteid'];
$sql="DELETE FROM films WHERE movie_id=" .$id;
$query_run=mysqli_query($conn,$sql); 
header('location: home.php');
?>