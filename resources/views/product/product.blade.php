<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($product)
        <p>{{ $product->id }}</p>
        <p>{{ $product->name }}</p>
        <p>{{ $product->description }}</p>
        <p>${{ $product->price }}</p>
        <p>{{ $product->sku }}</p>
        <p>{{ $product->created_at }}</p>
        <p>{{ $product->updated_at}}</p>
    @else
        <h1>not found</h1>
    @endif
</body>
</html>