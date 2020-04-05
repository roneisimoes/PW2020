@extends('template') 

@section('conteudo')
<h1>Alteração de vendas do cliente</h1>
	<form method="post" action="{{ route('venda_alterar', ['id' => $venda->id]) }}">
			@csrf
			<label style="color: white;" for="id_cliente">Cliente:</label>   
					<select name="id_cliente" class="form-control">
		                    @foreach ($clientes as $key => $value) 
	                        <option value="{{ $value->id }}" @if ($value->id == $venda->id_cliente) selected @endif >#{{ $value->id }} - {{ $value->nome }}</option>
	                    @endforeach
		                </select>
			<label style="color: white;" for="valor">Valor da venda:</label>   
			<input type="text" class="form-control" name="valor" id="valor" placeholder="R$ 0,00" value="{{$venda->valor}}" required>
			<label style="color: white;" for="descricao">Descrição:</label>
			<textarea class="form-control" name="descricao">{{ $venda->descricao }}</textarea><br>
			<button type="submit" class="btn btn-secondary btn-block">Alterar</button>
	</form>
@endsection
