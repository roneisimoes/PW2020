<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sistema - Programaçao WEB</title>
</head>
<style type="text/css">
	body{
		background-color: black;
	}
	h1,h2, h4{
		color: white;
		font-family:candara;
        font-style:italic;
	}

</style>
<body>
	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                <a class="navbar-brand" href="#">PW-2020</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Clientes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('cliente_listar') }}">Lista de clientes</a>
                            <a class="dropdown-item" href="{{ route('cliente_cadastrar') }}">Cadastrar novo</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Vendas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('listar_vendas') }}">Lista de vendas</a>
                            <a class="dropdown-item" href="{{ route('cadastrar_venda') }}">Cadastrar nova</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produtos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('listar_produtos') }}">Lista de Produtos</a>
                            <a class="dropdown-item" href="{{ route('cadastrar_produtos') }}">Cadastrar novo produto</a>
                            <a class="dropdown-item" href="{{ route('listar_tipo_produtos') }}">Lista de tipo de produto</a>
                            <a class="dropdown-item" href="{{ route('cadastrar_tipo_produtos') }}">Cadastrar novo tipo de produto</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown" >
                            @if(session()->has('login'))
                                <a class="nav-link " href="{{ route('logout') }}">Fazer Logout</a>
                            @else 
                                <a class="nav-link " href="{{ route('tela_login') }}">Fazer Login</a>
                            @endif
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
		</div>
		<div class="row">
			<div class="col-md-2"></div><!-- coluna esquerda -->
			<div class="col-md-8 mt-5">
				@yield('conteudo')
			</div>
			<div class="col-md-2"></div><!-- coluna direita-->
		</div>
		
	</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>