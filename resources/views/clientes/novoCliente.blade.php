@extends("layout.app", ["current" => "Cliente"])


@section('title', 'Novo Cliente')

@section('content')
    <div class="row">
        <div class="col">
            <form action="{{ route('clientes.store') }}" method="POST">

                @method("POST")
                @csrf

                <div class="mb-3">
                  <label for="nomeCliente" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nomeCliente" name="nomeCliente">
                </div>

                <div class="mb-3">
                  <label for="cpfCliente" class="form-label">CPF</label>
                  <input type="text" class="form-control" id="cpfCliente" name="cpfCliente">
                </div>

                <div class="mb-3">
                  <label for="cepCliente" class="form-label">CEP</label>
                  <input type="text" class="form-control" id="cepCliente" name="cepCliente">
                </div>

                <div class="mb-3">
                  <label for="enderecoCliente" class="form-label">Endereço</label>
                  <input type="text" class="form-control" id="enderecoCliente" name="enderecoCliente">
                </div>

                <div class="mb-3">
                  <label for="numeroCliente" class="form-label">Numero</label>
                  <input type="text" class="form-control" id="numeroCliente" name="numeroCliente">
                </div>

                <div class="mb-3">
                  <label for="bairroCliente" class="form-label">Bairro</label>
                  <input type="text" class="form-control" id="bairroCliente" name="bairroCliente">
                </div>

                <div class="mb-3">
                  <label for="cidadeCliente" class="form-label">Cidade</label>
                  <input type="text" class="form-control" id="cidadeCliente" name="cidadeCliente">
                </div>

                <div class="mb-3">
                  <label for="estadoCliente" class="form-label">Estado</label>
                  <input type="text" class="form-control" id="estadoCliente" name="estadoCliente">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
