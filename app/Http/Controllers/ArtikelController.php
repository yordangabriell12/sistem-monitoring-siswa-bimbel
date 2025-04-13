<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        return view('artikel.index', compact('artikels'));
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $request)
    {
        Artikel::create($request->all());
        return redirect()->route('artikel.index');
    }

    public function edit(Artikel $artikel)
    {
        return view('artikel.edit', compact('artikel'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        $artikel->update($request->all());
        return redirect()->route('artikel.index');
    }

    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect()->route('artikel.index');
    }

    public function show(Artikel $artikel)
    {
        return view('artikel.show', compact('artikel'));
    }
}
