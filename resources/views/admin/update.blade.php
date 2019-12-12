<!DOCTYPE html>
<html>
<head>
	<title>profileUpdate</title>
</head>
<body>
	<h1>Profile Update</h1>
	<a href="{{route('admin.profile')}}">Back</a> ||
	<a href="/logout">Logout</a>
	
	<form method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
	<table border="2">
    <tr>
			<td>Name :</td>
			<td><input type="text" name="name" value="{{$user['name']}}"></td>
		</tr>
        <tr>
			<td>Address :</td>
			<td><input type="text" name="address" value="{{$user['address']}}"></td>
		</tr>
        <tr>
			<td>Email Address:</td>
			<td><input type="text" name="Emailaddress" value="{{$user['email']}}"></td>
		</tr>
        <tr>
			<td>Phone Number :</td>
			<td><input type="text" name="contract" value="{{$user['contract']}}"></td>
		</tr>
		<tr>
			<td>Username :</td>
			<td><input type="text" name="username" value="{{$user['username']}}"></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="text" name="password" value="{{$user['password']}}"></td>
		</tr>
		<tr>
					<td colspan="2">
						<center>
								<input type="submit" name="submit" value="Confirm">
						</center>
					</td>
				</tr> 
	</table>
</form>
@foreach($errors->all() as $err)
	{{$err}} <br>
 @endforeach
</body>
</html>