<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Supplier</title>
</head>
<body>
<form action="{{ route('supplier') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="name" id="name" name="name" required>
    <br>
    <label for="contact_details">Contact Details:</label>
    <input type="contact_details" id="contact_details" name="contact_details" required>
    <br>
    <button type="submit">Save</button>
</form>
</body>
</html>
