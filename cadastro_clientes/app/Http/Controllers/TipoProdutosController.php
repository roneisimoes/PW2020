<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProdutos;

class TipoProdutosController extends Controller
{
     function cadastro() {
        if (session()->has("login")){
           return view('cadastrar_tipos_produtos'); 
        }

        return redirect()->route('tela_login');
        
    }

    function novo(Request $req) {
        
        $venda = new TipoProdutos();
        $venda->nome = $req->input("nome");
        $venda->descricao = $req->input("descricao");

        if ($venda->save()) {
        	$mensagem = "Tipo de produto adicionado com sucesso.";
            $classe = "success";
        } else {
            $mensagem = "Tipo de produto não foi adicionado.";
            $classe = "danger";
        }
        
        return view('resultado', ["msg" => $mensagem, "classe" => $classe]);
    }

    function alterar($id) {

        $tp = TipoProdutos::find($id);
        return view('alterar_tipos_produtos', ["tp" => $tp]);
    }

    function alteracao(Request $req, $id) {
        
        $venda = TipoProdutos::find($id);
        $venda->nome = $req->input("nome");
        $venda->descricao = $req->input("descricao");

        if ($venda->save()) {
        	$mensagem = "Tipo de produto alterado com sucesso.";
            $classe = "success";
        } else {
            $mensagem = "Tipo de produto não foi alteradp.";
            $classe = "danger";
        }
        
        return view('resultado', ["msg" => $mensagem, "classe" => $classe]);
    }

    function listar() {    
         if (session()->has("login")){        
            $lista = TipoProdutos::all();
            return view('listar_tipos_produtos', [ "lista" => $lista]);
          }
          
         return redirect()->route('tela_login');
    }

    function excluir($id){
    	$tp = TipoProdutos::find($id);

    	
        if($tp->delete()){
            $msg = "Tipo de produto deletado com sucesso!!";
            $classe = "success";
        } else{
            $msg = "Tipo de produto não foi excluido!!";
            $classe = "danger";
        }

        return view("resultado", ["msg" => $msg, "classe" => $classe]);
    }




}
