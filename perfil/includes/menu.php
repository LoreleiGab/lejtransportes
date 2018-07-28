<?php
$pasta = "?perfil=";
?>
<div class="menu-area">
	<div id="dl-menu" class="dl-menuwrapper">
		<button class="dl-trigger">Open Menu</button>
		<ul class="dl-menu">
			<li><a href="<?php echo $pasta ?>smc_index">Home</a></li>
			<li><a href="#">Clientes</a>
				<ul class="dl-submenu">
					<li><a href="<?php echo $pasta ?>pf_add">Cadastra PF</a></li>
					<li><a href="<?php echo $pasta ?>pj_add">Cadastra PJ</a></li>
					<li><a href="<?php echo $pasta ?>pf_lista">Lista PF</a></li>
					<li><a href="<?php echo $pasta ?>pj_lista">Lista PJ</a></li>
				</ul>
			</li>
			<li><a href="#">Condutor</a>
				<ul class="dl-submenu">
					<li><a href="<?php echo $pasta ?>condutor_add">Cadastra Condutor</a></li>
					<li><a href="<?php echo $pasta ?>condutor_lista">Lista</a></li>
					<li><a href="<?php echo $pasta ?>adiantamento_add">Cadastra Adiantamento</a></li>
					<li><a href="<?php echo $pasta ?>adiantamento_lista">Lista Adiantamento</a></li>
				</ul>
			</li>			
			<li><a href="#">O.S.</a>
				<ul class="dl-submenu">
					<li><a href="<?php echo $pasta ?>os_add">Cadastra O.S.</a></li>
					<li><a href="<?php echo $pasta ?>os_aberta">O.S. Abertas</a></li>
					<li><a href="<?php echo $pasta ?>os_fechada">O.S. Fechadas</a></li>
					<li><a href="<?php echo $pasta ?>os_cancelada">O.S. Canceladas</a></li>
				</ul>
			</li>
			<li><a href="#">Relatórios</a>
				<ul class="dl-submenu">
					<li><a href="../pdf/excel_pf.php">Por Condutor</a></li>
					<li><a href="../pdf/excel_pj.php">Por Cliente</a></li>
				</ul>
			</li>
			<li style="color:white;">-------------------------</li>
			<li><a href="index.php?secao=perfil">Início</a></li>
			<li><a href="<?php echo $pasta ?>senha">Alterar senha</a></li>
			<li><a href="../include/logoff.php">Sair</a></li>
		</ul>
	</div>
</div>
