<?php
$con = bancoMysqli();

if(isset($_POST['adicionar']) || isset($_POST['editar']))
{
	$nome = $_POST['nome'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$telefone1 = $_POST['telefone1'];
	$telefone2 = $_POST['telefone2'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	$ponto = dinheiroDeBr($_POST['ponto']);
	$forma_pagamento = $_POST['forma_pagamento'];
	$observacao = $_POST['observacao'];
}

if(isset($_POST['adicionar']))
{
	$sql_adiciona = "INSERT INTO `pf`(`nome`, `cpf`, `rg`, `cep`, `endereco`, `bairro`, `cidade`, `estado`, `numero`, `complemento`, `telefone01`, `telefone02`, `email`, `fixo`, `forma_pagamento`, `obs`) VALUES ('$nome', '$cpf', '$rg', '$cep', '$endereco', '$bairro', '$cidade', '$estado', '$numero', '$complemento', '$telefone1', '$telefone2', '$email', '$ponto', '$forma_pagamento', '$observacao')";
	if(mysqli_query($con,$sql_adiciona))
	{
		$mensagem = "<font color='#01DF3A'><strong>Cadastrado com sucesso!</strong></font>";
		$idPf = recuperaUltimo("pf");
	}
	else
	{
		$mensagem = "<font color='#FF0000'><strong>Erro ao cadastrar! Tente novamente.</strong></font>";
	}
}

if(isset($_POST['editar']))
{
	$idPf = $_POST['id'];
	$sql_edita = "UPDATE `pf` SET `nome`='$nome',`cpf`='$cpf',`rg`='$rg',`cep`='$cep',`endereco`='$endereco',`bairro`='$bairro',`cidade`='$cidade',`estado`='$estado',`numero`='$numero',`complemento`='$complemento',`telefone01`='$telefone1',`telefone02`='$telefone2',`email`='$email',`fixo`='$ponto',`forma_pagamento`='$forma_pagamento',`obs`='$observacao' WHERE id = '$idPf'";
	if(mysqli_query($con,$sql_edita))
	{
		$mensagem = "<font color='#01DF3A'><strong>Editado com sucesso!</strong></font>";
	}
	else
	{
		$mensagem = "<font color='#FF0000'><strong>Erro ao editar! Tente novamente.</strong></font>";
	}
}

if(isset($_POST['detalhes']))
{
	$idPf = $_POST['detalhes'];
}

$pf = recuperaDados("pf","id",$idPf);
?>
<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<div class="form-group">
			<h5>Cadastro de Pessoa Física</h5>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<h5><?php if(isset($mensagem)){echo $mensagem;};?></h5>
				<form class="form-horizontal" role="form" action="?perfil=pf_edit" method="post">

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Nome: *</strong><br/>
							<input type="text" class="form-control" name="nome" placeholder="Nome completo" maxlength="120" value="<?php echo $pf['nome'] ?>" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>RG:</strong><br/>
							<input type="text" class="form-control" name="rg" maxlength="20" value="<?php echo $pf['rg'] ?>">
						</div>
						<div class="col-md-6"><strong>CPF:</strong><br/>
							<input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $pf['cpf'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Telefone #1 *:</strong><br/>
							<input type="text" class="form-control" name="telefone1" id="telefone" onkeyup="mascara( this, mtel );" maxlength="15" placeholder="Exemplo: (11) 98765-4321"  value="<?php echo $pf['telefone01'] ?>" required>
						</div>
						<div class="col-md-6"><strong>Telefone #2:</strong><br/>
							<input type="text" class="form-control" name="telefone2" id="telefone" onkeyup="mascara( this, mtel );" maxlength="15" placeholder="Exemplo: (11) 98765-4321" value="<?php echo $pf['telefone02'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>E-mail:</strong><br/>
							<input type="text" class="form-control" name="email" placeholder="E-mail" maxlength="60"  value="<?php echo $pf['email'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>CEP:</strong><br/>
							<input type="text" class="form-control" id="CEP" name="cep" placeholder="CEP" value="<?php echo $pf['cep'] ?>">
						</div>
						<div class="col-md-6" align="left"><i>Clique no número do CEP e pressione a tecla Tab para carregar</i>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Endereço:</strong><br/>
							<input type="text" class="form-control" id="Endereco" name="endereco" placeholder="Endereço" value="<?php echo $pf['endereco'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Número:</strong><br/>
							<input type="text" class="form-control" id="Numero" name="numero" placeholder="Numero" maxlength="10" value="<?php echo $pf['numero'] ?>">
						</div>
						<div class=" col-md-6"><strong>Complemento:</strong><br/>
							<input type="text" class="form-control" id="Complemento" name="complemento" placeholder="Complemento" maxlength="120" value="<?php echo $pf['complemento'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Bairro:</strong><br/>
							<input type="text" class="form-control" id="Bairro" name="bairro" placeholder="Bairro" value="<?php echo $pf['bairro'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Cidade:</strong><br/>
							<input type="text" class="form-control" id="Cidade" name="cidade" placeholder="Cidade" value="<?php echo $pf['cidade'] ?>">
						</div>
						<div class="col-md-2"><strong>Estado:</strong><br/>
							<input type="text" class="form-control" id="Estado" name="estado" placeholder="Estado" value="<?php echo $pf['estado'] ?>">
						</div>
						<div class="col-md-2"><strong>Valor Ponto:</strong><br/>
							<input type="text" class="form-control" name="ponto" id='valor' maxlength="15" value="<?php echo dinheiroParaBr($pf['fixo']) ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Forma de Pagamento:</strong><br/>
							<input type="text" class="form-control" name="forma_pagamento"  maxlength="250" value="<?php echo $pf['forma_pagamento'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Observação:</strong><br/>
							<textarea name="observacao" class="form-control" rows="6"><?php echo $pf['obs'] ?></textarea>
						</div>
					</div>

					<!-- Botão para Gravar -->
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<input type="hidden" name="id" value="<?php echo $idPf ?>"> 
							<input type="submit" value="GRAVAR" name="editar" class="btn btn-theme btn-lg btn-block">
						</div>
					</div>
				</form>
			</div>				
		</div>
	</div>
</section>