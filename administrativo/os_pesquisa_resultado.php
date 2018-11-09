<?php
$con = bancoMysqli();

//verifica a página atual caso seja informada na URL, senão atribui como 1ª página
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;


if(isset($_POST['condutor_id']))
{
	$_SESSION['condutor_id'] = $_POST['condutor_id'];
}

if(isset($_POST['data_inicio']))
{
	$_SESSION['data_inicio'] = $_POST['data_inicio'];
}

if(isset($_POST['data_fim']))
{
	$_SESSION['data_fim'] = $_POST['data_fim'];
}

if(isset($_POST['status_id']))
{
	$_SESSION['status_id'] = $_POST['status_id'];
}

$condutor_id = $_SESSION['condutor_id'];
$data_inicio = $_SESSION['data_inicio'];
$data_fim = $_SESSION['data_fim'];
$status_id = $_SESSION['status_id'];

if($condutor_id != 0)
{
	$filtro_condutor = "AND condutor = '$condutor_id'";
}
else
{
	$filtro_condutor = "";
}

if($data_inicio != "" && $data_fim != "")
{
	$filtro_data = "AND `data` BETWEEN '$data_inicio' AND '$data_fim'";
}
else
{
	$filtro_data = "";
}


if($status_id == "2")//Fechada
{
	$filtro_status = "AND publicado = '1' AND numero_os != '0'";
}
elseif($status_id == "1")//Aberta
{
	$filtro_status = "AND publicado = '1' AND numero_os = '0'";
}
else //Cancelada
{
	$filtro_status = "AND publicado = '$status_id'";
}

$sql_lista = "SELECT * FROM `os` WHERE id > 0 $filtro_condutor $filtro_data $filtro_status";
$query_lista = mysqli_query($con,$sql_lista);

//conta o total de itens
$total = mysqli_num_rows($query_lista);

//seta a quantidade de itens por página
$registros = 20;

//calcula o número de páginas arredondando o resultado para cima
$numPaginas = ceil($total/$registros);

//variavel para calcular o início da visualização com base na página atual
$inicio = ($registros*$pagina)-$registros;

//seleciona os itens por página
$sql_lista = "SELECT * FROM `os` WHERE id > 0 $filtro_condutor $filtro_data $filtro_status ORDER BY id DESC LIMIT $inicio,$registros";
$query_lista = mysqli_query($con,$sql_lista);

//conta o total de itens
$total = mysqli_num_rows($query_lista);
?>
<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<div class="form-group">
			<h4>Resultado da Pesquisa de O.S.</h4>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="table-responsive list_info">
					<table class='table table-condensed'>
						<thead>
							<tr class='list_menu'>
								<td>O.S.</td>
								<td>Cliente</td>
								<td>Valor condutor</td>
								<td>Data</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							<?php
							while($os = mysqli_fetch_array($query_lista))
							{
								if($os['pessoa'] == 1)
								{
									$pf = recuperaDados("pf","id",$os['cliente']);
									$cliente = $pf['nome'];
									$cliente_id = $pf['id'];
								}
								else
								{
									$pj = recuperaDados("pj","id",$os['cliente']);
									$cliente = $pj['nome'];
									$cliente_id = $pj['id'];
								}
								echo "<tr>";
								echo "<td class='list_description'>".$os['numero_os']."</td>";
								echo "<td class='list_description'>".$cliente."</td>";
								echo "<td class='list_description'>".dinheiroParaBr($os['valor_condutor'])."</td>";
								echo "<td class='list_description'>".exibirDataBr($os['data'])."</td>";
								echo "<td class='list_description'>
										<form method='POST' action='?perfil=os_edit'>
											<input type='hidden' name='tipo_cliente' value='".$os['pessoa']."' />
											<input type='hidden' name='cliente_id' value='".$cliente_id."' />
											<input type='hidden' name='detalhes' value='".$os['id']."' />
											<button class='btn btn-theme btn-sm btn-block' type ='submit' style='border-radius: 10px;'>Editar</button>
										</form>
									</td>";
								echo "</tr>";
							}
							?>
							<tr>
							<td colspan="5" bgcolor="#DEDEDE">
							<?php
								//exibe a paginação
								echo "<strong>Páginas</strong>";
								for($i = 1; $i < $numPaginas + 1; $i++)
								{
									echo "<a href='?perfil=os_pesquisa_resultado&pagina=$i'> [".$i."]</a> ";
								}
							?>
							</td>
						</tr>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</section>