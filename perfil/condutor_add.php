<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<div class="form-group">
			<h5>Cadastro de Condutor</h5>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<h5><?php if(isset($mensagem)){echo $mensagem;};?></h5>
				<form class="form-horizontal" role="form" action="?perfil=pf_add" method="post">

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Nome: *</strong><br/>
							<input type="text" class="form-control" name="nome" placeholder="Nome completo" maxlength="120" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-3"><strong>CNH: *</strong><br/>
							<input type="text" class="form-control" name="cnh" maxlength="20">
						</div>
						<div class="col-md-2"><strong>RG: *</strong><br/>
							<input type="text" class="form-control" name="rg" maxlength="20">
						</div>
						<div class="col-md-3"><strong>CPF: *</strong><br/>
							<input type="text" class="form-control" name="cpf" id="cpf">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Data de Nascimento *:</strong><br/>
							<input type="date" class="form-control" name="data_nascimento">
						</div>
						<div class="col-md-6"><strong>CEP *:</strong><br/>
							<input type="text" class="form-control" id="CEP" name="cep" placeholder="CEP">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Endereço:</strong><br/>
							<input type="text" class="form-control" id="endereco" name="Endereco" placeholder="Endereço">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Número *:</strong><br/>
							<input type="text" class="form-control" id="Numero" name="numero" placeholder="Numero" maxlength="10" required>
						</div>
						<div class=" col-md-6"><strong>Complemento:</strong><br/>
							<input type="text" class="form-control" id="Complemento" name="complemento" placeholder="Complemento" maxlength="120">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Bairro:</strong><br/>
							<input type="text" class="form-control" id="Bairro" name="bairro" placeholder="Bairro">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Cidade:</strong><br/>
							<input type="text" class="form-control" id="Cidade" name="cidade" placeholder="Cidade">
						</div>
						<div class="col-md-6"><strong>Estado:</strong><br/>
							<input type="text" class="form-control" id="Estado" name="estado" placeholder="Estado">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>E-mail *:</strong><br/>
							<input type="text" class="form-control" name="email" placeholder="E-mail" maxlength="60" >
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Telefone #1 *:</strong><br/>
							<input type="text" class="form-control" name="telefone1" id="telefone" onkeyup="mascara( this, mtel );" maxlength="15" placeholder="Exemplo: (11) 98765-4321">
						</div>
						<div class="col-md-6"><strong>Telefone #2:</strong><br/>
							<input type="text" class="form-control" name="telefone2" id="telefone" onkeyup="mascara( this, mtel );" maxlength="15" placeholder="Exemplo: (11) 98765-4321">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Placa:</strong><br/>
							<input type="text" class="form-control" name="placa" placeholder="Placa">
						</div>
						<div class="col-md-6"><strong>Renavam:</strong><br/>
							<input type="text" class="form-control" name="renavam" placeholder="Renavam">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Valor do Ponto:</strong><br/>
							<input type="text" class="form-control" id='valor' name="ponto">
						</div>
						<div class="col-md-6"><strong>Fixo:</strong><br/>
							<input type="text" class="form-control" id='valor' name="fixo">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Observação:</strong><br/>
							<textarea name="observacao" class="form-control" rows="6"></textarea>
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