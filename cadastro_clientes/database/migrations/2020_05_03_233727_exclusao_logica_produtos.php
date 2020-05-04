<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExclusaoLogicaProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function(Blueprint $table){
            $table->softDeletes();
        });
    
        Schema::table('tipo_produtos', function(Blueprint $table){
            $table->softDeletes();
        });
  
        Schema::table('produtos_vendas', function(Blueprint $table){
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function(Blueprint $table){
            $table->dropSoftDeletes();
        });

        Schema::table('tipo_produtos', function(Blueprint $table){
            $table->dropSoftDeletes();
        });

        Schema::table('produtos_vendas', function(Blueprint $table){
            $table->dropSoftDeletes();
        });
    }
}
