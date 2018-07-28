<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<div class="form-group">
			<h5>Cadastro de Adiantamento</h5>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<h5><?php if(isset($mensagem)){echo $mensagem;};?></h5>
				<form class="form-horizontal" role="form" action="?perfil=adiantamento_edit" method="post">

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Selecione o condutor: *</strong><br/>
							<select class="form-control" name="condutor_id" required>
								<option value="0"></option>
								<?php echo geraOpcao("funcionarios","") ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Data: *</strong><br/>
							<input type="date" class="form-control" name="data" maxlength="20">
						</div>
						<div class="col-md-6"><strong>Valor: *</strong><br/>
							<input type="text" class="form-control" name="valor">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Anotações:</strong><br/>
							<textarea name="anotacao" class="form-control" rows="8"></textarea>
						</div>
					</div>

					<!-- Botão para Gravar -->
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<input type="submit" value="GRAVAR" name="adicionar" class="btn btn-theme btn-lg btn-block">
						</div>
					</div>
				</form>
			</div>				
		</div>
	</div>
</section>