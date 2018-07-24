<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parceiro;
use App\Http\Resources\ParceiroResource as ParceiroResource;

class ParceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parceiros = Parceiro::all();
        return $parceiros;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parceiro = new Parceiro;
        $parceiro->nome = $request->nome;
        $parceiro->telefone = $request->telefone;
        $parceiro->email = $request->email;
        $parceiro->save();
        return $parceiro;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parceiro = Parceiro::find($id);
        return $parceiro;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $parceiro = Parceiro::find($id);
        $parceiro->nome = $request->nome;
        $parceiro->telefone = $request->telefone;
        $parceiro->email = $request->email;
        $parceiro->save();
        return $parceiro;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parceiro = Parceiro::find($id);
        $parceiro->delete();
        return 'Produto deletado com sucesso';
    }

    public function showName($id)
    {
        $parceiro = Parceiro::find($id);
        return $parceiro->nome;
    }
}
