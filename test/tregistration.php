<?php
	session_start();
		

	?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>

	<script type="text/javascript">
function valid()
{
var name = document.forms["myform"]["uname"].value;



if(name==""){
	alert("Username Can't Be Empty");
return false;

}



if(name.length<3){
	alert("Username Can;t Be Less Than 3 Letters");
return false;

}


else{
for(i=0;i<name.length;i++)
{ch=name.charAt(i);
if(!(ch>='a'&&ch<='z')&&!(ch>='A'&&ch<='Z')&&!(ch>='0'&&ch<='9'))
{

	alert("Username Can't Contain Special Characters");
	
}
}
}

var password = document.forms["myform"]["password"].value;

if(password==""){
	alert("Password Can't Be Empty");
return false;

}

if(password.length<6){
	alert("Password Can't Be Less Than 6 Characters or Digits");
return false;

}





var email = document.forms["myform"]["email"].value;
if(email==""){
	alert("Email Can't Be Empty");
return false;

}


var at=email.indexOf('@');
var dot=email.lastIndexOf('.');
if(at<=0 || at+1 >= dot || dot+1 >=email.length-1)

{
alert("Enter Valid Email Address");
return false;

}



var type = document.forms["myform"]["type"].value;

if(type==""){
	alert("User Type Can't Be Empty");
return false;

}


var gender = document.forms["myform"]["gender"].value;

if(gender==""){
	alert("Gender Can't Be Empty");
return false;

}

var education = document.getElementById("ssc").checked;
var education1 = document.getElementById("hsc").checked;
var education2 = document.getElementById("bsc").checked;

if((education=="")&&(education1=="")&&(education2==""))

{alert("Education Can't Be Empty");
return false;
}



var pic = document.forms["myform"]["mypic"].value;

if(pic==""){
	alert("Picture Can't Be Empty");
return false;

}



}
</script>

</head>
<body>


			
	<fieldset>
	
	<form name="myform" onsubmit="return valid()" method="POST" action="../php/tregcheck.php" enctype="multipart/form-data"">
	
		<h1>REGISTRATION</h1>
		
		Username<br/><input type="text" name="uname" value=""><br/>
		
		
			Password<br/><input type="password" name="password" value=""><br/>
			Email<br/><input type="email" name="email" value=""><br/>
				Type<br/><input type="text" name="type" value=""><br/>
			
	Gender<br/><input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female
		
			<br/>
			Education<br/><input type="checkbox" id="ssc" name="education[]" value="SSC"/>S.S.C.
						<input type="checkbox" id="hsc" name="education[]" value="HSC" />H.S.C
						<input type="checkbox" id="bsc" name="education[]" value="BSC" />B.SC.<br/>
			Picture: <input type="file" name="mypic"><br/><br/>
				
				<input type="submit" name="submit" value="Sign Up">
				<input type="reset" name="reset" value="reset">
				<a href="../views/tlogin.php">Sign In</a>	
			
	
	</form>
	</fieldset>
</body>
</html>




