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
        if(Versiculo::create($request->all())){
            return response()->json(['message' => 'Versículo cadastrado com sucesso!'], 200);
        }else{
            return response()->json(['message' => 'Erro ao cadastrar versículo!'], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $versiculo)
    {
        $versiculo = Versiculo::find($versiculo);
        if(!empty($versiculo)){
            return $versiculo;
        }else{
            return response()->json(['message' => 'Versiculo não encontrado!'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $versiculo)
    {
        $versiculo = Versiculo::find($versiculo);

        if($versiculo){
            $versiculo->update($request->all());
            return $versiculo;
        }else{
            return response()->json(['message' => 'Erro ao atualizar testamento!'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $versiculo)
    {
        if(Versiculo::destroy($versiculo)){
            return response()->json(['message' => 'Versículo deletado com sucesso!'], 200);
        }else{
            return response()->json(['message' => 'Erro ao deletar versículo!'], 404);
        }
    }
}
