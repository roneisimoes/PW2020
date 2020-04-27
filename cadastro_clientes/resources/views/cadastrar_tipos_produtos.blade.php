@extends('template')

@section('conteudo')
<h1>Cadastro de tipos de produtos</h1>
<h4>Realize o cadastro do tipo de produto abaixo:</h4>
	<form method="post" action="{{ route('cadastrar_tipo_produtos_novo') }}">
		@csrf
		<label style="color: white;" for="nome">Nome:</label>
		<input type="text" name="nome" class="form-control" maxlength="100" placeholder="Nome" required>
		<label style="color: white;" for="descricao">Descrição:</label>
        <textarea class="form-control" name="descricao" required></textarea><br>
        <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>

    </form>

@endsection