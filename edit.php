<?php
include 'inc/users.php';
?>
<!doctype html>
<html>
<head>
    <title>update</title>
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

  
    <?php  
	$id=$_GET['editid']; 
 $sql = "SELECT * FROM films WHERE movie_id=" .$id; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
     $num_rows = mysqli_num_rows($result);
  
	?>

		
	
        <form action="" method="post">

        
        <div>
                   <label>Name</label>
                   <input type="text" name="name" value="<?php echo $row['name']; ?>" class="medium" >
       </div>
       <div class="form-group">
                   <label>type movie</label>
                   <input type="text" name="type" value="<?php echo $row['type']; ?>" class="medium" >
       </div>
       <div class="form-group">
                    <label>director</label>
                    <input type="text" name="director" value="<?php echo $row['director']; ?>" class="medium" > 
       </div>
       <div class="form-group">
                    <label>stars</label>
                    <input type="text" name="stars" value="<?php echo $row['stars']; ?>" class="medium" > 
        </div>
        <div class="form-group">
                    <label>caption</label>
                    <input type="text" name="caption" value="<?php echo $row['caption']; ?>" class="medium" >
        </div>
        <div class="form-group">
                    <label>image</label>
                    <input type="text" name="image" value="<?php echo $row['image']; ?>" class="medium" > 
        </div>
                    <input type="submit" name="submit" Value="Update" >
        
        </form>                               
       
    <?php
  }}
  if(isset($_POST['submit'])){
 $name= $_POST['name'];
 $type =$_POST['type'];
 $director=$_POST['director'];
 $caption=$_POST['caption'];
 $stars=$_POST['stars'];
 $image=$_POST['image'];
  $sql2="UPDATE films SET name='$name', type='$type' ,director='$director' , caption='$caption', stars='$stars', image='$image' WHERE movie_id= '$id'";
  mysqli_query($conn,$sql2);
  header('location: home.php');
  }
  ?>