<!DOCTYPE html>
<html>
<head>
	<title>Medicine</title>
</head>
<body>
	<h1>Medicine List</h1>
	<a href="{{route('adminhome.index')}}">Back</a> || 
    <a href="{{route('medicine.add')}}">Add Medicine</a> ||
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td> PRODUCT ID</td>
            <td>NAME</td>
            <td>VENDOR NAME</td>
            <td>TYPE</td>
            <td>PRICE </td>
            <td> QUANTITY</td>
			<td>ACTION</td>
		</tr>

	 @foreach($users as $s)
		<tr>
			<td>{{$s->productId}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->vendor}}</td>
            <td>{{$s->type}}</td>
            <td>{{$s->price}}</td>
            <td>{{$s->quantity}}</td>
			<td> 
				<a href="{{route('medicine.delete', $s->productId)}}">Delete</a>|| 
				<a href="{{route('medicine.update', $s->productId)}}">Update</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>