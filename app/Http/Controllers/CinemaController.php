<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cinema;

class CinemaController extends Controller
{
    public function index()
    {
        $cinemas = Cinema::all();
        return view('cinemas.index', compact('cinemas'));
    }

    public function create()
    {
        return view('cinemas.create');
    }

    public function store(Request $request)
    {
        $cinema = new Cinema;
        $cinema->movie = $request->input('movie');
        $cinema->duration = $request->input('duration');
        $cinema->genre = $request->input('genre');
        $cinema->save();

        return redirect()->route('cinemas.index');
    }

    public function edit(Cinema $cinema)
    {
        return view('cinemas.edit', compact('cinema'));
    }

    public function update(Request $request, Cinema $cinema)
    {
         // Validar los datos de entrada
        $request->validate([
            'movie' => 'required|string|max:255',
            'duration' => 'required|string|max:100',
            'genre' => 'required|string|max:100',
        ]);

        // Actualizar el cine con los datos validados
        $cinema->update([
            'movie' => $request->input('movie'),
            'duration' => $request->input('duration'),
            'genre' => $request->input('genre'),
        ]);

        return redirect()->route('cinemas.index');
    }

    public function destroy(Cinema $cinema)
    {
        $cinema->delete();

        return redirect()->route('cinemas.index');
    }
}
