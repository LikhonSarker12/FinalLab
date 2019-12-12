<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! {{session('name')}}</h1>
	<a href="{{route('admin.profile')}}">Profile</a> || 
	 <a href="{{route('admin.customerlist')}}">Customer</a>||
	 <a href="{{route('medicine.list')}}">Medicine</a>||	
	<a href="/logout">Logout</a>

	

</body>
</html>