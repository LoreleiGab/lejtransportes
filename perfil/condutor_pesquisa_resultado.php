<?php
$con = bancoMysqli();

$condutor_id = $_POST['condutor_id'];
$data_inicio = exibirDataMysql($_POST['data_inicio']);
$data_fim = exibirDataMysql($_POST['data_fim']);

$sql = "SELECT * FROM `os` WHERE `condutor` = '$condutor_id' AND `data` BETWEEN '$data_inicio' AND '$data_fim' AND `publicado` = 1";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);
if($num > 0)
{
	$i = 0;
	$soma_s = 0;
	while($lista = mysqli_fetch_array($query))
	{
		$x[$i]['id'] = $lista['id'];
		$x[$i]['numero_os'] = $lista['numero_os'];
		if($lista['pessoa'] == 1)
		{
			$pf = recuperaDados("pf","id",$lista['cliente']);
			$x[$i]['cliente'] = $pf['nome'];
		}
		else
		{
			$pj = recuperaDados("pj","id",$lista['cliente']);
			$x[$i]['cliente'] = $pj['nome'];
		}
		$x[$i]['valor_condutor'] = dinheiroParaBr($lista['valor_condutor']);
		$x[$i]['data'] = exibirDataBr($lista['data']);
		$soma_s += $lista['valor_condutor'];
		$i++;
	}
	$x['num'] = $i;
}
else
{
	$soma_s = 0;
	$x['num'] = 0;
}

$sql_adiantamentos = "SELECT * FROM `adiantamentos` WHERE funcionario = '$condutor_id' AND `data` BETWEEN '$data_inicio' AND '$data_fim'";
$query_adiantamentos = mysqli_query($con,$sql_adiantamentos);
$num_adiantamentos = mysqli_num_rows($query_adiantamentos);
if($num_adiantamentos > 0)
{
	$i = 0;
	$soma_a = 0;
	while($adt = mysqli_fetch_array($query_adiantamentos))
	{
		$x[$i]['id'] = $adt['id'];
		$x[$i]['valor'] = dinheiroParaBr($adt['valor']);
		$x[$i]['data'] = exibirDataBr($adt['data']);
		$soma_a += $adt['valor'];	
		$i++;
	}
	$x['numA'] = $i;
}
else
{
	$soma_a = 0;
	$x['numA'] = 0;
}

?>
<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<div class="form-group">
			<h4>Relatório Por Condutor</h4>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="form-group" align="left">
					<h5>Serviços</h5>
				</div>
				<div class="table-responsive list_info">
					<table class='table table-condensed'>
						<thead>
							<tr class='list_menu'>
								<td>O.S.</td>
								<td>Cliente</td>
								<td>Valor condutor</td>
								<td>Data</td>
							</tr>
						</thead>
						<tbody>
							<?php
							for($h = 0; $h < $x['num']; $h++)
							{
								echo "<tr>";
								echo "<td class='list_description'>".$x[$h]['numero_os']."</td>";
								echo "<td class='list_description'>".$x[$h]['cliente']."</td>";
								echo "<td class='list_description'>".$x[$h]['valor_condutor']."</td>";
								echo "<td class='list_description'>".$x[$h]['data']."</td>";
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
				</div>

				<div class="form-group" align="left">
					<h5>Adiantamentos</h5>
				</div>
				<div class="table-responsive list_info">
					<table class='table table-condensed'>
						<thead>
							<tr class='list_menu'>
								<td>ID</td>
								<td>Valor</td>
								<td>Data</td>
							</tr>
						</thead>
						<tbody>
							<?php
							for($h = 0; $h < $x['numA']; $h++)
							{
								echo "<tr>";
								echo "<td class='list_description'>".$x[$h]['id']."</td>";
								echo "<td class='list_description'>".$x[$h]['valor']."</td>";
								echo "<td class='list_description'>".$x[$h]['data']."</td>";
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
				</div>

				<div class="form-group" align="left">
					<?php 
						$total = $soma_s - $soma_a;
						echo "Do dia ".exibirDataBr($data_inicio)." e ".exibirDataBr($data_fim)." há um total de <strong>R$ ". dinheiroParaBr($soma_s)."</strong> em serviços e <strong>R$ ". dinheiroParaBr($soma_a)."</strong> em adiantamentos, totalizando: <strong>R$ ". dinheiroParaBr($total)."</strong>"; 
					?>
				</div>

				<form method="POST" action="../pdf/condutor_pdf.php" class="form-horizontal" role="form">
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<input type="hidden" name="$condutor_id" value="<?php echo $condutor_id ?>">
							<input type="hidden" name="data_inicio" value="<?php echo $data_inicio ?>">
							<input type="hidden" name="data_fim" value="<?php echo $data_fim ?>">
							<input type="submit" class="'btn btn-theme btn-lg btn-block" style='border-radius: 10px;' value="Gerar Relatório">
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>