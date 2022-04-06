@extends('layout.app', ["current" => "inicio"])

@section('title', 'Inicio')

@section('content')

    <div class="container">
        <div class="col">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://disneyplusbrasil.com.br/wp-content/uploads/2022/01/Os-Simpsons-Disney-Plus.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://lumiere-a.akamaihd.net/v1/images/original_1628718691_los-simpson---star_-_3_e73a2761.jpeg?region=0,379,1300,732" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://uploads.metropoles.com/wp-content/uploads/2022/02/26114310/Simpsons-Ucrania.jpg" class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="container">
        <h1-6>Produtos<span class="badge bg-dark">new</span></h1-6>
    </div>
    <div class="container">
        <div class="col">
        @foreach($categoriaIndex as $cadaUm => $value)
            <button type="button" class="btn btn-dark">{{ $value['nameCategoria'] }}</button>
        @endforeach
        </div>
    </div>

    <div class="container">
          <div class="col">
            @foreach ($produtosIndex as $key => $value)
            <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/474x/16/02/7b/16027bfba2e74c5d90b6ce0f28ff9f96.jpg" class="card-img-top" alt="Lisa dos simpsons">
                <div class="card-body">
                <h5 class="card-title">{{ $value['nameProduto'] }}</h5>
                <p class="card-text">R$:{{ $value['precoProduto'] }} Categoria: {{ $value['categoria']['nameCategoria'] }}</p>
                <a href="#" class="btn btn-dark">Ver produto</a>
                </div>
            </div>
            @endforeach
          </div>
        </div>
    </div>

@endsection
