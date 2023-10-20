<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>
    <button class="button" style="margin:10px 10px 10px 10px;float: right;"><a href="{{url('api/product/create')}}">Create</a></button>
	<table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            @foreach($all_products as $product)
	            <tr>
	                <th>{{$product['name']}}</th>
	                <th>{{$product['price']}}</th>
	                <?php $id = $product['id'];?>
	                <th><a href="{{url('api/product/'.$id)}}">Edit</a><a href="{{url('api/product/delete/'.$id)}}" style="margin-left: 10px;">Delete</a></th>
	            </tr>
            @endforeach
        </thead>
    </table>
</body>
</html>