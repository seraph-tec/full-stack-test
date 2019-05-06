<?php
	require_once 'campos.php';
?>
<div class="container-fluid">
	<div class="row form-fora justify-content-center algin-items-center">
		<div class="col-sm-2 offset-2">
			<h1>Teste teste teste</h1>
			<h2>Teste</h2>
			<h2>Teste</h2>
			<h2>Teste</h2>
		</div>

		<div class="col-sm-5 offset-sm-1 col-xs-6">
			<div class="row">
				<div class="col-sm-12">
					<form action="post.php" class="form-dentro" method="post">
						<?php
                    
							foreach ( $campos as $chave => $campo )
							{
								?>
									<div class="form-group">
										<input type="text" class="form-control" name="<?php echo $chave; ?>" placeholder="<?php echo $campo; ?>">
									</div>
								<?php
							}
                    
						?>
                    
						<div class="text-center">	
							<input type="submit" class="btn btn-primary" value="Enviar">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="col-sm-2"></div>

	</div>
</div>
