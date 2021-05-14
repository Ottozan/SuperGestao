<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => ['nome'=> 'Fornecedor 1',
            'status' => 'Inativo',
            'cnpj' => ''], // '0' vazio, empty(), '00', não vazio
            1 => ['nome'=> 'Fornecedor 2',
            'status' => 'Ativo']
        ];

        // Operador ternario
        // condicao ? se verdadeiro :  valor se falso
        // $msg = isset($fornecedores[1]['cnpj']) ? 'CNPJ informado': 'CNPJ não informado';
        // echo $msg;

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
