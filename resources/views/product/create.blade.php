<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<form action="{{!empty($product) ? url('api/product/update'): url('api/product')}}" method="POST">
		<input type="hidden" name="id" value="{{!empty($product) ? $product['id']:''}}">
		<table>
			<tr>
				<td><label>Name:</label></td>
				<td><input type="text" name="name" value="{{!empty($product) ? $product['name']:''}}"></td>
			</tr>
			<tr>
				<td><label>Price:</label></td>
				<td><input type="text" name="price" value="{{!empty($product) ? $product['price']:''}}"></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit">Submit</button><button class="button" style="margin-left:10px;"><a href="{{url('api/product')}}">Cancel</a></button></td>
			</tr>
		</table>
		
	</form>
</body>
</html>