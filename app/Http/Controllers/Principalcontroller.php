<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\Produto;
use Illuminate\Http\Request;

class Principalcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::get();

        $depoimentos = Avaliacao::get();
        $random = rand(0,($depoimentos->count()-1));

        $depoimento = $depoimentos[$random];

        return view('welcome', compact(array('produtos', 'depoimento')));
    }

    public function cardapio()
    {
        $produtos = Produto::get();

        return view('cardapio', compact('produtos'));
    }

    public function depoimento()
    {
        $depoimentos = Avaliacao::get();
        $random = rand(0,($depoimentos->count()-1));

        $depoimento = $depoimentos[$random];

        return view('depoimento', compact('depoimento'));
    }

    public function depoimento_store(Request $request)
    {
        $nome_cliente = $request->nome;

        $avaliacao = new Avaliacao();
        $avaliacao->produto_id = "1";
        $avaliacao->nome_cliente = $request->nome;
        $avaliacao->depoimento_cliente = $request->depoimento;
        $avaliacao->num_estrela = $request->nota;
        $avaliacao->save();

        return view("success", compact('nome_cliente'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
