<!DOCTYPE html>
<html lang="pt-BR">
<head><!-- inserindo bootstrap -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
</head>
<!-- inserindo css -->
<style type="text/css">
		body{
			background-color: black;
		}
        h1{
            font-family:serif;
            font-weight: bold;
            font-style: oblique;
            text-align: center;
            color: white;
        }
</style>
<body>
<!-- inserindo a tabela estilizada com bootstrap-->
	<div class="container-fluid col-md-12 mt-5">
    <h1>Lista de clientes cadastrados</h1>                
        <table class="table table-striped table-dark">
            <thead >
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Cep</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
            </thead>
            <tbody>
                @foreach ($clientes as $u)
                    <tr scope="row">
                        <td>{{$u->nome}}</td>
                        <td>{{$u->endereco}}</td>
                        <td>{{$u->cep}}</td>
                        <td>{{$u->cidade}}</td>
                        <td>{{$u->estado}}</td>
					</tr>
                @endforeach
            </tbody>
        </table>			    
    </div>
    

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>



	
		