<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
</head>
<body>
<form action="{{ route('product') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Name:</label>
    <input type="name" id="name" name="name" required>
    <br>
    <label for="description">Description:</label>
    <input type="text" id="description" name="description" required>
    <br>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required>
    <br>
    <label for="sku">sku:</label>
    <input type="text" id="sku" name="sku" required>
    <br>
    <label for="current_stock">Current Stock:</label>
    <input type="number" id="current_stock" name="current_stock" required>
    <br>
    <label for="reorder_level">Reorder Level:</label>
    <input type="text" id="reorder_level" name="reorder_level" required>
    <br>
    <label for="location">Location:</label>
    <input type="text" id="location" name="location" required>
    <br>
    <label for="file">Upload a picture:</label>
    <input type="file" id="file" name="file" required>
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>
