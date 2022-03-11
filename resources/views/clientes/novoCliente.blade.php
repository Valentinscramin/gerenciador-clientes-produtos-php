@extends("layout.app", ["current" => "Cliente"])


@section('title', 'Novo Cliente')

@section('content')
    <div class="row">
        <div class="col">
            <form action="{{ route('clientes.store') }}" method="POST">

                @method("POST")
                @csrf

                <div class="mb-3">
                  <label for="nameCliente" class="form-label">Nome Completo</label>
                  <input type="text" class="form-control {{ $errors->has('nameCliente') ? 'is-invalid' : '' }}" id="nameCliente" name="nameCliente">
                  @if ( $errors->has('nameCliente') )
                  <div class="invalid-feedback">
                    {{ $errors->first('nameCliente') }}
                  </div>
                  @endif
                </div>

                <div class="mb-3">
                  <label for="cpfCliente" class="form-label">CPF</label>
                  <input type="text" class="form-control {{ $errors->has('cpfCliente') ? 'is-invalid' : '' }}" id="cpfCliente" name="cpfCliente">
                  @if ( $errors->has('cpfCliente') )
                  <div class="invalid-feedback">
                    {{ $errors->first('cpfCliente') }}
                  </div>
                  @endif
                </div>

                <div class="mb-3">
                  <label for="cepCliente" class="form-label">CEP</label>
                  <input type="text" class="form-control {{ $errors->has('cepCliente') ? 'is-invalid' : '' }}" id="cepCliente" name="cepCliente">
                  @if ( $errors->has('cepCliente') )
                  <div class="invalid-feedback">
                    {{ $errors->first('cepCliente') }}
                  </div>
                  @endif
                </div>

                <div class="mb-3">
                  <label for="enderecoCliente" class="form-label">Endereço</label>
                  <input type="text" class="form-control {{ $errors->has('enderecoCliente') ? 'is-invalid' : '' }}" id="enderecoCliente" name="enderecoCliente">
                  @if ( $errors->has('enderecoCliente') )
                  <div class="invalid-feedback">
                    {{ $errors->first('enderecoCliente') }}
                  </div>
                  @endif
                </div>

                <div class="mb-3">
                  <label for="numeroCliente" class="form-label">Numero</label>
                  <input type="text" class="form-control {{ $errors->has('numeroCliente') ? 'is-invalid' : '' }}" id="numeroCliente" name="numeroCliente">
                  @if ( $errors->has('numeroCliente') )
                  <div class="invalid-feedback">
                    {{ $errors->first('numeroCliente') }}
                  </div>
                  @endif
                </div>

                <div class="mb-3">
                  <label for="bairroCliente" class="form-label">Bairro</label>
                  <input type="text" class="form-control {{ $errors->has('bairroCliente') ? 'is-invalid' : '' }}" id="bairroCliente" name="bairroCliente">
                  @if ( $errors->has('bairroCliente') )
                  <div class="invalid-feedback">
                    {{ $errors->first('bairroCliente') }}
                  </div>
                  @endif
                </div>

                <div class="mb-3">
                  <label for="cidadeCliente" class="form-label">Cidade</label>
                  <input type="text" class="form-control {{ $errors->has('cidadeCliente') ? 'is-invalid' : '' }}" id="cidadeCliente" name="cidadeCliente">
                  @if ( $errors->has('cidadeCliente') )
                  <div class="invalid-feedback">
                    {{ $errors->first('cidadeCliente') }}
                  </div>
                  @endif
                </div>

                <div class="mb-3">
                  <label for="estadoCliente" class="form-label">Estado</label>
                  <input type="text" class="form-control {{ $errors->has('estadoCliente') ? 'is-invalid' : '' }}" id="estadoCliente" name="estadoCliente">
                  @if ( $errors->has('estadoCliente') )
                  <div class="invalid-feedback">
                    {{ $errors->first('estadoCliente') }}
                  </div>
                  @endif
                </div>

                <div class="mb-3">
                  <label for="emailCliente" class="form-label">Email</label>
                  <input type="text" class="form-control {{ $errors->has('emailCliente') ? 'is-invalid' : '' }}" id="emailCliente" name="emailCliente">
                  @if ( $errors->has('emailCliente') )
                  <div class="invalid-feedback">
                    {{ $errors->first('emailCliente') }}
                  </div>
                  @endif
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
