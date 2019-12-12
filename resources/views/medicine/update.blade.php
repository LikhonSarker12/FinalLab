<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<h1>Profile Update</h1>
	<a href="{{route('medicine.list')}}">Back</a> ||
	<a href="/logout">Logout</a>
	
	<form method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
	<table border="2">
    <tr>
			<td>Name :</td>
			<td><input type="text" name="name" value="{{$user['name']}}"></td>
		</tr>
        <tr>
			<td>Vendor :</td>
			<td><input type="text" name="vendor" value="{{$user['vendor']}}"></td>
		</tr>
        <tr>
			<td>Type:</td>
			<td><input type="text" name="type" value="{{$user['type']}}"></td>
		</tr>
        <tr>
			<td>Price :</td>
			<td><input type="text" name="price" value="{{$user['price']}}"></td>
		</tr>
		<tr>
			<td>Quantity :</td>
			<td><input type="text" name="quantity" value="{{$user['quantity']}}"></td>
		</tr>
		<tr>
			<td>Category :</td>
			<td><input type="text" name="category" value="{{$user['category']}}"></td>
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