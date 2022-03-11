@extends('layout.app', ["current" => "Cliente"])

@section('title', 'Editar Cliente')

@section('content')
<div class="row">
        <div class="col">
            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">

                @method("PUT")
                @csrf

                <div class="mb-3">
                  <label for="nameCliente" class="form-label">Nome Completo</label>
                  <input type="text" class="form-control" id="nameCliente" name="nameCliente" value="{{ $cliente->nameCliente }}">
                </div>

                <div class="mb-3">
                  <label for="cpfCliente" class="form-label">CPF</label>
                  <input type="text" class="form-control" id="cpfCliente" name="cpfCliente" value="{{ $cliente->cpfCliente }}">
                </div>

                <div class="mb-3">
                  <label for="cepCliente" class="form-label">CEP</label>
                  <input type="text" class="form-control" id="cepCliente" name="cepCliente" value="{{ $cliente->cepCliente }}">
                </div>

                <div class="mb-3">
                  <label for="enderecoCliente" class="form-label">Endereço</label>
                  <input type="text" class="form-control" id="enderecoCliente" name="enderecoCliente" value="{{ $cliente->enderecoCliente }}">
                </div>

                <div class="mb-3">
                  <label for="numeroCliente" class="form-label">Numero</label>
                  <input type="text" class="form-control" id="numeroCliente" name="numeroCliente" value="{{ $cliente->numeroCliente }}">
                </div>

                <div class="mb-3">
                  <label for="bairroCliente" class="form-label">Bairro</label>
                  <input type="text" class="form-control" id="bairroCliente" name="bairroCliente" value="{{ $cliente->bairroCliente }}">
                </div>

                <div class="mb-3">
                  <label for="cidadeCliente" class="form-label">Cidade</label>
                  <input type="text" class="form-control" id="cidadeCliente" name="cidadeCliente" value="{{ $cliente->cidadeCliente }}">
                </div>

                <div class="mb-3">
                  <label for="estadoCliente" class="form-label">Estado</label>
                  <input type="text" class="form-control" id="estadoCliente" name="estadoCliente" value="{{ $cliente->estadoCliente }}">
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
