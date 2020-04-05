@extends('template') 

@section('conteudo')
<h1>Bem vindo a nossa loja!</h1>
<h4>Realize seu cadastro abaixo:</h4>
	<form method="post" action="{{ route('cliente_novo') }}">
			@csrf
			<label style="color: white;" for="nome">Nome:</label>   
			<input type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
			<label style="color: white;" for="endereco">Endereço:</label>   
			<input type="text" class="form-control" name="endereco" placeholder="Endereço" required>
			<label style="color: white;" for="cep">CEP:</label>
			<input type="number" class="form-control" name="cep" placeholder="Digite somente numeros" required>
			<label style="color: white;" for="cidade">Cidade:</label>   
			<input type="text" class="form-control" name="cidade" placeholder="Cidade" required>
			<label style="color: white;" for="estado">Estado:</label>
			<select class="form-control" name="estado">
				<option>SC</option>
				<option>PR</option>
				<option>RS</option>
				<option>SP</option>
				<option>RJ</option>
			</select><br>
			<button type="submit" class="btn btn-secondary">Cadastar</button>
	</form>
@endsection
