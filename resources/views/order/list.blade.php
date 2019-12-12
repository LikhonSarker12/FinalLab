<!DOCTYPE html>
<html>
<head>
	<title>Medicine</title>
</head>
<body>
	<h1>Medicine List</h1>
	<a href="{{route('medicine.index')}}">Back</a> || 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ORDER ID</td>
            <td>NAME</td>
            <td>VENDOR NAME</td>
            <td> QUANTITY</td>
            <td> Deliver Date</td>   
			<td>ACTION</td>
		</tr>

	 @foreach($users as $s)
		<tr>
			<td>{{$s->orderId}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->vendor}}</td>
            <td>{{$s->quantity}}</td>
            <td>{{$s->date}}</td>
			<td> 
				<a href="{{route('order.delete', $s->orderId)}}">Delete</a>|| 
				<a href="{{route('order.update', $s->orderId)}}">Update</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>