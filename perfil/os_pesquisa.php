<?php
unset($_SESSION['condutor_id']);
unset($_SESSION['data_inicio']);
unset($_SESSION['data_fim']);
unset($_SESSION['status_id']);
?>
<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<div class="form-group">
			<h4>Pesquisar Por O.S.</h4>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<form method="POST" action="?perfil=os_pesquisa_resultado" class="form-horizontal" role="form">
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><label>Condutor:</label><br/>
							<select class="form-control" name="condutor_id">
								<option value="0">Selecione...</option>
								<?php echo geraOpcao("funcionarios","") ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><label>O.S. De</label>
							<input type="text" name="data_inicio" id="datepicker01" class="form-control" placeholder="De">
						</div>
						<div class="col-md-6"><label>O.S. Até</label>
							<input type="text" name="data_fim" id="datepicker02" class="form-control" placeholder="Até">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><label>Status da O.S.:</label><br/>
							<select class="form-control" name="status_id">
								<option value="1">Abertas</option>
								<option value="2">Fechadas</option>
								<option value="0">Canceladas</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<input type="submit" class="btn btn-theme btn-lg btn-block" value="Pesquisar">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>