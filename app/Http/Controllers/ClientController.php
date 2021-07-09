<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * MÉTODO PARA LISTAR OS CLIENTES
     *
     * @return View
     */
    public function index(): View{
        $clients = Client::get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /**
     * MÉTODO PARA MOSTRAR UM CLIENTE PELO ID DO PRÓPRIO
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id) : View{
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);

    }

    /**
     * MÉTODO PARA EXIBIR O FORMULARIO DE CRAÇÃO DE CLIENTES
     *
     * @return View
     */
    public function create(): View{
        return view('clients.create');
    }

    /**
     * MÉTODO PARA CRIAR UM CLIENTE NO BANCO DE DADOS
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse{

        $dados = $request->except('_token');

        Client::create($dados);
        
        return redirect('/clients');
    }

    /**
     * MÉTODO QUE USA O ID DO CLIENTE PARA PREENCHER O FORMULARIO E FAZER O UPDATE DO MESMO
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View{

        $client = Client::find($id);
        
        return view('clients.edit', [
             'client' => $client
        ]);
    }

    /**
     * MÉTODO PARA ATUALIZAR O CLIENTE NO BANCO
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id,Request $request): RedirectResponse{

        $client = Client::find($id);

        $client->update([
             'nome'=> $request->nome,
             'endereco'=> $request->endereco,
             'observacao'=> $request->observacao
        ]);

        return redirect('/clients');

    }

    /**
     * MÉTODO QUE USA O ID DO CLIENTE PARA APAGAR O CLIENTE NO BANCO DE DADOS
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse{
        $client = Client::find($id);

        $client->delete();

        return redirect('/clients');
    }
    
}
