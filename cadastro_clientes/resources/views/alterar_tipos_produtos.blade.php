@extends('template')

@section('conteudo')
<h1>Cadastro de tipos de produtos</h1>
<h4>Realize a alteração do tipo de produto abaixo:</h4>
	<form method="post" action="{{ route('alterar_tipo_produtos_novo', ['id' => $tp->id]) }}">
		@csrf
		<label style="color: white;" for="nome">Nome:</label>
		<input type="text" name="nome" class="form-control" maxlength="100" placeholder="Nome" value="{{ $tp->nome }}" required>
		<label style="color: white;" for="descricao">Descrição:</label>
        <textarea class="form-control" name="descricao" required>{{ $tp->descricao }}</textarea><br>
        <button type="submit" class="btn btn-primary btn-block">Alterar</button>

    </form>

@endsection