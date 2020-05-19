<?php
	$nname=$_POST['nname'];
	$fname=$_POST['fname'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	$education=$_POST['education'];
	
	$con=mysqli_connect('localhost','root','','testdb');
	$sql="insert into dbstudent(fname,nname,gender,password,education) values ('$nname','$fname','$gender','$password','$education')";
	if(mysqli_query($con, $sql)){
			echo "Registration done!";
		}else{
			echo "Error";
		}

?>