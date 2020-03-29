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
        h1, h2{
            font-family:serif;
            font-weight: bold;
            font-style: oblique;
            text-align: center;
            color: white;
        }
</style>
<!-- inserindo as divs estilizadas com bootstrap e a mensagem em PHP-->
<body>
    <div class="container-fluid col-md-6 mt-5">
       <div class="media-body">
            <h1 class="mt-0">ATENÇÃO</h1>
            <h2>{{$msg}}</h2>
       </div>       
   </div>    

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>