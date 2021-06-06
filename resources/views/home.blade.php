@extends('layouts.app')
<style>
    tr:hover{
        background: #dbdbdb;
    }
    .titulo{
        background: #f2f2f2;
        display: block;
        width: inherit;
        padding: 5px;
        margin: 0 auto;
        text-align: center;
        font-size: 20pt;
        width: 150px;
        border-radius: 50px;
    }
</style>

@section('content')
    <div class="container">
        <h2>Edição de cardápios</h2>

        <a href="{{route('cardapio.new')}}">Criar novo cardapio</a>

        @if($success)
            <div class="alert alert-success" role="alert">
                Produto cadastrado com sucesso!
            </div>
        @elseif($update)
            <div class="alert alert-info" role="alert">
                Produto editado com sucesso!
            </div>
        @elseif($deleted)
            <div class="alert alert-danger" role="alert">
                Produto excluido com sucesso!
            </div>
        @endif

        @foreach($tipos_cardapio as $tc)
            <br><div class="titulo">{{$tc->tipo}}</div>

        @if($tc->produto->count())

            <table style="margin: 20px 0px 40px 0px;" class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Descrição</th>
                    <th class="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tc->produto as $p)
                    <tr>
                        <th scope="row">{{$p->nome}}</th>
                        <td>{{$p->preco}}</td>
                        <td>{{$p->descricao}}</td>
                        <td><a href="{{route('cardapio.editar', [$p->id])}}">Editar</a> <a href="{{route('cardapio.remover', [$p->id])}}">Excluir</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
                <h5>Nenhum produto cadastrado do tipo {{$tc->tipo}}, <a href="{{route('cardapio.new')}}">clique aqui para cadastrar</a></h5>
            @endif
        @endforeach
    </div>



@endsection
