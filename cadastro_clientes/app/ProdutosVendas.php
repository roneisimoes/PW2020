<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProdutosVendas extends Model
{
	use SoftDeletes;
	
    protected $primaryKey = "id";
    protected $table = "produtos_vendas";
}
