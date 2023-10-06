<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of roles</title>
</head>
<body>
    <h1>Roles</h1>
    @foreach ($posts as $post)
        <p>{{ $post->name }}</p>
    @endforeach

</body>
</html>