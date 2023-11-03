<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <center> <h1>Edit Form</h1></center>
    <div class="container">
    <form action="{{url('updateUser',$data->id)}}" method="POST">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">User Name</label>
          <input type="name" name="name" value="{{$data->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" value="{{$data->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">password</label>
          <input type="password" name="password" value="{{$data->password}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password">
        </div>
     
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
    </div>
</body>
</html>