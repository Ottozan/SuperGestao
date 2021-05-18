<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request){

        $motivo_contatos = MotivoContato::all();

        /*
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');
        echo '<br>';
        */

        /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        // print_r($contato->getAttributes());
        $contato->save();
        */

        /*
        $contato = new SiteContato();
        $contato->create($request->all());
        */
        // print_r($contato->getAttributes());

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request) {
        // validação dos dados do formulário recebidos no request
        $request->validate([
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'email' => 'email',
            'telefone' => 'required',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required'
        ],
        [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O campo nome precisa ter ao menos três caracteres.',
            'nome.max' => 'O campo nome execede 40 caracteres.',
            'nome.unique' => 'O campo nome deve ser único.',
            'email.email' => 'e-mail inválido!',
            // 'telefone.required' => 'Telefone precisa ser informado.',
            // 'motivo_contatos_id.required' => 'Selecione um motico para o contato.',
            'mensagem.required' => 'Você esqueceu de digitar a mensagem.',

            'required' => 'O campo :attribute precisa ser preenchido'
        ]

    );
        SiteContato::create($request->all());
        return redirect()->route('site.principal');
    }
}
