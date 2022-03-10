@extends('layout.app', ["current" => "Cliente"])

@section('title', 'Editar Cliente')

@section('content')
<div class="row">
        <div class="col">
            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">

                @method("PUT")
                @csrf

                <div class="mb-3">
                  <label for="nomeCliente" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" value="{{ $cliente->name }}">
                </div>

                <div class="mb-3">
                  <label for="cpfCliente" class="form-label">CPF</label>
                  <input type="text" class="form-control" id="cpfCliente" name="cpfCliente" value="{{ $cliente->cpf }}">
                </div>

                <div class="mb-3">
                  <label for="cepCliente" class="form-label">CEP</label>
                  <input type="text" class="form-control" id="cepCliente" name="cepCliente" value="{{ $cliente->cep }}">
                </div>

                <div class="mb-3">
                  <label for="enderecoCliente" class="form-label">Endereço</label>
                  <input type="text" class="form-control" id="enderecoCliente" name="enderecoCliente" value="{{ $cliente->endereco }}">
                </div>

                <div class="mb-3">
                  <label for="numeroCliente" class="form-label">Numero</label>
                  <input type="text" class="form-control" id="numeroCliente" name="numeroCliente" value="{{ $cliente->numero }}">
                </div>

                <div class="mb-3">
                  <label for="bairroCliente" class="form-label">Bairro</label>
                  <input type="text" class="form-control" id="bairroCliente" name="bairroCliente" value="{{ $cliente->bairro }}">
                </div>

                <div class="mb-3">
                  <label for="cidadeCliente" class="form-label">Cidade</label>
                  <input type="text" class="form-control" id="cidadeCliente" name="cidadeCliente" value="{{ $cliente->cidade }}">
                </div>

                <div class="mb-3">
                  <label for="estadoCliente" class="form-label">Estado</label>
                  <input type="text" class="form-control" id="estadoCliente" name="estadoCliente" value="{{ $cliente->estado }}">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
