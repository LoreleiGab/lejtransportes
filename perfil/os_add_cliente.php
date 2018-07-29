<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<div class="form-group">
			<h5>Cadastro de O.S.</h5>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<form class="form-horizontal" role="form" action="?perfil=os_add" method="post">

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><label>Pessoa Física: *</label><br/>
							<select class="form-control" name="pf_id" required>
								<option value="0">Selecione...</option>
								<?php echo geraOpcao("pf","") ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><label>Pessoa Jurídica: *</label><br/>
							<select class="form-control" name="pj_id" required>
								<option value="0">Selecione...</option>
								<?php echo geraOpcao("pj","") ?>
							</select>
						</div>
					</div>

					<!-- Botão para Gravar -->
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<input type="submit" value="Prosseguir" name="adicionar" class="btn btn-theme btn-md btn-block">
						</div>
					</div>
				</form>
			</div>	
		</div>
	</div>
</section>