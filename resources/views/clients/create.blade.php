@extends('app')

@section('titutlo', 'Adicionar Cliente')


@section('conteudo')
<div class="row justify-content-center">
    <div class="col-mb-12">
        <h1 class="text-center">Novo Cliente</h1>
    </div>
    <div class="row justify-content-center">
        <div class="card mt-3" style="width: 22rem;">
            <div class="card-body">
                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome do Cliente</label>
                        <input type="text" class="form-control" id="NomeCliente" name="nome" placeholder="Digite o nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Endereço do Cliente</label>
                        <input type="text" class="form-control" id="EnderecoCliente" name="endereco" placeholder="Digite o endereço" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Observação do Cliente</label>
                        <textarea  id="ObservacaoCliente" rows="3" name="observacao" placeholder="Digite a obeservação" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>


</div>

@endsection