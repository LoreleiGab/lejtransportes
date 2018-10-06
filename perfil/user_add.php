<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<div class="form-group">
			<h5>Cadastro de Usuários</h5>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<h5><?php if(isset($mensagem)){echo $mensagem;};?></h5>
				<form class="form-horizontal" role="form" action="?perfil=user_edit" method="post">

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Nome: *</strong><br/>
							<input type="text" class="form-control" name="nome" placeholder="Nome completo" maxlength="120" required>
						</div>
					</div>

					<div class="form-group">
                        <div class="col-md-offset-2 col-md-6"><strong>Telefone: *</strong><br/>
                            <input type="text" class="form-control" name="telefone" id="telefone" onkeyup="mascara( this, mtel );" maxlength="15" placeholder="Exemplo: (11) 98765-4321" required>
                        </div>
						<div class="col-md-6"><strong>E-mail: *</strong><br/>
							<input type="text" class="form-control" name="email" placeholder="E-mail" maxlength="60" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Nivel de Aesso: *</strong><br/>
                            <select class="form-control" name="nivel_acesso" required>
                                <option value="1">Administrador</option>
                                <option value="2">Condutor</option>
                            </select>
						</div>
						<div class="col-md-6"><strong>Condutor relacionado:</strong><br/>
                            <select class="form-control" name="condutor_id">
                                <option value="">Selecione...</option>
                                <?php echo geraOpcao("funcionarios","") ?>
                            </select>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-offset-4 col-md-6"><strong>Senha: *</strong><br/>
							<input type="password" class="form-control" name="senha" required>
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