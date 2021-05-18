<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'PrincipalController@principal')->name('site.principal')->middleware('log.acesso');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/login', function(){ return 'Login'; });

Route::prefix('/app')->group(function(){
    Route::middleware('autenticacao')
           ->get('/clientes', function(){ return 'clientes'; })->name('app.clientes');
    Route::middleware('autenticacao')
           ->get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::middleware('autenticacao')
           ->get('/produtos', function(){ return 'produtos'; })->name('app.produtos');
});


Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

// Criar controlador: php artisan make:controller TesteController

/*
Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');


*/
// Route::redirect('/rota2', '/rota1');


/*
Route::get('/contato/{nome}/{categoria_id?}', // ? indica parâmetro opcional, deve estar mais a direita
            function(string $nome,
              int $categoria_id = 1)
            {
             echo "Estamos aqui, $nome, Seja bem vindo $categoria_id!";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+'); // expressão regular trayamento parâmetro
*/