<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\TipoProdutos;

class ProdutosController extends Controller
{
     function cadastro() {
            $tp = TipoProdutos::all();
       		return view('cadastrar_produtos', ["tp" => $tp]); 
    }

    function novo(Request $req) {
        $valor_unitario = $req->input("valor_unitario");
        
        $venda = new Produto();
        $venda->nome = $req->input("nome");
        $venda->id_tipo_produtos = $req->input("id_tipo_produtos");
        $venda->valor_unitario = $valor_unitario;

        if ($venda->save()) {
        	$mensagem = "Produto adicionado com sucesso.";
            $classe = "success";
        } else {
            $mensagem = "Produto não foi adicionado.";
            $classe = "danger";
        }
        
        return view('resultado', ["msg" => $mensagem, "classe" => $classe]);    
    }

    function alterar($id) {
        $p = Produto::find($id);
        $tp = TipoProdutos::all();
        return view('alterar_produtos', ["tp" => $tp, "p" => $p]);
    }

     function alteracao(Request $req, $id) {
        $valor_unitario = $req->input("valor_unitario");
 
        $venda = Produto::find($id);
        $venda->nome = $req->input("nome");
        $venda->id_tipo_produtos = $req->input("id_tipo_produtos");
        $venda->valor_unitario = $valor_unitario;

        if ($venda->save()) {
        	$mensagem = "Produto alterado com sucesso.";
            $classe = "success";
        } else {
            $mensagem = "Produto não foi alterado.";
            $classe = "danger";
        }
        
        return view('resultado', ["msg" => $mensagem, "classe" => $classe]); 
    }

     function listar() {        
        $lista = Produto::all();
        return view('listar_produtos', [ "lista" => $lista]);
    }

    function excluir($id) {
        $p = Produto::find($id);

       if($p->delete()){
            $msg = "Produto deletado com sucesso!!";
            $classe = "success";
        } else{
            $msg = "Produto não foi excluido!!";
            $classe = "danger";
        }

        return view("resultado", ["msg" => $msg, "classe" => $classe]);
    }



}
