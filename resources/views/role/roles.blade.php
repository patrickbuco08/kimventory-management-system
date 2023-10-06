<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Supplier</title>
</head>
<body>
<form action="{{ route('role.save') }}" method="POST">
    @csrf
    <label for="name">Role:</label>
    <input type="name" id="name" name="name" placeholder="Enter your role" required>
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>
