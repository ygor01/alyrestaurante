@extends('layouts.app')
<style>
    tr:hover{
        background: #dbdbdb;
    }
</style>

@section('content')
    <div class="container">
        <h2>Editar cardápio</h2>

        <a href="">Criar novo cardapio</a>
        <form action="{{route('cardapio.update')}}" method="post">
            @csrf
            <input type="hidden" name="id_produto" value="{{$produto->id}}">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome do produto" value="{{$produto->nome}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Preço</label>
                <input type="text" name="preco" class="form-control" id="exampleInputPassword1" placeholder="29,90" value="{{$produto->preco}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tipo de cardapio</label>
                <select class="form-control" name="tipo" id="exampleInputPassword1" placeholder="Descrição" maxlength="200">
                    @foreach($tipos_cardapio as $tipo)
                        @if($produto->tipo_id == $tipo->id)
                            <option value="{{$tipo->id}}" selected>{{$tipo->tipo}}</option>
                        @else
                            <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Descrição</label>
                <textarea class="form-control" name="descricao" id="exampleInputPassword1" placeholder="Descrição" maxlength="200">{{$produto->descricao}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>

    </div>



@endsection
