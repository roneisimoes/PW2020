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

Route::get('/clientes/lista', 'ClientesController@nomesClientes');

Route::get('/clientes/cadastro', 'ClientesController@cadastro');

Route::post('/clientes/novo', 'ClientesController@novo')->name('cliente_novo');