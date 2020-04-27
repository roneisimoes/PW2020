@extends('template') 

@section('conteudo')               
        <h2>Lista de vendas cadastradas:</h2>
        <table class="table table-striped table-dark">
            <thead >
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">Descrição</th>
                <th scope="col">Valor</th>
                <th scope="col">Operações</th>

            </thead>
            <tbody>
                @foreach ($vendas as $venda)
                    <tr>
                        <th scope="row">{{ $venda->id }}</th>
                        <td>{{ $venda->cliente->nome }}</td>
                        <td>{{ $venda->descricao }}</td>
                        <td>R$ {{$venda->valor}}</td>
                        <td>
                            <a class="btn btn-danger" href="#" onclick="exclui({{$venda->id}})">Excluir</a>
                            <a class="btn btn-warning" href="{{ route('venda_tela_alterar', [ 'id' => $venda->id ]) }}">Alterar</a>
                            <a class="btn btn-info"href="{{ route('cadastrar_venda_item', [ 'id' => $venda->id ]) }}">Produtos</a>
                        </td>
					</tr>
                @endforeach
            </tbody>
        </table>

        <a class="btn btn-primary" href="{{route('cadastrar_venda')}}"> Cadastrar nova</a>  
        <script>
            function exclui(id){
                if (confirm("Deseja excluir a venda de id: " + id + "?")){
                    location.href = "/vendas/excluir/" + id;
                }
            }
        </script>     
@endsection
