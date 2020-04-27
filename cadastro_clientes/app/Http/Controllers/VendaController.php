<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\Cliente;
use App\Produto;

class VendaController extends Controller
{
    function cadastro(){
        if (session()->has("login")){
    	$cliente = Cliente::all();
    	return view("cadastro_venda", ["clientes" => $cliente]);
        }

        return redirect()->route('tela_login');
    }

    function nova(Request $req){
    	//$valor = $req->input("valor");
        $id_cliente = $req->input('id_cliente');

    	$venda = new Venda();
        $venda->descricao = $req->input("descricao");
        $venda->valor = 0;
    	$venda->id_cliente = $id_cliente;
        

        if ($venda->save()) {
            $msg = "Venda adicionada";
            $classe = "success";
        } else {
            $msg = "Venda não foi concluida.";
            $classe = "danger";
        }
        
        return redirect()->route('cadastrar_venda_item', ["id" => $venda->id]);

    }

    function listar(){
        if (session()->has("login")){
    	$lista = Venda::all();
    	return view("listar_vendas", ["vendas" => $lista]);
        }

         return redirect()->route('tela_login');
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
        //$venda->valor = $valor;

        if ($venda->save()) {
            $msg = "Venda feita para " . $venda->cliente->nome . " alterada com sucesso";
            $classe = "success";
        } else {
            $msg = "Venda não foi alterada.";
            $classe = "danger";
        }
        
        return view('resultado', [ "msg" => $msg, "classe" => $classe]);
    }

    function cadastroItem($id) {
        if (session()->has("login")){
            $venda = Venda::find($id);
            $produtos = Produto::all();
            return view('cadastro_item', [ 'venda' => $venda, 
                'produtos' => $produtos ]);
        }

        return redirect()->route('tela_login');
    }

    function novoItem(Request $req, $id) {
        $id_produto = $req->input('id_produto');
        $quantidade = $req->input('quantidade');

        $produto = Produto::find($id_produto);
        $venda = Venda::find($id);
        $subtotal = $produto->valor_unitario * $quantidade;

        $colunas_pivot = [
            'quantidade' => $quantidade,
            'subtotal' => $subtotal
        ];

        $venda->produtos()->attach($produto->id, $colunas_pivot);
        $venda->valor += $subtotal;
        $venda->save();

        return redirect()->route('cadastrar_venda_item', 
            ['id' => $venda->id]);

    }

     function excluirItem($id, $id_pivot){
        $venda = Venda::find($id);
        $subtotal = 0;

        foreach($venda->produtos as $vp){
            if ($vp->pivot->id == $id_pivot){
                $subtotal = $vp->pivot->subtotal;
                break;
            }
        }

        $venda->valor -= $subtotal; 
        $venda->produtos()->wherePivot('id', '=', $id_pivot)-> detach();
        $venda->save();

        return redirect()->route('cadastrar_venda_item', 
            ['id' => $id]);
    }




}
