<?php
include("connection.php");
$id=$_REQUEST["uid"];
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$address=$_REQUEST["ads"];
$phone=$_REQUEST["phone"];
$gender=$_REQUEST["gender"];
$degree=$_REQUEST["degree"];
$language=$_REQUEST["language"];
// echo $id,$name,$email,$address,$phone,$gender,$degree,$language;
// die();
$sql="UPDATE `final_ajax` SET `name`='$name',`email`='$email',`address`='$address',`phone`='$phone',`gender`='$gender',`degree`='$degree',`language`='$language' WHERE user_id=$id";
$data=mysqli_query($conn,$sql);
if($data)
{
	//header("location:display.php");
	echo "<script>alert('edit successful')</script>";
	echo "<script>window.location.href='display.php'</script>";
}
else
{
	echo "not connected";
}
?>