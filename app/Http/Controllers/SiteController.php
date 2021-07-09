<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * MOSTRA A PAGINA HOME
     *
     * @return void
     */
    public function index(){
          return view('home');
    }

    /**
     * MOSTRA A PAGINA SOBRE
     *
     * @return void
     */
    public function sobre(){
        echo "Conteudo Dinâmico Sobre";
    }

    /**
     * MOSTRA A PAGINA DE CONTATO
     *
     * @return void
     */
    public function contato(){
        echo "Conteudo Dinâmico Contato";
    }

    /**
     * MOSTRA A PAGINA DE SERVICO
     *
     * @return void
     */
    public function servicos(){
        echo "Conteudo Dinâmico Servicos";
    }

    /**
     * MOSTRA A PAGINA DE SERVICO COM O ID DE CADA SERVICO
     *
     * @param integer $id
     * @return void
     */
    public function servico(int $id){
        $servicos = [
            1 => [
                'nome' => 'Lavagem a Seco',
                'descricao' => 'Lavragem a seco para melhorar'
            ],
            2 => [
                'nome' => 'Lavagem Normal',
                'descricao' => 'Lavragem a normal para melhorar'
            ],
            3 => [
                'nome' => 'Lavagem a POOL',
                'descricao' => 'Lavragem a POOL para melhorar'
            ]
        ];
        return view('servico', [
            'servico' => $servicos[$id]
        ]);
    }

   
}
