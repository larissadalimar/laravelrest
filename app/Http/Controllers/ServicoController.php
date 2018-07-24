<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\servico;
use App\Http\Resource\ServicoResource as ServicoResource;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicos = Servico::all();
        return $servicos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servico = new Servico;
        $servico->empresa = $request->empresa;
        $servico->telefone = $request->telefone;
        $servico->tipo = $request->tipo;
        $servico->save();
        return $servico;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servico = Servico::find($id);
        return $servico;
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
        $servico = Servico::find($id);
        $servico->empresa = $request->empresa;
        $servico->telefone = $request->telefone;
        $servico->tipo = $request->tipo;
        $servico->save();
        return $servico;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servico = Servico::find($id);
        $servico = delete();
        return 'Produto deletado com sucesso';
    }

    public function showName($id)
    {
        $servico = Servico::find($id);
        return $servico->empresa;
    }
}
