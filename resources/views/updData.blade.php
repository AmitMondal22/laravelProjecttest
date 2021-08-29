<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="{{url('upd_p')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$data->id }}">
        <p>product name</p>
        <p><input type="text" name="product_name" id="" value="{{$data->productName}}"></p>
        <p>price</p>
        <p><input type="number" name="price" value="{{$data->price}}"></p>
        <p>decription</p>
        <p><textarea name="decription">{{$data->decription}}</textarea></p>
        <p><input type="submit" value="Save"></p>
    </form>
    
        
</body>
</html>