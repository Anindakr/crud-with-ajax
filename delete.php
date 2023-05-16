<?php
include("connection.php");
$id= $_REQUEST["del"];
$sql="DELETE FROM `final_ajax` WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
if ($data) 
{ 
	//echo "<script>alert('🥸')</script>";
	header("location:display.php");
}
else
{
	echo "Delete not performed";
}
?>