@extends('template')

@section('conteudo')
 <h2>Lista de tipos de produtos cadastrados:</h2>
	<table class="table table-striped table-dark">
           <thead >
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Operações</th>

            </thead>
            <tbody>
                @foreach ($lista as $tp) 
                <tr>
                    <th scope="row">{{ $tp->id }}</th>
                    <td>{{ $tp->nome }}</td>
                    <td>{{ $tp->descricao }}</td>
                    <td>
                        <a class="btn btn-danger" href="#" onclick="exclui({{$tp->id}})">Excluir</a>   
                        <a class="btn btn-warning" href="{{ route('alterar_tipo_produtos', [ 'id' => $tp->id ]) }}">Alterar</a>
                    </td>
                </tr>
            @endforeach
             
        </tbody>
    </table>

    <script>
            function exclui(id){
                if (confirm("Deseja excluir o tipo de produto de id: " + id + "?")){
                    location.href = "/produtos/tipo/excluir/" + id;
                }
            }
    </script> 


@endsection