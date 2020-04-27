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

//login e logout
Route::get('/tela_login', 'AppController@tela_login')->name('tela_login');

Route::post('/login', 'AppController@login')->name('login');

Route::get('/logout', 'AppController@logout')->name('logout');
	

//listar_cliente
Route::get('/clientes/lista', 'ClientesController@nomesClientes')->name('cliente_listar');

//listar_vendas
Route::get('/vendas/listar', 'VendaController@listar')->name("listar_vendas");

//listar_tipo_produtos
Route::get('/produtos/tipo/listar', 'TipoProdutosController@listar')->name("listar_tipo_produtos");

//listar_produtos
Route::get('/produtos/listar', 'ProdutosController@listar')->name("listar_produtos");


//cadastrar_cliente
Route::get('/clientes/cadastro', 'ClientesController@cadastro')->name('cliente_cadastrar');

Route::post('/clientes/novo', 'ClientesController@novo')->name('cliente_novo');

//cadastrar_venda
Route::get('/vendas/cadastro', 'VendaController@cadastro')->name("cadastrar_venda");
Route::post('/vendas/cadastro/nova', 'VendaController@nova')->name("cadastrar_venda_nova");

//cadastrar_item
Route::get('/vendas/cadastro/{id}/item', 'VendaController@cadastroItem')->name("cadastrar_venda_item");
Route::post('/vendas/cadastro/{id}/item/novo', 'VendaController@novoItem')->name("cadastrar_venda_item_novo");

//cadastro_tipo_produto
Route::get('/produtos/tipo/cadastro', 'TipoProdutosController@cadastro')->name("cadastrar_tipo_produtos");
Route::post('/produtos/tipo/cadastro/novo', 'TipoProdutosController@novo')->name("cadastrar_tipo_produtos_novo");

//cadastro_produto
Route::get('/produtos/cadastro', 'ProdutosController@cadastro')->name("cadastrar_produtos");
Route::post('/produtos/cadastro/novo', 'ProdutosController@novo')->name("cadastrar_produtos_novo");


//alterar_cliente
Route::get('/clientes/alterar/{id}', 'ClientesController@alteracao')->name('cliente_tela_alterar');
Route::post('/clientes/alterar/{id}', 'ClientesController@alterar')->name('cliente_alterar');

//alterar_vendads
Route::get('/vendas/alterar/{id}', 'VendaController@alteracao')->name('venda_tela_alterar');;
Route::post('/vendas/alteracao/{id}', 'VendaController@alterar')->name('venda_alterar');

//alterar_tipo_produto
Route::get('/produtos/tipo/alterar/{id}', 'TipoProdutosController@alterar')->name("alterar_tipo_produtos");
Route::post('/produtos/tipo/alterar/novo/{id}', 'TipoProdutosController@alteracao')->name("alterar_tipo_produtos_novo");

//alterar_produto
Route::get('/produtos/alterar/{id}', 'ProdutosController@alterar')->name("alterar_produtos");
Route::post('/produtos/alterar/novo/{id}', 'ProdutosController@alteracao')->name("alterar_produtos_novo");


//excluir_cliente
Route::get('/clientes/excluir/{id}', 'ClientesController@excluir')->name('cliente_excluir');

//excluir_vendas
Route::get('/vendas/excluir/{id}', 'VendaController@excluir')->name('venda_delete');

//excluir_item
Route::get('/vendas/excluir/{id}/item/{id_pivot}', 'VendaController@excluirItem')->name("excluir_vendas_item");

//excluir_tipo_produto
Route::get('/produtos/tipo/excluir/{id}', 'TipoProdutosController@excluir')->name("excluir_tipo_produtos");

//excluir_produto
Route::get('/produtos/excluir/{id}', 'ProdutosController@excluir')->name("excluir_produtos");




