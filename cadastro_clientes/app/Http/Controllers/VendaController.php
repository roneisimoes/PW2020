<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\Cliente;

class VendaController extends Controller
{
    function cadastro(){
    	$cliente = Cliente::all();
    	return view("cadastro_venda", ["clientes" => $cliente]);
    }

    function nova(Request $req){
    	$valor = $req->input("valor");

    	$venda = new Venda();
    	$venda->id_cliente = $req->input("id_cliente");
    	$venda->descricao = $req->input("descricao");
        $venda->valor = $valor;

        if ($venda->save()) {
            $msg = "Venda feita para " . $venda->cliente->nome;
            $classe = "success";
        } else {
            $msg = "Venda não foi concluida.";
            $classe = "danger";
        }
        
        return view('resultado', [ "msg" => $msg, "classe" => $classe]);

    }

    function listar(){
    	$lista = Venda::all();
    	return view("listar_vendas", ["vendas" => $lista]);
    }

    function excluir($id){
    	$venda = Venda::find($id);

    	if ($venda->delete()) {
            $msg = "Venda deletada com sucesso!!";
            $classe = "success";
        } else {
            $msg = "Venda não foi deletada.";
            $classe = "danger";
        }
        
        return view('resultado', [ "msg" => $msg, "classe" => $classe]);

    }

    function alteracao($id){
    	$cliente = Cliente::all();
        $venda = Venda::find($id);
        return view('alteracao_venda', [ "clientes" => $cliente, "venda" => $venda]);
    }

    function alterar(Request $req, $id){
    	$valor = $req->input("valor");

    	$venda = Venda::find($id);
    	$venda->id_cliente = $req->input("id_cliente");
    	$venda->descricao = $req->input("descricao");
        $venda->valor = $valor;

        if ($venda->save()) {
            $msg = "Venda feita para " . $venda->cliente->nome . " alterada com sucesso";
            $classe = "success";
        } else {
            $msg = "Venda não foi alterada.";
            $classe = "danger";
        }
        
        return view('resultado', [ "msg" => $msg, "classe" => $classe]);
    }




}
