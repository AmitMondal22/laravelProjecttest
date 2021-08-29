<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/insp')}}" method="post" enctype="multipart/form-data">
        @csrf
        <p>product name</p>
        <p><input type="text" name="product_name" id=""></p>
        <p>price</p>
        <p><input type="number" name="price" id=""></p>
        <p>decription</p>
        <p><textarea name="decription"></textarea></p>
        <p><input type="submit" value="Save"></p>
    </form>
</body>
</html>