
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Cadastros</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li @if($current=='inicio') class="nav-item active" @else  class="nav-item" @endif>
            <a class="nav-link" href="/">Inicio</a>
          </li>
          <li @if($current=='produtos') class="nav-item active" @else  class="nav-item" @endif>
            <a class="nav-link" href="{{ route('produtos.index') }}">Produtos</a>
          </li>
          <li @if($current=='categorias') class="nav-item active" @else  class="nav-item" @endif>
            <a class="nav-link" href="{{ route('categorias.index') }}">Categorias</a>
          </li>
          <li @if($current=='clientes') class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a>
          </li>
        </ul>
      </div>

    </div>
</nav>