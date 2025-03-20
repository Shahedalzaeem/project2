<?php
include 'inc/users.php' ;
if(isset($_POST['save_film'])){
$name=$_POST['name'];
$type=$_POST['type'];
$director=$_POST['director'];
$caption=$_POST['caption'];
$stars=$_POST['stars'];
$image=$_POST['image'];

mysqli_query($conn,"INSERT INTO films (name,type,director,caption,stars,image) VALUES ('$name','$type','$director','$caption','$stars','$image')");
header('location:home.php');
}
?>

