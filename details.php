<?php
include 'inc/users.php';
?>
<!doctype html>
<html>
<head>
    <title>details</title>
<style>
body {
background: #1690A7;
justify-content: center;
align-items: center;
margin-top: 10%;
}
*{
font-family: sans-serif;
box-sizing: border-box;
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
<table border="1">
		<thead>
			<tr>
				<th>Name </th>
                <th> type </th>
                <th> director </th>
                <th> stars </th>
                <th> caption </th>
                <th> image </th>
			</tr>
           </thead>
<?php  
	$id=$_GET['detailsid']; 
 $sql = "SELECT * FROM films WHERE movie_id=" .$id; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
     $num_rows = mysqli_num_rows($result);
  
	?>
   <tr>
				
					<td ><?= $row['name'] ?></td>
                    <td ><?= $row['type'] ?></d>
					<td ><?= $row['director'] ?></td>
                    <td ><?= $row['caption'] ?></td>
					<td ><?= $row['stars'] ?></td>
                    <td > <img src="img/<?= $row['image'] ?>" width="100" > </td>
        
    </tr>
    <?php 
	   }
}
 else {
  echo "No results";
 } 

 ?> 
 </table>
 <form action="header.php" method="post">
    <input type="submit" name="submit" value="back" />
</form>
</body>
</html>