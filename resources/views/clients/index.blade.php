@extends('app')

@section('titutlo', 'Lista de Clientes')


@section('conteudo')
<div class="row">
    <h1>Lista de Clientes</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">ENDEREÇO</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td><a href="{{ route('clients.show', $client) }}">{{$client->nome}}</a></td>
                <td>{{$client->endereco}}</td>
                <td>
                    <a href="{{ route('clients.edit', $client) }}" class="btn btn-success">Atualizar</a>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja Excluir o Cliente?')">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('clients.create')}}" class="btn btn-success">Novo Cliente</a>
</div>

@endsection