<?php

namespace App\Http\Controllers;

use App\Models\Versiculo;
use Illuminate\Http\Request;

class VersiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Versiculo::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Versiculo::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $versiculo)
    {
        return Versiculo::findOrFail($versiculo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $versiculo)
    {
        $versiculo = Versiculo::findOrFail($versiculo);

        $versiculo->update($request->all());

        return $versiculo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $versiculo)
    {
        return Versiculo::destroy($versiculo);
    }
}
