<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body id="b1">
<table border="1" cellpadding="40" cellspacing="0">
		<tr>
		<td colspan="2" align="center" bgcolor="orange"><font color="Blue"><h3>Registration Form</h3></td></font>
		</tr>
		<tr>
			<td bgcolor="grey">
				ENTER NAME: 
				<td><input type="Text" id="name" required></td><br>
			</td>
		</tr>
		<tr>
			<td id="d1">
				Enter Email:
				<td><input type="email" id="email"></td><br>
			</td>
		</tr>
		<tr>
			<td id="c1">
				Enter address:
				<td><textarea id="address"></textarea></td><br>
			</td>
		</tr>
		<tr>
			<td id="e1">
				Enter Password:
				<td><input type="password" id="password"></td>
			</td>
		</tr>
		<tr>
			<td id="f1">
				Enter Phone no:
				<td><input type="number" id="phone"></td> 
			</td>
		</tr>
		<tr>
			<td id="b2">
				Enter Gender:
				<td><input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="others">Other
			</td>
		</tr>
		<tr>
			<td id="h2">Enter Degree:</td>
			<td><select id="degree">
				<option>Select</option>
				<option value="B.tech">B.tech</option>
				<option value="B.sc">B.sc</option>
				<option value="BBA">BBA</option>
				<option value="LLB">LLB</option></td>
			</select>
		</tr>
		<tr>
			<td id="g2">
				Enter Language:
			</td>
			<td><input type="checkbox" name="language[]" value="english">English
				<input type="checkbox" name="language[]" value="hindi">Hindi
				<input type="checkbox" name="language[]" value="bengali">Bengali</td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" id="submit" value="submit"> 
	<input type="reset" name="reset" value="reset"></td>
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
			pass= $("#password").val();
			phone= $("#phone").val();
		    gen=$("input[name='gender']:checked").val();
			degree= $("#degree").val();
				var lan=[];
				$.each($("input[name='language[]']:checked"),function(){
					lan.push($(this).val());
				});
			languages=lan.join(",");
			//document.write(nme);
			$.ajax({
				type: "post",
				url: "forminsertaction.php", 
				data: {name:nme,email:eml,adsr:ads,password:pass,phone:phone,gender:gen,degree:degree,language:languages}
			}).done(function(data){
				$("#p1").html(data);
			});
		});
	});
</script>
</body>
</html>