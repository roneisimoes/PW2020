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

Route::get('/', function () {
    return view('welcome');
});
	
//listar_cliente
Route::get('/clientes/lista', 'ClientesController@nomesClientes')->name('cliente_listar');


//cadastrar_cliente
Route::get('/clientes/cadastro', 'ClientesController@cadastro')->name('cliente_cadastrar');

//alterar_cliente
Route::get('/clientes/alterar/{id}', 'ClientesController@alteracao')->name('cliente_tela_alterar');
Route::post('/clientes/alterar/{id}', 'ClientesController@alterar')->name('cliente_alterar');

//excluir_cliente
Route::get('/clientes/excluir/{id}', 'ClientesController@excluir')->name('cliente_excluir');


//msg
Route::post('/clientes/novo', 'ClientesController@novo')->name('cliente_novo');

//cadastrar_venda
Route::get('/vendas/cadastro', 'VendaController@cadastro')->name("cadastrar_venda");
Route::post('/vendas/cadastro/nova', 'VendaController@nova')->name("cadastrar_venda_nova");

//listar_vendas
Route::get('/vendas/listar', 'VendaController@listar')->name("listar_vendas");


//excluir_vendas
Route::get('/vendas/excluir/{id}', 'VendaController@excluir')->name('venda_delete');

//alterar_vendads
Route::get('/vendas/alterar/{id}', 'VendaController@alteracao')->name('venda_tela_alterar');;
Route::post('/vendas/alteracao/{id}', 'VendaController@alterar')->name('venda_alterar');