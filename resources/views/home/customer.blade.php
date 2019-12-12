<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home {{session('name')}} !</h1>

	<a href="{{route('customer.profile')}}">Profile</a> ||
	<a href="{{route('medicine.index')}}">medicine</a> |  
	 
	<a href="/logout">logout</a>
</body>
</html>