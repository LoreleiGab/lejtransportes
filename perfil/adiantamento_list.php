<?php
$con = bancoMysqli();
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
$sql_lista = "SELECT adiantamentos.id, nome, valor, data 
			FROM adiantamentos 
			INNER JOIN funcionarios ON funcionarios.id = adiantamentos.funcionario
			ORDER BY data DESC";
$query_lista = mysqli_query($con, $sql_lista);

//conta o total de itens
$total = mysqli_num_rows($query_lista);

//seta a quantidade de itens por página
$registros = 50;

//calcula o número de páginas arredondando o resultado para cima
$numPaginas = ceil($total/$registros);

//variavel para calcular o início da visualização com base na página atual
$inicio = ($registros*$pagina)-$registros;

//seleciona os itens por página
$sql_lista = "SELECT adiantamentos.id, nome, valor, data 
			FROM adiantamentos 
			INNER JOIN funcionarios ON funcionarios.id = adiantamentos.funcionario
			ORDER BY data DESC limit $inicio,$registros ";
$query_lista = mysqli_query($con,$sql_lista);

//conta o total de itens
$total = mysqli_num_rows($query_lista);

$i = 0;
while($resultado = mysqli_fetch_array($query_lista))
{
	$x[$i]['id']= $resultado['id'];
	$x[$i]['nome']=$resultado['nome'];
	$x[$i]['valor']= dinheiroParaBr($resultado['valor']);
	$x[$i]['data']= exibirDataBr($resultado['data']);
	$i++;
}
$x['num'] = $i;

if($i <= '1')
{
	$mensagem = "Nesta página contém ".$x['num']." resultado.<br/>";
}
else
{
	$mensagem = "Nesta página contém ".$x['num']." resultados.";
}
?>
<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<!-- Lista 1 -->
		<div class="form-group">
			<h5>Adiantamentos</h5>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="table-responsive list_info">
					<table class='table table-condensed'>
						<thead>
							<tr class='list_menu'>
								<td>Condutor</td>
								<td>Valor</td>
								<td>Data</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
						<?php
							for($h = 0; $h < $x['num']; $h++)
							{
								echo "<tr>";
								echo '<td class="list_description">'.$x[$h]['nome'].'</td>';
								echo '<td class="list_description">'.$x[$h]['valor'].'</td>';
								echo '<td class="list_description">'.$x[$h]['data'].'</td>';
								echo "<td class='list_description'>
										<form method='POST' action='?perfil=adiantamento_edit'>
											<input type='hidden' name='detalhes' value='".$x[$h]['id']."' />
											<button class='btn btn-theme btn-sm btn-block' type ='submit' style='border-radius: 10px;'>Editar</button>
										</form>
									</td>";
								echo "</tr>";
							}
						?>
							<tr>
								<td colspan="10" bgcolor="#DEDEDE">
								<?php
									//exibe a paginação
									echo "<strong>Páginas</strong>";
									for($i = 1; $i < $numPaginas + 1; $i++)
									{
										echo "<a href='?perfil=adiantamento_list&pagina=$i'> [".$i."]</a> ";
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