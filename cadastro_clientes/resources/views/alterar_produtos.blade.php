@extends('template')

@section('conteudo')
<h1>Cadastro de produtos</h1>
<h4>Realize a alteração do produto abaixo:</h4>
	<form method="post" action="{{ route('alterar_produtos_novo', ['id' => $p->id]) }}">
		@csrf
		<label style="color: white;" for="nome">Nome:</label>
		<input type="text" name="nome" class="form-control" maxlength="100" placeholder="Nome" value="{{ $p->nome }}" required>
		<label style="color: white;" for="id_tipo_produtos">Tipo de Produto:</label>
		<select name="id_tipo_produtos" class="form-control">
                    @foreach ($tp as $key => $value) 
                         <option value="{{ $value->id }}" @if ($value->id == $p->id_tipo_produtos) selected @endif>#{{ $value->id }} - {{ $value->nome }}</option>
                    @endforeach
        </select>
        <label style="color: white;" for="valor_unitario" >Valor Unitário:</label>
        <input type="text" name="valor_unitario" id="valor_unitario" class="form-control" maxlength="255" value="{{$p->valor_unitario}}" placeholder="R$ 0,00" required><br>
        <button type="submit" class="btn btn-primary btn-block">Alterar</button>

    </form>

@endsection