<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos'; // nome da tabela no banco
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'fornecedor_id'];

    public function itemDetalhe() {
        return $this->hasOne('App\ItemDetalhe', 'produto_id', 'id'); // segundo parâmetro é a fk
        // Produto tem um produtoDetalhe - 1 registro relacionado em produto_detalhes (fk) -> produto_id
    }

    public function fornecedor() {
        return $this->belongsTo('App\Fornecedor');
    }
}
