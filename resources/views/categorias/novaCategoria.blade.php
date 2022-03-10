@extends('layout.app', ["current" => "categoria"])

@section('title', 'Nova categoria')

@section('content')
    <div class="row">
        <div class="col">
            <form action="{{ route('categorias.store') }}" method="POST">

                @method("POST")
                @csrf

                <div class="mb-3">
                  <label for="nomeCategoria" class="form-label">Nome Categoria</label>
                  <input type="text" class="form-control" id="nomeCategoria" name="nomeCategoria">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
