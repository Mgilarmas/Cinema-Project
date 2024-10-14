<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinemas</title>
</head>

<body>
    <h1>Cinemas List</h1>
    <ul>
        @foreach ($cinemas as $cinema)
            <li>{{ $cinema->movie }} {{ $cinema->duration }} {{ $cinema->genre }}</li>
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        @endforeach
    </ul>
</body>
</html>
