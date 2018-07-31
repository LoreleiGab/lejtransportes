<?php
$con = bancoMysqli();

// recupera os dados do cliente
$tipo_cliente = $_POST['tipo_cliente'];
$cliente_id = $_POST['cliente_id'];

// gera o número da ordem de serviço
$sql_n_os = "SELECT numero_os FROM os ORDER BY numero_os DESC LIMIT 0,1";
$query_n_os = mysqli_query($con,$sql_n_os);
$campo = mysqli_fetch_array($query_n_os);
$n_os = $campo['numero_os'] + 1;

// grava os dados para a ordem de serviço
if(isset($_POST['cadastra']) || isset($_POST['edita']))
{
	$solicitante = $_POST['solicitante'];
	$condutor_id = $_POST['condutor_id'];
	$data = $_POST['data'];
	$saida = $_POST['saida'];
	$anotacao = $_POST['anotacao'];
	$km_servico = $_POST['km_servico'];
	$km_total = $_POST['km_total'];
	$valor_cliente = $_POST['valor_cliente'];
	$valor_condutor = $_POST['valor_condutor'];
}

if(isset($_POST['cadastra']))
{
	$sql_cadastra = "INSERT INTO os (`pessoa`, `cliente`, `condutor`, `solicitante`, `valor_cliente`, `valor_condutor`, `data`, `saida`, `km_servico`, `km_total`, `obs`, `publicado`) VALUES ('$tipo_cliente','$cliente_id','$condutor_id','$solicitante','$valor_cliente','$valor_condutor','$data','$saida','$km_servico','$km_total','$anotacao','1')";
	if(mysqli_query($con,$sql_cadastra))
	{
		$mensagem = "<font color='#01DF3A'><strong>Cadastrado com sucesso!</strong></font>";
		$sql_ultimo = "SELECT id FROM os ORDER BY id DESC LIMIT 0,1";
		$query_ultimo = mysqli_query($con,$sql_ultimo);
		$ultimo = mysqli_fetch_array($query_ultimo);
		$idOs = $ultimo['id'];
	}
	else
	{
		$mensagem = "<font color='#FF0000'><strong>Erro ao cadastrar! Tente novamente.</strong></font>";
	}
}

if(isset($_POST['edita']))
{
	$idOs = $_POST['id'];
	$sql_edita = "UPDATE `os` SET `pessoa`='$tipo_cliente',`cliente`='$cliente_id',`condutor`='$condutor_id',`solicitante`='$solicitante',`valor_cliente`='$valor_cliente',`valor_condutor`='$valor_condutor',`data`='$data',`saida`='$saida',`km_servico`='$km_servico',`km_total`='$km_total',`obs`='$anotacao' WHERE id = $idOs";
	if(mysqli_query($con,$sql_edita))
	{
		$mensagem = "<font color='#01DF3A'><strong>Atualizado com sucesso!</strong></font>";
	}
	else
	{
		$mensagem = "<font color='#FF0000'><strong>Erro ao atualizar! Tente novamente.</strong></font>";
	}
}

if(isset($_POST['novo_numero']))
{
	$idOs = $_POST['id'];
	$numero_os = $_POST['numero_os'];
	$sql_gera_os = "UPDATE `os` SET `numero_os`='$numero_os' WHERE id = '$idOs'";
	if(mysqli_query($con,$sql_gera_os))
	{
		$mensagem = "<font color='#01DF3A'><strong>O.S. nº ".$numero_os." gravado com sucesso!</strong></font>";
	}
	else
	{
		$mensagem = "<font color='#FF0000'><strong>Erro ao gravar O.S.! Tente novamente.</strong></font>";
	}
}

$os = recuperaDados("os","id",$idOs);
?>
<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<div class="form-group">
			<h5>Edição da O.S. <?php if($os['numero_os'] > 0) echo $os['numero_os'] ?></h5>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<form class="form-horizontal" role="form" action="?perfil=os_edit" method="post">

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8" align="left"><label>INFORMAÇÕES DO CLIENTE</label><br/>
							<?php echo recupera_cliente($tipo_cliente,$cliente_id); ?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><label>Solicitante: *</label><br/>
							<input type="text" class="form-control" name="solicitante" maxlength="120" value = "<?php echo $os['solicitante'] ?>" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><label>Condutor: *</label><br/>
							<select class="form-control" name="condutor_id" required>
								<option value="0">Selecione...</option>
								<?php echo geraOpcao("funcionarios",$os['condutor']) ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Data: *</strong><br/>
							<input type="date" class="form-control" name="data" maxlength="20" value = "<?php echo $os['data'] ?>">
						</div>
						<div class="col-md-6"><strong>Saída: *</strong><br/>
							<input type="text" class="form-control" name="saida" value = "<?php echo $os['saida'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Anotações:</strong><br/>
							<textarea name="anotacao" class="form-control" rows="8"><?php echo $os['obs'] ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Km serviço: *</strong><br/>
							<input type="text" class="form-control" name="km_servico" maxlength="20" value = "<?php echo $os['km_servico'] ?>">
						</div>
						<div class="col-md-6"><strong>Km total: *</strong><br/>
							<input type="text" class="form-control" name="km_total" value = "<?php echo $os['km_total'] ?>">
						</div>
					</div>					

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Valor Cliente: *</strong><br/>
							<input type="text" class="form-control" name="valor_cliente" id='valor' value = "<?php echo $os['valor_cliente'] ?>">
						</div>
						<div class="col-md-6"><strong>Valor Condutor: *</strong><br/>
							<input type="text" class="form-control" name="valor_condutor" id='valor' value = "<?php echo $os['valor_condutor'] ?>">
						</div>
					</div>

					<!-- Botão para Gravar -->
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<input type="hidden" name="tipo_cliente" value="<?php echo $tipo_cliente ?>">
							<input type="hidden" name="cliente_id" value="<?php echo $cliente_id ?>">
							<input type="hidden" name="id" value="<?php echo $os['id'] ?>">
							<input type="submit" value="Gravar" name="edita" class="btn btn-theme btn-md btn-block">
						</div>
					</div>
				</form>

				<div class="form-group">
					<div class="col-md-offset-2 col-md-8"><hr/></div>
				</div>
				
				<!-- Gerar Número de O.S. -->
				<form class="form-horizontal" role="form" action="?perfil=os_edit" method="post">
					<div class="form-group">
						<div class="col-md-offset-2 col-md-3"><strong>Nº O.S. Atual: *</strong><br/>
							<input type="text" class="form-control" readonly value="<?php echo $os['numero_os'] ?>">
						</div>
						<div class="col-md-3"><strong>Sugestão Nº O.S.: *</strong><br/>
							<input type="text" class="form-control" name="numero_os" maxlength="20" value="<?php echo $n_os ?>">
						</div>
						<div class="col-md-2"><br/>
							<input type="hidden" name="tipo_cliente" value="<?php echo $tipo_cliente ?>">
							<input type="hidden" name="cliente_id" value="<?php echo $cliente_id ?>">
							<input type="hidden" name="id" value="<?php echo $os['id'] ?>">
							<input type="submit" value="Atualizar Nº" name="novo_numero" class="btn btn-theme btn-md btn-block">
						</div>
					</div>
				</form>

				<?php if($os['numero_os'] > 0) {?>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><hr/></div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-5 col-md-2">
							<a href='../pdf/os_pdf.php?n_os=<?php echo $os['numero_os'] ?>' target='_blank' class="'btn btn-theme btn-lg btn-block" style='border-radius: 10px;'><strong>Gerar O.S.</strong></a>
						</div>
					</div>
				<?php }?>

			</div>	
		</div>
	</div>
</section>