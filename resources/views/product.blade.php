<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Product list</h1>
    <ul>

    @foreach( $products as $list)
    <li>
        {{$list->product_name, $list->user->email}}
    </li>
    </ul>

    @endforeach
</body>
</html>
