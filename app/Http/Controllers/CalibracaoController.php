<?php

namespace App\Http\Controllers;

use App\Models\Calibracao;
use App\Models\Equipamento;
use Illuminate\Http\Request;


class CalibracaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id = null)
    {
        // Recupere todos os equipamentos
        $equipamentos = Equipamento::all();
        $calibracoes = Calibracao::all();

        $equip = Equipamento::find($id);
        // Recupere as calibrações relacionadas a este equipamento específico
        $equip != null ? $calibra = $equip->calibracoes : $calibra = $calibracoes;

        return view('calibracao', compact('equipamentos', 'calibracoes', 'calibra', 'equip'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Calibracao $calibracao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calibracao $calibracao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calibracao $calibracao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calibracao $calibracao)
    {
        //
    }
}
