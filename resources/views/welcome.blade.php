<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User list</h1>
    <ul>

    @foreach( $users as $list)
    <li>
        {{$list->email}}
    </li>
    </ul>

    @endforeach
</body>
</html>
