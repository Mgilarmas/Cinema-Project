<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>

    <link rel="stylesheet" href="{{ asset("css/editStyles.css") }}">
</head>
<body>
    <h1>Edit Your Movie</h1>
    

    <div class="form-container">
        <form class="form-group" action="{{ route('cinemas.update', $cinema->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="inputMovie">Movie:</label>
            <input type="text" name="movie" value="{{ $cinema->movie }}" placeholder="Movie">

            <label for="inputDuration">Duration:</label>
            <input type="text" name="duration" value="{{ $cinema->duration }}" placeholder="Duration">

            <label for="inputGenre">Genre:</label>
            <input type="text" name="genre" value="{{ $cinema->genre }}" placeholder="Genre">

            <button type="submit" class="update">Update</button>
        </form>
    </div>
    <div>
        <a href="{{ route('cinemas.index') }}">Back</a>
    </div>
</body>
</html>