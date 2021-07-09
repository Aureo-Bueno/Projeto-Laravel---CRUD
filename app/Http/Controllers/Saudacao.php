<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saudacao extends Controller
{
    /**
     * METODO PARA TRAZER A SAUDACAO
     *
     * @param string $nome
     * @return void
     */
    public function __invoke(string  $nome = 'Aureo Bueno')
    {
        return view('saudacao')->with('nome', $nome);

        //EXEMPLO SE CASO NA PASTA VIEW TIVER OUTRA PASTA E DENTRO TRENHA ALGUMA VIEW QUE EU QUEIRA TRAZER
        //return view('site.saudacao')->with('nome', $nome);
    }
}
