<?php
$con = bancoMysqli();

if(isset($_POST['adicionar']) || isset($_POST['editar']))
{
	$nome = $_POST['nome'];
	$cnh = $_POST['cnh'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$data_nascimento = exibirDataMysql($_POST['data_nascimento']);
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	$email = $_POST['email'];
	$telefone1 = $_POST['telefone1'];
	$telefone2 = $_POST['telefone2'];
	$placa = $_POST['placa'];
	$renavam = $_POST['renavam'];	
	$ponto = dinheiroDeBr($_POST['ponto']);
	$fixo = dinheiroDeBr($_POST['fixo']);
	$observacao = $_POST['observacao'];
}

if(isset($_POST['adicionar']))
{
	$sql_adiciona = "INSERT INTO `funcionarios`(`nome`, `cpf`, `rg`, `cnh`, `data_nascimento`, `cep`, `endereco`, `bairro`, `cidade`, `estado`, `numero`, `complemento`, `telefone01`, `telefone02`, `email`, `placa`, `renavam`, `fixo`, `ponto`, `obs`) VALUES ('$nome','$cpf','$rg','$cnh','$data_nascimento','$cep','$endereco','$bairro','$cidade','$estado','$numero','$complemento','$telefone1','$telefone2','$email','$placa','$renavam','$ponto','$fixo','$observacao')";
	if(mysqli_query($con,$sql_adiciona))
	{
		$mensagem = "<font color='#01DF3A'><strong>Cadastrado com sucesso!</strong></font>";
		$idCondutor = recuperaUltimo("funcionarios");
	}
	else
	{
		$mensagem = "<font color='#FF0000'><strong>Erro ao cadastrar! Tente novamente.</strong></font>";
	}
}

if(isset($_POST['editar']))
{
	$idCondutor = $_POST['id'];
	$sql_edita = "UPDATE `funcionarios` SET `nome`='$nome',`cpf`='$cpf',`rg`='$rg',`cnh`='$cnh',`data_nascimento`='$data_nascimento',`cep`='$cep',`endereco`='$endereco',`bairro`='$bairro',`cidade`='$cidade',`estado`='$estado',`numero`='$numero',`complemento`='$complemento',`telefone01`='$telefone1',`telefone02`='$telefone2',`email`='$email',`placa`='$placa',`renavam`='$renavam',`fixo`='$fixo',`ponto`='$ponto',`obs`='$observacao' WHERE id = '$idCondutor'";
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
	$idCondutor = $_POST['detalhes'];
}

$condutor = recuperaDados("funcionarios","id",$idCondutor);
?>
<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<div class="form-group">
			<h5>Cadastro de Condutor</h5>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<h5><?php if(isset($mensagem)){echo $mensagem;};?></h5>
				<form class="form-horizontal" role="form" action="?perfil=condutor_edit" method="post">

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Nome: *</strong><br/>
							<input type="text" class="form-control" name="nome" placeholder="Nome completo" maxlength="120" value="<?php echo $condutor['nome'] ?>" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-3"><strong>CNH:</strong><br/>
							<input type="text" class="form-control" name="cnh" maxlength="20" value="<?php echo $condutor['cnh'] ?>">
						</div>
						<div class="col-md-2"><strong>RG:</strong><br/>
							<input type="text" class="form-control" name="rg" maxlength="20" value="<?php echo $condutor['rg'] ?>">
						</div>
						<div class="col-md-3"><strong>CPF:</strong><br/>
							<input type="text" class="form-control" name="cpf" id="cpf" value="<?php echo $condutor['cpf'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Data de Nascimento:</strong><br/>
							<input type="text" class="form-control" id="datepicker01" name="data_nascimento" value="<?php echo exibirDataBr($condutor['data_nascimento']) ?>">
						</div>
						<div class="col-md-6"><strong>CEP:</strong><br/>
							<input type="text" class="form-control" id="CEP" name="cep" placeholder="CEP" value="<?php echo $condutor['cep'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Endereço:</strong><br/>
							<input type="text" class="form-control" id="Endereco" name="endereco" placeholder="Endereço" value="<?php echo $condutor['endereco'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Número:</strong><br/>
							<input type="text" class="form-control" id="Numero" name="numero" placeholder="Numero" maxlength="10" value="<?php echo $condutor['numero'] ?>">
						</div>
						<div class=" col-md-6"><strong>Complemento:</strong><br/>
							<input type="text" class="form-control" id="Complemento" name="complemento" placeholder="Complemento" maxlength="120" value="<?php echo $condutor['complemento'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Bairro:</strong><br/>
							<input type="text" class="form-control" id="Bairro" name="bairro" placeholder="Bairro" value="<?php echo $condutor['bairro'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Cidade:</strong><br/>
							<input type="text" class="form-control" id="Cidade" name="cidade" placeholder="Cidade" value="<?php echo $condutor['cidade'] ?>">
						</div>
						<div class="col-md-6"><strong>Estado:</strong><br/>
							<input type="text" class="form-control" id="Estado" name="estado" placeholder="Estado" value="<?php echo $condutor['estado'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>E-mail:</strong><br/>
							<input type="text" class="form-control" name="email" placeholder="E-mail" maxlength="60"  value="<?php echo $condutor['email'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Telefone #1 *:</strong><br/>
							<input type="text" class="form-control" name="telefone1" id="telefone" onkeyup="mascara( this, mtel );" maxlength="15" placeholder="Exemplo: (11) 98765-4321"  value="<?php echo $condutor['telefone01'] ?>" required>
						</div>
						<div class="col-md-6"><strong>Telefone #2:</strong><br/>
							<input type="text" class="form-control" name="telefone2" id="telefone" onkeyup="mascara( this, mtel );" maxlength="15" placeholder="Exemplo: (11) 98765-4321" value="<?php echo $condutor['telefone02'] ?>">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Placa:</strong><br/>
							<input type="text" class="form-control" name="placa" placeholder="Placa" value="<?php echo $condutor['placa'] ?>">
						</div>
						<div class="col-md-6"><strong>Renavam:</strong><br/>
							<input type="text" class="form-control" name="renavam" placeholder="Renavam" value="<?php echo $condutor['renavam'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Valor do Ponto:</strong><br/>
							<input type="text" class="form-control" id='valor' name="ponto" value="<?php echo dinheiroParaBr($condutor['ponto']) ?>">
						</div>
						<div class="col-md-6"><strong>Fixo:</strong><br/>
							<input type="text" class="form-control" id='valor01' name="fixo" value="<?php echo dinheiroParaBr($condutor['fixo']) ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Observação:</strong><br/>
							<textarea name="observacao" class="form-control" rows="6"><?php echo $condutor['obs'] ?></textarea>
						</div>
					</div>

					<!-- Botão para Gravar -->
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<input type="hidden" name="id" value="<?php echo $idCondutor ?>"> 
							<input type="submit" value="GRAVAR" name="editar" class="btn btn-theme btn-lg btn-block">
						</div>
					</div>
				</form>
			</div>				
		</div>
	</div>
</section>