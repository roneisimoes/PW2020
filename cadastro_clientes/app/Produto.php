<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
	use SoftDeletes;
	
    protected $primaryKey = "id";
    protected $table = "produtos";

    function vendas(){
    	return $this->belongsToMany('App\Venda', 'produtos_vendas', 'id_produto', 'id_venda')->withPivot(['quantidade', 'subtotal'])->withTimestamps();
    }

    function tipo(){
    	return $this->belongsTo('App\TipoProdutos', 'id_tipo_produtos', 'id');
    }
}
