@extends('template') 

@section('conteudo')
	<h1>Faça seu login abaixo:</h1>
	<form method="post" action="{{ route('login') }}">
		@csrf
		<label style="color: white;" for="login">Login:</label>
		<input type="text" class="form-control" maxlength="255" name="login" placeholder="Login" required>
		<label style="color: white;" for="senha">Senha:</label>
		<input type="password" class="form-control" maxlength="100" name="senha" placeholder="Senha" required><br>
		<button type="submit" class="btn btn-secondary">Logar</button>
	</form>



@endsection