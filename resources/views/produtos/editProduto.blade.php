@extends('layout.app', ["current" => "produto"])

@section('title', 'Editar Produto')

@section('content')
    <div class="row">
        <div class="col">
            <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
               
                @csrf
                @method("PUT")
                
                <div class="mb-3">
                  <label for="nomeProduto" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nomeProduto" name="nomeProduto" value="{{$produto->name}}">
                </div>
                <div class="mb-3">
                  <label for="estoqueProduto" class="form-label">Estoque</label>
                  <input type="number" class="form-control" id="estoqueProduto" name="estoqueProduto" value="{{$produto->stock}}">
                </div>
                <div class="mb-3">
                  <label for="precoProduto" class="form-label">Valor</label>
                  <input type="number" class="form-control" id="precoProduto" name="precoProduto" min="0.00" max="10000.00" step="0.01" value="{{$produto->preco}}">
                </div>
                <div class="mb-3">
                  <select class="form-select" aria-label="Default select example" name="categoriaProduto">
                      @foreach( $categorias as $cadaUm )
                        <option value="{{ $cadaUm->id }}">{{ $cadaUm->name }}</option>
                      @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection