<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FonrecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        // método create (atenção para o atributo fillable da classe)
        Fornecedor::create([
            'nome' => 'Fernando',
            'site' => 'fernando.com.br',
            'uf' => 'RS',
            'email' => 'contato@fernando.com.br'
        ]);

        // insert (não passa pelo tratamento do Eloquent)
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'fornecedor300.com.br',
            'uf' => 'SC',
            'email' => 'contato@fornecedor300.com.br'
        ]);

    }
}
