<!DOCTYPE html>
<html>
<head>
	<title>Customer page</title>
</head>
<body>
	<h1>Customer Profile</h1> 
    <a href="{{route('customer.updateprofile')}}">Update Profile</a> || 
    <a href="{{route('home.index')}}">Back</a> ||
	<a href="/logout">logout</a>
	
	<table border="2">
		<tr>
			<td>ID :</td>
			<td>{{$user['userId']}}</td>
		</tr>
        <tr>
			<td>Name :</td>
			<td>{{$user['name']}}</td>
		</tr>
        <tr>
			<td>Address :</td>
			<td>{{$user['address']}}</td>
		</tr>
        <tr>
			<td>Email Address :</td>
			<td>{{$user['email']}}</td>
		</tr>
        <tr>
			<td>Phone Number:</td>
			<td>{{$user['contract']}}</td>
		</tr>
		<tr>
			<td>username :</td>
			<td>{{$user['username']}}</td>
		</tr>
		<tr>
			<td>Password: </td>
			<td>{{$user['password']}}</td>
		</tr>

	</table>
</body>
</html>