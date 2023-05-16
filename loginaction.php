<?php 
include("connection.php");
$email=$_REQUEST["email"];
$password=md5($_REQUEST["password"]);
$sql="SELECT * FROM final_ajax WHERE email='$email' AND password='$password'";
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);
if($total)
{
	//echo "login successful";
	header("location:display.php");
}
else
{
	echo "login failure";
}
?>