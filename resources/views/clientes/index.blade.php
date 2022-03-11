@extends('layout.app', ['current' => 'clientes'])

@section('title', 'Clientes')

@section('content')

<div class="row">
    <div class="col-12">
        <a href="{{ route('clientes.create') }}" class="btn btn-primary">Novo Cliente</a>
    </div>
</div>
<br>

@if(count($clientes) > 0) 
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Ação</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ( $clientes as $cadaUm)
                    <tr>
                        <th scope="row">{{$cadaUm->id}}</th>
                        <td>{{$cadaUm->nameCliente}}</td>
                        <td>{{$cadaUm->cpfCliente}}</td>
                        <td>{{$cadaUm->cidadeCliente}}</td>
                        <td>{{$cadaUm->estadoCliente}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('clientes.edit', $cadaUm->id) }}"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('clientes.destroy', $cadaUm->id) }}" method="POST">
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