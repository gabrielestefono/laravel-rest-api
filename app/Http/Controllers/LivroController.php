<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Livro::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Livro::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $livro)
    {
        return Livro::findOrFail($livro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $livro)
    {
        $livro = Livro::findOrFail($livro);

        $livro->update($request->all());

        return $livro;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $livro)
    {
        return Livro::destroy($livro);
    }
}
