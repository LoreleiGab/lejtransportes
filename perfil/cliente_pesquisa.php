<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<div class="form-group">
			<h4>Pesquisar Por Cliente</h4>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<form method="POST" action="?perfil=cliente_pesquisa_resultado" class="form-horizontal" role="form">
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><label>Pessoa Física:</label><br/>
							<select class="form-control" name="pf_id" required>
								<option value="0">Selecione...</option>
								<?php echo geraOpcao("pf","") ?>
							</select>
						</div>
					</div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8"><label>Pessoa Jurídica:</label><br/>
                            <select class="form-control" name="pj_id" required>
                                <option value="0">Selecione...</option>
                                <?php echo geraOpcao("pj","") ?>
                            </select>
                        </div>
                    </div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><label>De</label>
							<input type="text" name="data_inicio" id="datepicker01" class="form-control" required>
						</div>
						<div class="col-md-6"><label>Até</label>
							<input type="text" name="data_fim" id="datepicker02" class="form-control" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<input type="submit" name="porcondutor" class="btn btn-theme btn-lg btn-block" value="Pesquisar">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>