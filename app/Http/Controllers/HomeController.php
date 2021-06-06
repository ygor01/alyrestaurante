<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Tipo_cardapio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $success = Session::get('success');
        $update = Session::get('update');
        $deleted = Session::get('deleted');

        $tipos_cardapio = Tipo_cardapio::with('Produto')->get();

        $cardapios = Produto::get();
        return view('home', compact(array('success','update','deleted', 'tipos_cardapio')));
    }

    public function new()
    {
        $tipos_cardapio = Tipo_cardapio::get();
        return view('cardapio.new', compact('tipos_cardapio'));
    }

    public function edit(Request $request)
    {
        $produto = Produto::find($request->id);
        $tipos_cardapio = Tipo_cardapio::get();
        return view('cardapio.edit', compact(array('produto','tipos_cardapio')));
    }

    public function update(Request $request)
    {
        $cardapio = Produto::find($request->id_produto);
        $cardapio->nome = $request->nome;
        $cardapio->preco = $request->preco;
        $cardapio->tipo_id = $request->tipo;
        $cardapio->descricao = $request->descricao;
        $success = $cardapio->save();

        return redirect('home')->with(['update' => $success]);
    }

    public function delete(Request $request){
        $cardapio = Produto::find($request->id_produto);
        $success = $cardapio->delete();

        return redirect('home')->with(['deleted' => $success]);
    }

    public function store(Request $request)
    {

        $cardapio = new Produto();
        $cardapio->nome = $request->nome;
        $cardapio->preco = $request->preco;
        $cardapio->tipo_id = $request->tipo;
        $cardapio->descricao = $request->descricao;
        $success = $cardapio->save();

        return redirect('home')->with(['success' => $success]);
    }
}
