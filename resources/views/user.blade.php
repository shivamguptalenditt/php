{{-- <!DOCTYPE html>
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
</html> --}}








<!DOCTYPE html>
<html>
<head>
    <title>Sample Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <p>Please fill out the form below to get in touch with us.</p>
    
    <form action="submit.php" method="post">
        <!-- Text Input for Name -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <!-- Email Input -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <!-- Radio Buttons for Gender -->
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        
        <!-- Checkbox for Newsletter Subscription -->
        <label for="subscribe">Subscribe to our newsletter:</label>
        <input type="checkbox" id="subscribe" name="subscribe">
        
        <!-- Textarea for Message -->
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea>
        
        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>
