<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Products
    <ul>
    @foreach ($products as $product)
        <li>{{ $product->id }},{{ $product->name }},{{ $product->description}}</li>
    @endforeach
    </ul>
</body>
</html>
