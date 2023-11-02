<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show User</title>
</head>
<body>
    <table border="1">
        <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>password</td>
    </tr>

@foreach($user as $use)
<tr>
    <td>{{$use['id']}}</td>
    <td>{{$use['name']}}</td>
    <td>{{$use["email"]}}</td>
    <td>{{$use['password']}}</td>
</tr>
@endforeach
    </table>
</body>
</html>