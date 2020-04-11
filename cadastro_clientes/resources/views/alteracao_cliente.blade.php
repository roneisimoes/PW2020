@extends('template') 

@section('conteudo')
<h1>Alteração de dados do cliente</h1>
	<form method="post" action="{{ route('cliente_alterar', ['id' => $c->id]) }}">
			@csrf
			<label style="color: white;" for="nome">Nome:</label>   
			<input type="text" class="form-control" name="nome" placeholder="Nome Completo" value="{{ $c->nome}}">
			<label style="color: white;" for="endereco">Endereço:</label>   
			<input type="text" class="form-control" name="endereco" placeholder="Endereço" value="{{ $c->endereco}}">
			<label style="color: white;" for="cep">CEP:</label>
			<input type="number" class="form-control" name="cep" placeholder="Digite somente numeros" value="{{ $c->cep}}">
			<label style="color: white;" for="cidade">Cidade:</label>   
			<input type="text" class="form-control" name="cidade" placeholder="Cidade" value="{{ $c->cidade}}">
			<label style="color: white;" for="estado">Estado:</label>
			<select class="form-control" name="estado" value="{{ $c->estado}}">
				<option>SC</option>
				<option>PR</option>
				<option>RS</option>
				<option>SP</option>
				<option>RJ</option>
			</select>
			<label style="color: white;" for="login">Login:</label>
			<input type="text" class="form-control" maxlength="255" name="login" placeholder="Login" value="{{ $c->login}}">
			<label style="color: white;" for="senha">Senha:</label>
			<input type="password" class="form-control" maxlength="100" name="senha" placeholder="Senha" value="{{ $c->senha}}"><br>
			<button type="submit" class="btn btn-secondary">Cadastar</button>
	</form>
@endsection
