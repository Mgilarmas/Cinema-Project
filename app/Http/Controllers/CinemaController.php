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
        
    }
}
