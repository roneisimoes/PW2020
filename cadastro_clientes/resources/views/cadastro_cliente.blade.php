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
        h4{
        	color: white;
        	text-align: center;
        }


</style>
<!-- inserindo formulario com bootstrap-->
<body>
    <div class="container-fluid">
        <h1>Bem vindo a nossa loja!</h1>
        <h4>Realize seu cadastro abaixo:</h4>
        <div class="form-group"> 
			<div class="col-md-6 offset-md-3">
				<form method="post" action="{{ route('cliente_novo') }}">
					@csrf
					<label style="color: white;" for="nome">Nome:</label>   
	                <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
	                <label style="color: white;" for="endereco">Endereço:</label>   
	                <input type="text" class="form-control" name="endereco" placeholder="Endereço" required>
	                <label style="color: white;" for="cep">CEP:</label>
	                <input type="number" class="form-control" name="cep" placeholder="Digite somente numeros" required>
					<label style="color: white;" for="cidade">Cidade:</label>   
	                <input type="text" class="form-control" name="cidade" placeholder="Cidade" required>
					<label style="color: white;" for="estado">Estado:</label>
					    <select class="form-control" name="estado">
					      <option>SC</option>
					      <option>PR</option>
					      <option>RS</option>
					      <option>SP</option>
					      <option>RJ</option>
					    </select><br>
					<button type="submit" class="btn btn-secondary">Cadastar</button>
				</form>
			</div>	
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>