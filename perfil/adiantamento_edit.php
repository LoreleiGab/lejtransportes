<?php
$con = bancoMysqli();

if(isset($_POST['adicionar']) || isset($_POST['editar']))
{
	$condutor_id = $_POST['condutor_id'];
	$data = exibirDataMysql($_POST['data']);
	$valor = dinheiroDeBr($_POST['valor']);
	$anotacao = $_POST['anotacao'];
}

if(isset($_POST['adicionar']))
{
	$sql_adiciona ="INSERT INTO `adiantamentos`(`funcionario`, `valor`, `data`, `obs`) VALUES ('$condutor_id','$valor','$data','$anotacao')";
	if(mysqli_query($con,$sql_adiciona))
	{
		$mensagem = "<font color='#01DF3A'><strong>Cadastrado com sucesso!</strong></font>";
		$idAdiantamento = recuperaUltimo("adiantamentos");
	}
	else
	{
		$mensagem = "<font color='#FF0000'><strong>Erro ao cadastrar! Tente novamente.</strong></font>";
	}
}

if(isset($_POST['editar']))
{
	$idAdiantamento = $_POST['id'];
	$sql_edita = "UPDATE `adiantamentos` SET `funcionario`='$condutor_id',`valor`='$valor',`data`='$data',`obs`='$anotacao' WHERE id = '$idAdiantamento'";
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
	$idAdiantamento = $_POST['detalhes'];
}

$adiantamento = recuperaDados("adiantamentos","id",$idAdiantamento);
?>
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
						<!-- Seleciona condutor -->
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Selecione o condutor: *</strong><br/>
							<select class="form-control" name="condutor_id" required>
								<option value="0"></option>
								<?php echo geraOpcao("funcionarios",$adiantamento['funcionario']) ?>
							</select>
						</div>
					</div>
							<!-- ID -->			
					<div class="form-group">
						<div class="col-md-offset-5 col-md-2"><strong>ID:</strong><br/>
							<input type="text" class="form-control" id='id' name="id" value="<?php echo($adiantamento['id']) ?>">
						</div>
					</div>
							<!--Data -->	
					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Data: *</strong><br/>
							<input type="text" class="form-control" id="datepicker01" name="data" maxlength="20" value="<?php echo exibirDataBr($adiantamento['data']) ?>">
						</div>
						<!-- Valor -->
						<div class="col-md-6"><strong>Valor: *</strong><br/>
							<input type="text" class="form-control" id='valor' name="valor" value="<?php echo dinheiroParaBr($adiantamento['valor']) ?>">
						</div>
					</div>
						<!-- Anotações -->
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Anotações:</strong><br/>
							<textarea name="anotacao" class="form-control" rows="8"><?php echo $adiantamento['obs'] ?></textarea>
						</div>
					</div>

					<!-- Botão para Gravar -->
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<input type="hidden" name="id" value="<?php echo $idAdiantamento ?>"> 
							<input type="submit" value="GRAVAR" name="editar" class="btn btn-theme btn-lg btn-block">
						</div>
					</div>
				</form>
			</div>				
		</div>
	</div>
</section>