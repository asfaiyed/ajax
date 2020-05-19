<?php
session_start();
//error_reporting(0);
	
	
	
	require("../service/tconnection.php");


	if(isset($_REQUEST['submit'])){


		$uname = $_POST['uname'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['type'];
		$gender = $_POST['gender'];
		$educationarr = $_POST['education'];
		$newvalues = implode(",", $educationarr);
		$filename = $_FILES["mypic"]["name"];
		
		$tempname = $_FILES["mypic"]["tmp_name"];
		$folder = "../views/upload/".$filename;

move_uploaded_file($tempname,$folder);
	
		$check_duplicate_username = "SELECT username FROM users WHERE username = '$uname' ";
	$result = mysqli_query($con, $check_duplicate_username);
	
	if(mysqli_num_rows($result)>0)
	{
		echo "<font color='red'>Username Already Exists";
		return false;
		
		
	}
	
	if($uname=="" || strlen($uname)<3)
		
		{
			echo"<font color='red'>Username Can't Be Empty or Less Than Three Letters";
			return false;
			
			
		}
	
			if($password=="" || strlen($password)<6)
		
		{
			echo"<font color='red'>Password Can't Be Less Than 6 Characters or Digits";
			return false;
			
			
		}
		
		
		$check_duplicate_email = "SELECT email FROM users WHERE email = '$email' ";
	$resultt = mysqli_query($con, $check_duplicate_email);
	
	if(mysqli_num_rows($resultt)>0)
	{
		echo "<font color='red'>Email Already Exists";
		return false;
		
		
	}
	

	if($email=="")
		
		{
			echo"<font color='red'>Email Can't Be Empty";
			return false;
			
			
		}
		
		
		if($type=="")
		
		{
			echo"<font color='red'>User Type Can't Be Empty";
			return false;
			
			
		}
		if($gender=="")
		
		{
			echo"<font color='red'>Gender Can't Be Empty";
			return false;
			
			
		}
		if($newvalues=="")
		
		{
			echo"<font color='red'>Education Can't Be Empty";
			return false;
			
			
		}
		if($filename=="")
		
		{
			echo"<font color='red'>Picture Can't Be Empty";
			return false;
			
			
		}
		
		
		
$file=fopen('../service/user.txt','a');

fwrite($file,$uname.'|');
fwrite($file,$password.'|');
fwrite($file,$email.'|');
fwrite($file,$type.'|');
fwrite($file,$gender.'|');
fwrite($file,$newvalues.'|');
fwrite($file,$filename."\n");
fclose($file);

}
	
	$sql = "insert into users (fname,nname,password,email,type,picsource,gender,education) values ('$fname','$nname','$password','$email','$type','$folder','$gender','$education')";
		if(mysqli_query($con,$sql)){}
	

		header("location: ../views/tlogin.php");
	
?>