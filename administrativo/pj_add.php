<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<div class="form-group">
			<h5>Cadastro de Pessoa Jurídica</h5>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<h5><?php if(isset($mensagem)){echo $mensagem;};?></h5>
				<form class="form-horizontal" role="form" action="?perfil=pj_edit" method="post">

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Razão Social: *</strong><br/>
							<input type="text" class="form-control" name="nome" placeholder="Razão Social" maxlength="120" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Nome Fantasia:</strong><br/>
							<input type="text" class="form-control" name="nome_fantasia" placeholder="Nome fantasia" maxlength="120">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>CNPJ:</strong><br/>
							<input type="text" class="form-control" id="cnpj" name="cnpj">
						</div>
						<div class="col-md-6"><strong>Inscrição:</strong><br/>
							<input type="text" class="form-control" name="inscricao" maxlength="20">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Telefone #1 *:</strong><br/>
							<input type="text" class="form-control" name="telefone1" id="telefone" onkeyup="mascara( this, mtel );" maxlength="15" placeholder="Exemplo: (11) 98765-4321" required>
						</div>
						<div class="col-md-6"><strong>Telefone #2:</strong><br/>
							<input type="text" class="form-control" name="telefone2" id="telefone" onkeyup="mascara( this, mtel );" maxlength="15" placeholder="Exemplo: (11) 98765-4321">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>E-mail:</strong><br/>
							<input type="text" class="form-control" name="email" placeholder="E-mail" maxlength="60" >
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>CEP:</strong><br/>
							<input type="text" class="form-control" id="CEP" name="cep" placeholder="CEP">
						</div>
						<div class="col-md-6" align="left"><i>Clique no número do CEP e pressione a tecla Tab para carregar</i>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Endereço:</strong><br/>
							<input type="text" class="form-control" id="Endereco" name="endereco" placeholder="Endereço">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Número:</strong><br/>
							<input type="text" class="form-control" id="Numero" name="numero" placeholder="Numero" maxlength="10">
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
						<div class="col-md-2"><strong>Estado:</strong><br/>
							<input type="text" class="form-control" id="Estado" name="estado" placeholder="Estado">
						</div>
						<div class="col-md-2"><strong>Valor Ponto:</strong><br/>
							<input type="text" class="form-control" name="ponto" id='valor' maxlength="15">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Forma de Pagamento:</strong><br/>
							<input type="text" class="form-control" name="forma_pagamento"  maxlength="250">
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