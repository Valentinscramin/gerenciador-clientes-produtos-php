@extends('layout.app', ["current" => "categorias"])

@section('title', 'Categorias')

@section('content')

<div class="row">
    <div class="col-12">
        <a href="{{ route('categorias.create') }}" class="btn btn-primary">Nova Categoria</a>
    </div>
</div>
<br>
@if(count($categorias) > 0)
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ação</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ( $categorias as $cadaUm)
                    <tr>
                        <th scope="row">{{$cadaUm->id}}</th>
                        <td>{{$cadaUm->nameCategoria}}</td>
                        <td class="display-inline">
                            <a class="btn btn-primary btn-sm" href="{{ route('categorias.edit', $cadaUm->id) }}"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('categorias.destroy', $cadaUm->id) }}" method="POST">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa-solid fa-trash"></>
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
