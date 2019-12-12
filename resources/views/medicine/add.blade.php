<!DOCTYPE html>
<html>
<head>
	<title>Medicine page</title>
	
</head>
<body>

<fieldset>
	<legend>Add Medicine</legend>
	<form method="post" >
	<input type="hidden" name="_token" value="{{csrf_token()}}">
    <center>	
	<table>
		<tr>
			<td>Medicine Name:</td>
			<td><input type="text"placeholder="Enter Name "  name="name"  value="{{old('name')}}"></td>
		</tr>			
		<tr>
			<td>Vendor :</td>
			<td><input type="text"placeholder="Enter Vendor Name" name="vendor" value="{{old('vendor')}}"></td>
			</tr>
            <td>Type: </td>
				<td>
				   <div>
					   <input type = "radio" name = "type" value = " Aspirin"> Aspirin
					   <input type = "radio" name = "type" value = " Paracetamol"> Paracetamol
						
				   </div>
			   
				</td>
			</tr>
			<td> Category :</td>
				<td>
				   <div>
					   <input type = "radio" name = "category" value = "Liquid"> Liquid 
					   <input type = "radio" name = "category" value = "Solid"> Solid
						
				   </div>
			   
				</td>
			</tr>
            <tr>
			<td>Price :</td>
			<td><input type="text"placeholder="Enter price"  name="price"  value="{{old('price')}}"></td>
		</tr>	
		<tr>
			<td>Quantity :</td>
			<td><input type="text"placeholder="Enter Quantity" name="quantity"  value="{{old('quantity')}}"></td>
		</tr>
		
				<tr>
					<td colspan="2">
						<center>
								<input type="submit" name="submit" value="submit">
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