<?php 
include("connection.php");
$sql="SELECT * FROM final_ajax";
$data=mysqli_query($conn,$sql);
?>
<table border="1" align="center">
	<tr>
		<th>Sl_no</th>
		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Password</th>
		<th>Phone</th>
		<th>Gender</th>
		<th>Degree</th>
		<th>language</th>
		<!-- <th>picsource</th> -->
		<th>Action</th>
	</tr>
	</tr>
<?php
$i=1;
while($result=mysqli_fetch_assoc($data))
{
	?>
	<tr>
		<td><?php echo $i++;?></td>
		<td><?php echo $result["name"] ?></td>
		<td><?php echo $result["email"] ?></td>
		<td><?php echo $result["address"] ?></td>
		<td><?php echo $result["password"] ?></td>
		<td><?php echo $result["phone"] ?></td>
		<td><?php echo $result["gender"] ?></td>
		<td><?php echo $result["degree"] ?></td>
		<td><?php echo $result["language"] ?></td>
		<td><a href="edit.php?ep=<?php echo $result['user_id']?>">edit</a>
	<a href="delete.php?del=<?php echo $result['user_id']?>">delete</a></td>
	</tr>
	<?php 
}
?>
</table>
