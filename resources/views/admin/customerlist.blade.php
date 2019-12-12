<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>User List</h1>
	<a href="{{route('adminhome.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
            <td>NAME</td>
            <td>ADDRESS</td>
            <td>EMAIL ADDRESS</td>
            <td>PHONE </td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>ACTION</td>
		</tr>

	 @foreach($users as $s)
		<tr>
			<td>{{$s->userId}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->address}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->contract}}</td>
			<td>{{$s->username}}</td>
			<td>{{$s->password}}</td>
			<td> 
				<a href="{{route('adminCustomer.delete', $s->userId)}}">Delete</a>|| 
				<a href="{{route('adminCustomer.details', $s->userId)}}">Details</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>