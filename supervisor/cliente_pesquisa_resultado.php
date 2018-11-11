<?php
$con = bancoMysqli();

$pf_id = $_POST['pf_id'];
$pj_id = $_POST['pj_id'];
$data_inicio = exibirDataMysql($_POST['data_inicio']);
$data_fim = exibirDataMysql($_POST['data_fim']);

if($pf_id > 0)
{
    $sql = "SELECT * FROM `os` WHERE pessoa = 1 AND cliente = '$pf_id'  AND `data` BETWEEN '$data_inicio' AND '$data_fim' AND `publicado` = 1 AND numero_os > 0";
    $query = mysqli_query($con,$sql);
    $num = mysqli_num_rows($query);
}
else
{
    $sql = "SELECT * FROM `os` WHERE pessoa = 2 AND cliente = '$pj_id'  AND `data` BETWEEN '$data_inicio' AND '$data_fim' AND `publicado` = 1 AND numero_os > 0";
    $query = mysqli_query($con,$sql);
    $num = mysqli_num_rows($query);
}
$i = 0;
$soma_s = 0;
$x['num'] = 0;
while($lista = mysqli_fetch_array($query))
{
    $condutor = recuperaDados("funcionarios","id",$lista['condutor']);
    $x[$i]['id'] = $lista['id'];
    $x[$i]['numero_os'] = $lista['numero_os'];
    $x[$i]['nome_condutor'] = $condutor['nome'];
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
    $x[$i]['valor_cliente'] = dinheiroParaBr($lista['valor_cliente']);
    $x[$i]['data'] = exibirDataBr($lista['data']);
    $soma_s += $lista['valor_cliente'];
    $i++;
}
$x['num'] = $i;
?>
<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<div class="form-group">
			<h4>Relatório Por Cliente</h4>
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
								<td>Valor cliente</td>
								<td>Data</td>
							</tr>
						</thead>
						<tbody>
							<?php
							for($h = 0; $h < $x['num']; $h++)
							{
								echo "<tr>";
								echo "<td class='list_description'>".$x[$h]['numero_os']."</td>";
								echo "<td class='list_description'>".$x[$h]['nome_condutor']."</td>";
								echo "<td class='list_description'>".$x[$h]['valor_cliente']."</td>";
								echo "<td class='list_description'>".$x[$h]['data']."</td>";
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
				</div>

				<div class="form-group" align="left">
					<?php
						echo "Do dia ".exibirDataBr($data_inicio)." e ".exibirDataBr($data_fim)." há um total de <strong>R$ ". dinheiroParaBr($soma_s)."</strong> em serviços.</strong>";
					?>
				</div>

				<form method="POST" target="_blank" action="../pdf/cliente_pdf.php" class="form-horizontal" role="form">
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<input type="hidden" name="pf_id" value="<?php echo $pf_id ?>">
                            <input type="hidden" name="pj_id" value="<?php echo $pj_id ?>">
							<input type="hidden" name="data_inicio" value="<?php echo $data_inicio ?>">
							<input type="hidden" name="data_fim" value="<?php echo $data_fim ?>">
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>