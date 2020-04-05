@extends('template')

@section('conteudo')
<h4>Cadastre a venda abaixo:</h4>
	<form method="post" action="{{ route('cadastrar_venda_nova') }}">
			@csrf
			<label style="color: white;" for="id_cliente">Cliente:</label>   
			<select name="id_cliente" class="form-control">
                    @foreach ($clientes as $key => $value) 
                        <option value="{{ $value->id }}">#{{ $value->id }} - {{ $value->nome }}</option>
                    @endforeach
                </select>
			<label style="color: white;" for="valor">Valor da venda:</label>   
			<input type="text" class="form-control" name="valor" id="valor" placeholder="R$ 0,00" required>
			<label style="color: white;" for="descricao">Descrição:</label>
			<textarea class="form-control" name="descricao"></textarea><br>
			<button type="submit" class="btn btn-secondary btn-block">Cadastar</button>
	</form>



@endsection