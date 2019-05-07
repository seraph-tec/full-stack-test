<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="/css/bootstrap.css">
	
	<link rel="stylesheet" href="/css/index.css">
	<link rel="stylesheet" href="/css/menu.css">
	<link rel="stylesheet" href="/css/form.css">

	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.js"></script>

	<title>Teste full-stack</title>

</head>

<body>
	<div class="container-fluid">
		<?php include_once 'menu.php' ?>
		
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

						<?php
							
							ini_set("allow_url_fopen", 1);

							$json = file_get_contents('https://jsonplaceholder.typicode.com/photos'); // recupera imagens
							$obj = json_decode($json); // converte json

							$num = 0; // indice do loop
							$max = 50; // número máximo de imagens

							foreach($obj as $elemento)
							{
								if ($num >= $max) break;

								?>
									<div class="carousel-item<?php if ($num == 0) echo " active";?>">
										<div class="card">
										<img class="card-img-top img-fluid" src="<?php echo $elemento->url; ?>" alt="<?php echo $elemento->title; ?>">
											<div class="card-body">
												<p class="card-text"><?php echo $elemento->title; ?></p>
											</div>
										</div>
									</div> 
								<?php

								$num++;

							}

							unset($obj); // limpa memória

						?>

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

		<?php include_once 'form.php' ?>

		<!-- Modal -->
		<?php include_once 'modal.php' ?>
	</div>
</body>

</html>
