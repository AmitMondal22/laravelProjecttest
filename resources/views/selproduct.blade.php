<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
      
  <table class="table table-hover">
    <thead>
      <tr>
        <th>title</th>
        <th>des</th>
        <th>price</th>
        <th>user</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($row as $a)
            
        
      <tr>
        <td>{{$a->name}}</td>
        <td>{{$a->productName}}</td>
        <td>{{$a->price}}</td>
        <td>{{$a->decription}}</td>
        <td><a href="{{url('/delete')}}/{{$a->id}}" class="btn btn-danger">delete</a></td>
        <td><a href="{{url('/update')}}/{{$a->id}}" class="btn btn-danger">Update</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
