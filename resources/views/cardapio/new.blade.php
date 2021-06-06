@extends('layouts.app')
<style>
    tr:hover{
        background: #dbdbdb;
    }
</style>

@section('content')
    <div class="container">
        <h2>Novo cardápio</h2>

        <a href="">Criar novo cardapio</a>
        <form action="{{route('cardapio.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome do produto">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Preço</label>
                <input type="text" name="preco" class="form-control" id="exampleInputPassword1" placeholder="29,90">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tipo de cardapio</label>
                <select class="form-control" name="tipo" id="exampleInputPassword1" placeholder="Descrição" maxlength="200">
                    @foreach($tipos_cardapio as $tipo)
                        <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Descrição</label>
                <textarea class="form-control" name="descricao" id="exampleInputPassword1" placeholder="Descrição" maxlength="200"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

    </div>



@endsection
