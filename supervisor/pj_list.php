<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<div class="form-group">
			<h5>Clientes Pessoa Jurídica</h5>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="table-responsive list_info">
					<table class='table table-condensed'>
						<thead>
							<tr class='list_menu'>
								<td>Razão Social</td>
								<td>CNPJ</td>
								<td>Telefone</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
						<?php
							$con = bancoMysqli();
							$sql = "SELECT id, nome, cnpj, telefone01 FROM pj ORDER BY nome";
							$query = mysqli_query($con,$sql);
							$num = mysqli_num_rows($query);
							if($num > 0)
							{
								while($campo = mysqli_fetch_array($query))
								{
									echo "<tr>";
									echo "<td class='list_description'>".$campo['nome']."</td>";
									echo "<td class='list_description'>".$campo['cnpj']."</td>";
									echo "<td class='list_description'>".$campo['telefone01']."</td>";
									echo "<td class='list_description'>
											<form method='POST' action='?perfil=pj_edit'>
												<input type='hidden' name='detalhes' value='".$campo['id']."' />
												<button class='btn btn-theme btn-sm btn-block' type ='submit' style='border-radius: 10px;'>Editar</button>
											</form>
										</td>";
									echo "</tr>";
								}
							}
							else
							{
								echo "Não há registros cadastrados";
							}
						?>
						</tbody>
					</table>
				</div>
			</div>	
		</div>

	</div>
</section>