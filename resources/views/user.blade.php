<!DOCTYPE html>
<html>

<head>
    <title>{Registration Form}</title>
</head>

<body>
    <h1>Registration Form</h1>
    <form action="{{ url('/registerUser') }}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{old("name")}}"><span>
            @error('name')
                {{ $message }}
            @enderror
        </span>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><span>
            @error('password')
                {{ $message }}
            @enderror
        </span><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><span>
            @error('email')
                {{ $message }}
            @enderror
        </span><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
