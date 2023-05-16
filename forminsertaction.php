<?php
include("connection.php");
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$address=$_REQUEST["adsr"];
$password=md5($_REQUEST["password"]);
$phone=$_REQUEST["phone"];
$gen=$_REQUEST["gender"];
$degree=$_REQUEST["degree"];
$language=$_REQUEST["language"];
// $filename=$_FILES["uploadimage"]["name"];
// $tmpname=$_FILES["uploadimage"]["tmp_name"];
// $folder="image/".$filename;
// move_uploaded_file($tmpname,$folder);
//$sql1="SELECT * FROM final_ajax WHERE email='$email'";
$sql="INSERT INTO `final_ajax`(`user_id`, `name`, `email`, `address`, `password`, `phone`, `gender`, `degree`, `language`) VALUES ('','$name','$email','$address','$password','$phone','$gen','$degree','$language')";
$data=mysqli_query($conn,$sql);
//$value1=mysqli_num_rows($data1);
// if($value1)
// {
// 	echo "email id already exist";
// }
// else
// {
// 	$sql="INSERT INTO `form`(`user_id`, `name`, `email`, `address`, `phone`, `gender`, `degree`, `language`, `picsource`, `password`) VALUES ('','$name','$email','$address','$phone','$gen','$degree','$language','$folder','$password')";
// 	$data=mysqli_query($conn,$sql);
// 	if($data)
// 	{
// 		header("location:login.php");
// 	}	
// 	else
// 	{
// 		echo "connected";
// 	}
// }
if($data)
{
	//echo "inserted";
	// header("location:login.php");
	echo "<script>alert('Insert data successful 🥸')</script>";
	echo "<script>window.location.href='login.php'</script>";
}
else
{
	echo "not inserted";
}
?>