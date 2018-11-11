<div class="menu-area">
	<div id="dl-menu" class="dl-menuwrapper">
		<button class="dl-trigger">Open Menu</button>
		<ul class="dl-menu">
		<!--	<li><a href="<?php echo $pasta ?>index">Home</a></li> !-->
			<li><a href="#">Clientes</a>
				<ul class="dl-submenu">
					<li><a href="?perfil=pf_add">Cadastra PF</a></li>
					<li><a href="?perfil=pj_add">Cadastra PJ</a></li>
					<li><a href="?perfil=pf_list">Lista PF</a></li>
					<li><a href="?perfil=pj_list">Lista PJ</a></li>
				</ul>
			</li>
			<li><a href="#">Condutor</a>
				<ul class="dl-submenu">
					<li><a href="?perfil=condutor_add">Cadastra Condutor</a></li>
					<li><a href="?perfil=condutor_list">Lista</a></li>
					<li><a href="?perfil=adiantamento_add">Cadastra Adiantamento</a></li>
					<li><a href="?perfil=adiantamento_list">Lista Adiantamento</a></li>
				</ul>
			</li>
			<li><a href="#">O.S.</a>
				<ul class="dl-submenu">
					<li><a href="?perfil=os_add_cliente">Cadastra</a></li>
					<li><a href="?perfil=os_pesquisa">Pesquisa</a></li>
				</ul>
			</li>
			<li><a href="#">Relatórios</a>
				<ul class="dl-submenu">
					<li><a href="?perfil=condutor_pesquisa">Por Condutor</a></li>
					<li><a href="?perfil=cliente_pesquisa">Por Cliente</a></li>
				</ul>
			</li>
           <li style="color:white;">-------------------------</li>
			<li><a href="index.php?secao=perfil">Início</a></li>
			<li><a href="<?php echo $pasta ?>senha">Alterar senha</a></li>
			<li><a href="../include/logoff.php">Sair</a></li>
		</ul>
	</div>
</div>
