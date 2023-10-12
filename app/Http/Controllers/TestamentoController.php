<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testamento;

class TestamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Testamento::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Testamento::create($request->all())){
            return response()->json(['message' => 'Testamento cadastrado com sucesso!'], 200);
        }else{
            return response()->json(['message' => 'Erro ao cadastrar testamento!'], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $testamento)
    {
        $testamento = Testamento::find($testamento);
        if(!empty($testamento)){
            return $testamento;
        }else{
            return response()->json(['message' => 'Testamento não encontrado!'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $testamento)
    {
        $testamento = Testamento::find($testamento);

        if($testamento){
            $testamento->update($request->all());
            return $testamento;
        }else{
            return response()->json(['message' => 'Erro ao atualizar testamento!'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $testamento)
    {
        if(Testamento::destroy($testamento)){
            return response()->json(['message' => 'Testamento deletado com sucesso!'], 200);
        }else{
            return response()->json(['message' => 'Erro ao deletar testamento!'], 404);
        }
    }
}
