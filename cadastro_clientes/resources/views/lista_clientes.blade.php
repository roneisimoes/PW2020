@extends('template') 

@section('conteudo')               
        <h2>Lista de clientes cadastrados:</h2>
        <table class="table table-striped table-dark">
            <thead >
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Cep</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Login</th>
                <th scope="col">Senha</th>
                <th scope="col">Operações</th>

            </thead>
            <tbody>
                @foreach ($clientes as $c)
                    <tr scope="row">
                        <td>{{$c->nome}}</td>
                        <td>{{$c->endereco}}</td>
                        <td>{{$c->cep}}</td>
                        <td>{{$c->cidade}}</td>
                        <td>{{$c->estado}}</td>
                        <td>{{$c->login}}</td>
                        <td>{{$c->senha}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('cliente_tela_alterar', ['id' => $c->id])}}"> Alterar</a>
                            <a class="btn btn-danger" href="#" onclick="exclui({{ $c->id}})"> Excluir</a>
                        </td>
					</tr>
                @endforeach
            </tbody>
        </table>


        <a class="btn btn-primary" href="{{route('cadastrar_venda')}}"> Cadastrar nova</a>	
        <script>
            function exclui(id){
                if (confirm("Deseja excluir o usuário de id: " + id + "?")){
                    location.href = "/clientes/excluir/" + id;
                }
            }
        </script>
@endsection
	
		