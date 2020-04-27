@extends('template')

@section('conteudo')
<h1>Cadastro de itens de Venda #{{ $venda->id }}</h1>
	<form method="post" action="{{ route('cadastrar_venda_item_novo', ['id' => $venda->id]) }}">
			@csrf
            <label style="color: white;" for="id_produto">Produto:</label>
            <select name="id_produto" class="form-control">
                @foreach ($produtos as $key => $value) 
                    <option value="{{ $value->id }}">#{{ $value->id }} - {{ $value->nome }}</option>
                @endforeach
            </select>
	   		<label style="color: white;" for="quantidade">Quantidade:</label>
	        <input class="form-control" name="quantidade" type="number" min="0" step="0.01" required><br>
	       	<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
	      
    </form>

    <h4 class="mt-4">Itens adicionados até o momento</h4>
    	<table class="table table-light">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Preço Unitário</th>
            <th scope="col">Subtotal</th>
            <th scope="col">Adicionado Em</th>
            <th scope="col">Operações</th>
            </tr>
        </thead>
        <tbody>
        	@foreach ($venda->produtos as $p) 
                <tr>
                    <th scope="row">{{ $p->id }}</th>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->pivot->quantidade }}</td>
                    <td>{{$p->valor_unitario}}</td>
                    <td>{{$p->pivot->subtotal}}</td>
                    <td>{{$p->pivot->created_at}}</td>
                    <td>
                        <a href="#" class="btn btn-danger" onclick="exclui({{
						$p->pivot->id }})">Remover</a>
                    </td>
                </tr>
            @endforeach
                <tr style='background-color:white;'>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td><b>Total:<b></td>
                    <td><b>{{$venda->valor}}</b></td>
                    <td></td>
                    <td></td>
                </tr>
        </tbody>        
        </table>

     <a class="btn btn-primary btn-block" href="{{ route('listar_vendas') }}">Concluir Venda</a>

<script>
	function exclui(id){
		if (confirm("Deseja excluir o item de id: " + id + "?")){
			location.href = "/vendas/excluir/{{ $venda->id }}/item/" + id;
		}
	}
</script>

@endsection