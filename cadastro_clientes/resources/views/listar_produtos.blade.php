@extends('template')

@section('conteudo')
 <h2>Lista de produtos cadastrados:</h2>
	<table class="table table-striped table-dark">
           <thead >
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Tipo De Produto</th>
                <th scope="col">Valor Unitário</th>
                <th scope="col">Operações</th>

            </thead>
            <tbody>
                @foreach ($lista as $p) 
                <tr>
                    <th scope="row">{{ $p->id }}</th>
                    <td>{{ $p->nome }}</td>
                    <td>#{{ $p->tipo->id  }} - {{ $p->tipo->nome }}</td>
                    <td>{{$p->valor_unitario}}</td>
                    <td>
                        <a class="btn btn-danger" href="#" onclick="exclui({{$p->id}})">Excluir</a>   
                        <a class="btn btn-warning" href="{{ route('alterar_produtos', [ 'id' => $p->id ]) }}">Alterar</a>
                    </td>
                </tr>
            @endforeach
             
        </tbody>
    </table>

    <script>
            function exclui(id){
                if (confirm("Deseja excluir o produto de id: " + id + "?")){
                    location.href = "/produtos/excluir/" + id;
                }
            }
    </script> 


@endsection