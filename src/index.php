<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="/css/bootstrap.css">
	
	<link rel="stylesheet" href="/css/index.css">
	<link rel="stylesheet" href="/css/menu.css">

	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.js"></script>

	<title>Teste full-stack</title>

</head>

<body>
	<div class="container-fluid">
		<?php require_once 'menu.php' ?>
		
		<div id="link-form" class="row justify-content-center align-items-center">
			<div>
				<div class="col-12">
					<h1 class="text-center">Título principal</h1>
				</div>
				<div class="col-12">
					<h4 class="text-center">Título secundário</h4>
				</div>
				<div class="col-12">
					<div class="text-center">
						<a class="btn btn-primary" href="#form">Clique aqui</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center align-items-center texto-espacador">
			<h1 class="text-center ">Titulo</h1>
		</div>

		<div class="row">
			<div class="col-sm-8 offset-2">
				<div id="slide" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="img/1.jpg" alt="1">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/2.jpg" alt="2">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/3.jpg" alt="3">
						</div>
					</div>
					<a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="carousel-control-next" href="#slide" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Próximo</span>
					</a>
				</div>
			</div>
		</div>

	</div>

</body>

</html>
