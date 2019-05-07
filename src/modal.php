<?php
	require_once 'campos.php';
?>
<div id="modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body row justify-content-center algin-items-center" id="form">
				<div class="col-sm-4 offset-1">
					<h1>Teste teste teste</h1>
					<h2>Teste</h2>
					<h2>Teste</h2>
					<h2>Teste</h2>
				</div>
        
				<div class="col-sm-6">
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
									<input type="submit" class="btn btn-primary" data-dismiss="modal" value="Enviar">
								</div>
							</form>
						</div>
					</div>
				</div>
        
				<div class="col-sm-1"></div>
        
			</div>
		</div>
	</div>
</div>
