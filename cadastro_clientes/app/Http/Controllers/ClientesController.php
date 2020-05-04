<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    function nomesClientes(){
        $clientes = Cliente::all();
    	return view("lista_clientes", ["clientes" => $clientes]);
    }

    function cadastro(){
    	return view("cadastro_cliente");
    }

    function alteracao($id){
        $cliente = Cliente::find($id);
        return view("alteracao_cliente", ["c" => $cliente ]);
    }

    function novo(Request $req){
    	$nome = $req->input('nome');
    	$endereco = $req->input('endereco');
    	$cep = $req->input('cep');
    	$cidade = $req->input('cidade');
    	$estado = $req->input('estado');
        

    	$cliente = new Cliente();
    	$cliente->nome = $nome;
    	$cliente->endereco = $endereco;
    	$cliente->cep = $cep;
    	$cliente->cidade = $cidade;
    	$cliente->estado = $estado;
       
  

    	if ($cliente->save()){
    		$mensagem = "Cliente $nome inserido com sucesso.";
            $classe = "success";
    	} else {
    		$mensagem = "Cliente não foi inserido.";
            $classe = "danger";
    	}

    	return view("resultado", ["msg" => $mensagem, "classe" => $classe]);
    }

    function alterar(Request $req, $id){
        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');
        

        $cliente = Cliente::find($id);
        $cliente->nome = $nome;
        $cliente->endereco = $endereco;
        $cliente->cep = $cep;
        $cliente->cidade = $cidade;
        $cliente->estado = $estado;
        
        
        if ($cliente->save()){
            $msg = "Cliente $nome alterado com sucesso!!";
            $classe = "success";
        } else{
            $msg = "Cliente não foi alterado!!";
            $classe = "danger";
        }

        return view("resultado", ["msg" => $msg, "classe" => $classe]);
    }

    function excluir($id){
        $cliente = Cliente::find($id);

        foreach($cliente->venda as $v){
            $v->delete();
        }

        if($cliente->delete()){
            $msg = "Cliente deletado com sucesso!!";
            $classe = "success";
        } else{
            $msg = "Cliente não foi excluido!!";
            $classe = "danger";
        }

        return view("resultado", ["msg" => $msg, "classe" => $classe]);
    }
}
