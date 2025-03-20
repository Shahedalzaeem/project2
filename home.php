<?php
include 'inc/users.php';
?>
<html>
 <head> <title>films</title>
<style>
input {
display: block;
border: 2px solid #ccc;
width: 95%;
padding: 10px;
margin: 10px auto;
}

</style>
 </head>
<body>
		<table border="1">
		<thead>
			<tr>
				<th>ID </th>
				<th>Name </th>
                <th> type </th>
                <th> director </th>
                <th> stars </th>
                <th> caption </th>
                <th> image </th>
				<th>edit</th>
                <th> delete </th>
			</tr>
           </thead>
<?php 
 $sql = "SELECT * FROM films"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) { 
	 ?>
				<tr>
					<td ><?= $row['movie_id'] ?></td>
					<td ><?= $row['name'] ?></td>
                    <td ><?= $row['type'] ?></td>
					<td ><?= $row['director'] ?></td>
                    <td ><?= $row['caption'] ?></td>
					<td ><?= $row['stars'] ?></td>
                    <td > <img src="img/<?= $row['image'] ?>" width="100" > </td>
					<td> <a href="edit.php?editid=<?= $row['movie_id']; ?>"> Edit</a> </td>
					<td> <a onclick="return confirm('Are you sure to Delete !');" href="delete.php?deleteid=<?= $row['movie_id']; ?>"> Delete</a>
					</td>
  
				</tr>
				
				<?php 
	   }
}
 else {
  echo "No results";
 } 

 ?> 			
		
		</table>	
<form action="insert.php" method="post">
		<input type="submit" name="submit" Value="insert" />
</form>
</body> 
</html>