<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoProdutos extends Model
{
	use SoftDeletes;
	
    protected $primaryKey = "id";
    protected $table = "tipo_produtos";
}
