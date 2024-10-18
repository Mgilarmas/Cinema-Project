@extends('layout')

<link rel="stylesheet" href="{{ asset("css/createStyles.css") }}">

@section('content')
    <h1>Create a New Cinema</h1>
    <form method="POST" action="{{ route('cinemas.store') }}">
        @csrf
        <div class="form-group">
            <label for="movie">Movie:</label>
            <input type="text" name="movie" class="form-control" id="movie" placeholder="Enter a movie">
        </div>
        <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="text" name="duration" class="form-control" id="duration" placeholder="Enter duration">
        </div>
        <div class="form-group">
            <label for="genre">Genre:</label>
            <input type="text" name="genre" class="form-control" id="genre" placeholder="Enter genre">
        </div>
        <button type="submit" class="submit">Submit</button>
    </form>
    <a href="{{ route('cinemas.index') }}">Back to the list</a>
@endsection