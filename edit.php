<?php  
//session_start();
include("connection.php");
$id=$_REQUEST["ep"];
$sql="SELECT * FROM final_ajax WHERE user_id='$id'";
$data=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>edit form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body id="b1">
<table border="1" cellpadding="40" cellspacing="0">
		<tr>
		<td colspan="2" align="center" bgcolor="Grey"><font color="Blue"><h3>Registration Form</h3></td></font>
		</tr>
		<tr>
			<td bgcolor="grey">
				ENTER NAME: 
				<td><input type="Text" id="name" value="<?php echo $result['name']?>"></td><br>
				<input type="text" id="uid" value="<?php echo $id;?>" hidden>
			</td>
		</tr>
		<tr>
			<td id="d1">
				Enter Email:
				<td><input type="email" id="email" value="<?php echo $result['email']?>"></td><br>
			</td>
		</tr>
		<tr>
			<td id="c1">
				Enter address:
				<td><input type="text" id="address" value="<?php echo $result['address']?>"></td><br>
			</td>
		</tr>
		
		<tr>
			<td id="f1">
				Enter Phone no:
				<td><input type="number" id="phone" value="<?php echo $result['phone']?>"></td> 
			</td>
		</tr>
		<tr>
			<td id="b2">
				Enter Gender:
				<td><input type="radio" name="gender" value="male" <?php if($result['gender']=='male'){echo "checked";}?>>Male
				<input type="radio" name="gender" value="female"  <?php if($result['gender']=='female'){echo "checked";}?>>Female
				<input type="radio" name="gender" value="others" <?php if($result['gender']=='other'){echo "checked";}?>>Other
			</td>
		</tr>
		<tr>
			<td id="h2">Enter Degree:</td>
			<td><select id="degree">
				<option>Select</option>
				<option <?php if($result['degree']=='B.tech'){echo "selected";} ?> >B.tech</option>
				<option <?php if($result['degree']=='B.sc'){echo "selected";} ?> >B.sc</option>
				<option <?php if($result['degree']=='BBA'){echo "selected";} ?>>BBA</option>
				<option <?php if($result['degree']=='LLB'){echo "selected";} ?> >LLB</option></td>
			</select>
		</tr>
		<?php
		$lanarray=explode(",", $result['language']);
		?>	
		<tr>
			<td id="g2">
				Enter Language:
			</td>
			<td><input type="checkbox" name="language[]" value="english" <?php if(in_array("english",$lanarray)) {echo "checked";} ?>>English
				<input type="checkbox" name="language[]" value="hindi" <?php if(in_array("hindi",$lanarray)) {echo "checked";} ?>>Hindi
				<input type="checkbox" name="language[]" value="bengali" <?php if(in_array("bengali",$lanarray)) {echo "checked";} ?>>Bengali</td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" id="submit" value="submit"> 
	<input type="reset" name="reset" value="Reset"></td>
		</tr>
	
<style type="text/css">
	#b1{background-color: #99bbff;}
	#b2{background-image: conic-gradient(red,yellow,green);}
	#c1{background-image: conic-gradient(blue,violet,orange);}
	#d1{background-image: repeating-conic-gradient(orange,yellow,blue);}
	#e1{background-image: conic-gradient(red,yellow,green);}
	#f1{background-image: conic-gradient(blue,violet,orange);}
	#g2{background-image: conic-gradient(blue,violet,orange);}
	#h2{background-image: conic-gradient(blue,violet,orange);}
</style>
</table>
<p id="p1"></p>
	<script type="text/javascript">
	$("document").ready(function(){
		$("#submit").click(function(){
			nme= $("#name").val();
			eml= $("#email").val();
			ads= $("#address").val();
			phone= $("#phone").val();
			gen=$("input[name='gender']:checked").val();
			degree= $("#degree").val();
			var lan=[];
				$.each($("input[name='language[]']:checked"),function(){
					lan.push($(this).val());
				});
			lang=lan.join(",");
			id= $("#uid").val();
			//document.write(nme);
			$.ajax({
				type: "post",
				url: "editaction.php", 
				data: {name:nme,email:eml,ads:ads,phone:phone,gender:gen,degree:degree,language:lang,uid:id}
			}).done(function(data){
				$("#p1").html(data);
			});
		});
	});
</script>
</body>
</html>