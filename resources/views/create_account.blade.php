<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/sub_acData')}}" method="post" enctype="multipart/form-data">
        @csrf
        <p>name</p>
        <p><input type="text" name="name" id=""></p>
        <p>email</p>
        <p><input type="email" name="email" id=""></p>
        <p>password</p>
        <p><input type="password" name="password" id=""></p>
        <p><input type="submit" value="save"></p>
    </form>
</body>
</html>