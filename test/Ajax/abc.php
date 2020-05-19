<?php


	echo "
<html>
<body>
<html>
			<head>
				<title><b>Registration</b></title>
			</head>
			<body>
				<form action='../php/reg_check.php' method='post' onsubmit='return validation_js();'>
					<table>
					<p style='color:red' align=left>** Requirement of the field <a href='../views/registration_rules.html'>RULES</a></p>
					<tr>
						<td><b>Full NAME</b></td>
						<td><input type='text' name='fname' value='' id='fname'/></td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
					<td><b>Nick NAME</b></td>
					<td><input type='text' name='nname' value='' id='nname'/></td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
					<td><b>Password</b></td>
					<td><input type='password' name='password' value='' id='password'/></td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
					<td><input type='submit' name='Registration' value='Submit' /></td>
					<td><a href='login.php'>LogIn page</a> </td>
					<tr>
					</table>
				</form>
					<script>
						function validation_js()
							{
								var fname=document.getElementById('fname').value;
								var nname=document.getElementById('nname').value;
								var password=document.getElementById('password').value;
								var gender=document.getElementById('gender').value;
								var education=document.getElementById('education').value;
								if(fname=='' || nname=='' || password=='' || gender=='' ||education=='')
									{
										alert('required to fill up all the fields');
										return false;
									}
								else
									{
										return true;
									}
							}
					</script>
			</body>
		</html>
		
		
</body>

</html>
";
?>
