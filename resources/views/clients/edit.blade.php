@extends('app')

@section('titutlo', 'Atualizar Dados do Cliente')


@section('conteudo')
<div class="row justify-content-center">
    <div class="col-mb-12">
        <h1 class="text-center">Atualizar os Dados do Cliente</h1>
    </div>
    <div class="row justify-content-center">
        <div class="card mt-3" style="width: 22rem;">
            <div class="card-body">
                <form action="{{ route('clients.update', $client) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" >Nome do Cliente</label>
                        <input type="text" class="form-control" id="NomeCliente" name="nome" placeholder="Digite o nome" value="{{ $client->nome }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" >Endereço do Cliente</label>
                        <input type="text" class="form-control" id="EnderecoCliente" name="endereco" placeholder="Digite o endereço" value="{{ $client->endereco }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Observação do Cliente</label>
                        <textarea  id="ObservacaoCliente" class="form-control" rows="3" name="observacao" placeholder="Digite a obeservação" required >{{ $client->observacao }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
            </div>
        </div>
    </div>


</div>

@endsection