<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
<form action="{{ route('save') }}" method="POST">
    @csrf

    <label for="product_id">Product ID:</label>
    <input type="text" id="product_id" name="product_id" required>
    <br>
    <label for="transaction">Transaction ID:</label>
    <input type="text" id="transaction" name="transaction" required>
    <br>
    <label for="quantity">Quantity:</label>
    <input type="text" id="quantity" name="quantity" required>
    <br>
    <label for="user_id">user ID:</label>
    <input type="text" id="user_id" name="user_id" required>
    <br>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>
    <br>
    <br>
    <br>
    <button type="submit">Submit</button>


</form>
</body>
</html>
