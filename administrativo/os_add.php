<?php
$con = bancoMysqli();

$pf_id = $_POST['pf_id'];
$pj_id = $_POST['pj_id'];

if($pf_id > 0)
{
	$pf = recuperaDados("pf","id",$pf_id);
	$tipo_cliente = "1";
	$cliente_id = $pf['id'];
	$cliente = "<strong>Nome:</strong> ".$pf['nome'];
	$endereco = "<strong>Endereço:</strong> ".$pf['endereco'].", ".$pf['numero']." ".$pf['complemento']." - <strong>Bairro:</strong> ".$pf['bairro']." - <strong>Cidade:</strong> ".$pf['cidade']." - ".$pf['estado']." <strong>CEP:</strong> ".$pf['cep'];
	$telefones = "<strong>Telefone:</strong> ".$pf['telefone01']." | ".$pf['telefone02'];
}
else
{
	$pj = recuperaDados("pj","id",$pj_id);
	$tipo_cliente = "2";
	$cliente_id = $pj['id'];
	$cliente = "<strong>Nome Fantasia:</strong> ".$pj['nome_fantasia']. " | <strong>Razão Social:</strong> ".$pj['nome'];
	$endereco = "<strong>Endereço:</strong> ".$pj['endereco'].", ".$pj['numero']." ".$pj['complemento']." - <strong>Bairro:</strong> ".$pj['bairro']." - <strong>Cidade:</strong> ".$pj['cidade']." - ".$pj['estado']." <strong>CEP:</strong> ".$pj['cep'];
	$telefones = "<strong>Telefone:</strong> ".$pj['telefone01']." | ".$pj['telefone02'];
}

$sql_n_os = "SELECT numero_os FROM os ORDER BY numero_os DESC LIMIT 0,1";
$query_n_os = mysqli_query($con,$sql_n_os);
$campo = mysqli_fetch_array($query_n_os);
$n_os = $campo['numero_os'] + 1;
?>
<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<div class="form-group">
			<h5>Cadastro de O.S.</h5>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<form class="form-horizontal" role="form" action="?perfil=os_edit" method="post">

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8" align="left"><label>INFORMAÇÕES DO CLIENTE</label><br/>
						<?php
							echo $cliente."<br/>";
							echo $endereco."<br/>";
							echo $telefones."<br/>";
						?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><label>Solicitante: *</label><br/>
							<input type="text" class="form-control" name="solicitante" maxlength="120" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><label>Condutor: *</label><br/>
							<select class="form-control" name="condutor_id" required>
								<option value="0">Selecione...</option>
								<?php echo geraOpcao("funcionarios","") ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Data: *</strong><br/>
							<input type="text" class="form-control" id="datepicker01" name="data" maxlength="20" required>
						</div>
						<div class="col-md-6"><strong>Saída: *</strong><br/>
							<input type="text" class="form-control" id="hora" name="saida" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Anotações:</strong><br/>
							<textarea name="anotacao" class="form-control" rows="8" required></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Km serviço:</strong><br/>
							<option value="0">separar metros por "."</option>
							<input type="number" class="form-control" name="km_servico" maxlength="20">
							
						</div>
						<div class="col-md-6"><strong>Km total:</strong><br/>
							<option value="0">separar metros por "."</option>
							<input type="number" class="form-control" name="km_total">
						<br>		
						</div>
				

					<!-- Botão para Gravar -->
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<input type="hidden" name="tipo_cliente" value="<?php echo $tipo_cliente ?>">
							<input type="hidden" name="cliente_id" value="<?php echo $cliente_id ?>">
							<input type="submit" value="Gravar" name="cadastra" class="btn btn-theme btn-md btn-block">
						</div>
					</div>
				</form>
			</div>	
		</div>
	</div>
</section>