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

    public function update(CinemaUpdateRequest $request, Cinema $cinema)
    {
        $product->update($request->validated());

        return redirect()->route('cinemas.index')->with('success','Cinema updated successfully');
    }

    public function destroy(Cinema $cinema)
    {
        $cinema->delete();

        return redirect()->route('cinemas.index')->with('success','Product deleted successfully');
    }
}
