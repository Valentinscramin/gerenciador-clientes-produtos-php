@extends('layout.app', ["current" => "produtos"])

@section('title', 'Produtos')

@section('content')
<div class="row">
    <div class="col-12">
        <a href="{{ route('produtos.create') }}" class="btn btn-primary">Novo Produto</a>
    </div>
</div>
<br>

@if(count($produtos) > 0)

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Estoque</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">preço</th>
                    <th scope="col">Ação</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ( $produtos as $cadaUm )
                    <tr>
                        <th scope="row">{{$cadaUm->id}}</th>
                        <td>{{$cadaUm->name}}</td>
                        <td>{{$cadaUm->stock}}</td>
                        <td>{{$cadaUm->categoria_id}}</td>
                        <td>R$ {{$cadaUm->preco}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('produtos.edit', $cadaUm->id) }}">Editar</a>
                            <form action="{{ route('produtos.destroy', $cadaUm->id) }}" method="POST">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger btn-sm" type="submit">Apagar</>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endif

@endsection