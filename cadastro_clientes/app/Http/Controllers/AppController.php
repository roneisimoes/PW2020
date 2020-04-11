<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class AppController extends Controller
{
    function tela_login(){
    	if(session()->has("login")){
    		return redirect()->route("cliente_listar");
    	}

    	return view('login');
    }

    function login(Request $req){
    	$login = $req->input('login');
    	$senha = $req->input('senha');

    	$clientes = Cliente::where('login', '=', $login)->first();


    	if($clientes && $clientes->senha == $senha){

    		$variaveis = ["login" => $login];
    		session($variaveis);

    		return redirect()->route("cliente_listar");
    	} else{
    		return redirect()->route("tela_login");
    	}

    }

    function logout(){
        session()->forget(["login"]);
        
         return redirect()->route('tela_login');
    }
}
