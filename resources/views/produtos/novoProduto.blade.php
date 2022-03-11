@extends('layout.app', ["current" => "produto"])

@section('title', 'Novo produto')

@section('content')
    <div class="row">
        <div class="col">
            <form action="{{ route('produtos.store') }}" method="POST">
                @csrf
                @method("POST")
                <div class="mb-3">
                  <label for="nameProduto" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nameProduto" name="nameProduto">
                </div>
                <div class="mb-3">
                  <label for="stockProduto" class="form-label">Estoque</label>
                  <input type="number" class="form-control" id="stockProduto" name="stockProduto">
                </div>
                <div class="mb-3">
                  <label for="precoProduto" class="form-label">Valor</label>
                  <input type="number" class="form-control" id="precoProduto" name="precoProduto" min="0.00" max="10000.00" step="0.01">
                </div>
                <div class="mb-3">
                <div class="mb-3">
                  <select class="form-select" aria-label="Default select example" name="categoriaProduto">
                      @foreach( $categorias as $cadaUm )
                        <option value="{{ $cadaUm->id }}">{{ $cadaUm->nameCategoria }}</option>
                      @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
    @if($errors->any())
        <div style="margin:10px;">
        @foreach( $errors->all() as $error )
          <div class="alert alert-danger" role="alert">
            <strong>{{ $error }}</strong>
          </div>
        @endforeach
        </div>
    @endif
@endsection
