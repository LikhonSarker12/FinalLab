<!DOCTYPE html>
<html>
<head>
	<title>Account page</title>
	
</head>
<body>

<fieldset>
	<legend>Create Account</legend>
	<form method="post" >
	<input type="hidden" name="_token" value="{{csrf_token()}}">
    <center>	
	<table>
		<tr>
			<td>Customer Name:</td>
			<td><input type="text"placeholder="Enter Name "  name="name"></td>
		</tr>			
		<tr>
			<td>Address:</td>
			<td><input type="text"placeholder="Enter Address" name="address"></td>
			</tr>
		<tr>
			<td>Email Address:</td>
			<td><input type="text"placeholder="Enter Email" name="Emailaddress"></td>
		</tr>
		<tr>
			<td>Phone Number:</td>
			<td><input type="text"placeholder="Enter Phone"  name="contract"></td>
		</tr>			
		
		<tr>
			<td>Username:</td>
			<td><input type="text" placeholder="Enter Username" name="username"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" placeholder="Enter Password" name="password"></td>
		</tr>
		<tr>
			<td> Confirm Password:</td>
			<td><input type="password" placeholder="Repeat Password" name="confirmpassword"></td>
		</tr>
		   
				<tr>
					<td colspan="2">
						<center>
								<input type="submit" name="submit" value="Create Account">
						</center>
					</td>
				</tr> 
				<tr>
						<td colspan="2">
							<center>
								<a href="/login">Al ready have an account</a> 
							</center>
						</td>
					</tr> 
		   
		
	</table>
	</form>
	@foreach($errors->all() as $err)
	{{$err}} <br>
 @endforeach	
</center>	
</fieldset>
</body>
</html>