<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterClientesAddLoginSenha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('clientes', function (Blueprint $table){
           $table->string('login', 200);
           $table->string('senha', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('clientes', function (Blueprint $table){
           $table->dropColumn('login');
           $table->dropColumn('senha');
        });
    }
}
