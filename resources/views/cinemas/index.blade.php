<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinemas</title>

    <link rel="stylesheet" href="{{ asset("css/indexStyles.css") }}">
</head>

<body>
    <h1>Cinemas List</h1>
    <a href="{{ route('cinemas.create') }}" id="createLink">Create Movie</a>
    <ul>
        @foreach ($cinemas as $cinema)
            <div>
                <li>{{ $cinema->movie }}</li>
                <li>{{ $cinema->duration }}</li>
                <li>{{ $cinema->genre }}</li>
                <a href="{{ route('cinemas.edit', $cinema->id) }}"><i class="fa-solid fa-pen-to-square">Edit</i></a>
                <form method="POST" action="{{ route('cinemas.destroy', $cinema) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        @endforeach
    </ul>
</body>
</html>
