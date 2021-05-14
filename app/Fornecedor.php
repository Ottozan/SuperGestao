<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    // Traits
    use SoftDeletes;
    // Força o nome da tabela a ser fornecedores (para o ORM)
    protected $table = 'fornecedores';
    //Para permitir criar um registro usando Create...
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
