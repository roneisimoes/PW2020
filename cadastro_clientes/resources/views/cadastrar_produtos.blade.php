@extends('template')

@section('conteudo')
<h1>Cadastro de produtos</h1>
<h4>Realize o cadastro do produto abaixo:</h4>
	<form method="post" action="{{ route('cadastrar_produtos_novo') }}">
		@csrf
		<label style="color: white;" for="nome">Nome:</label>
		<input type="text" name="nome" class="form-control" maxlength="100" placeholder="Nome" required>
		<label style="color: white;" for="id_tipo_produtos">Tipo de Produto:</label>
		<select name="id_tipo_produtos" class="form-control">
                    @foreach ($tp as $key => $value) 
                        <option value="{{ $value->id }}">#{{ $value->id }} - {{ $value->nome }}</option>
                    @endforeach
        </select>
        <label style="color: white;" for="valor_unitario" >Valor Unitário:</label>
        <input type="text" name="valor_unitario" id="valor_unitario" class="form-control" maxlength="255" placeholder="R$ 0,00" required><br>
        <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>

    </form>

@endsection