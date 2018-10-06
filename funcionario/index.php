<section id="list_items" class="home-section bg-white">
	<div class="container">
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<div class="form-group">
			<h5>L&J Transportes</h5>
            <p align="justify">L&J Transportes atua no ramo de transporte há 1 (um) ano com experiência de 5 anos no mercado de trabalho, fundada pelo Lucas Carloto onde trabalhou com diversas formas de entrega após estudo e análise do mercado no segmento de transportes rápidos, a L&J foi desenvolvida com intuito de servir seus clientes, constatamos que a segurança, agilidade e qualidade são os nossos principais fatores, tornando-se exigências primordiais.</p>
            <p align="justify">Baseando-se nestes princípios a empresa L&J TRANSPORTES foi criada, para proporcionar aos nossos clientes o que é fundamental no ramo. SEGURANÇA, AGILIDADE E QUALIDADE.</p>
		</div>
        <div class="well">
            <label><h6>Pesquisar Serviços</h6></label>
            <form method="POST" action="?funcionario=condutor_pesquisa_resultado" class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-6"><label>De</label>
                        <input type="text" name="data_inicio" id="datepicker01" class="form-control" required>
                    </div>
                    <div class="col-md-6"><label>Até</label>
                        <input type="text" name="data_fim" id="datepicker02" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-8">
                        <input type="submit" name="porcondutor" class="btn btn-theme btn-lg btn-block" value="Pesquisar">
                    </div>
                </div>
            </form>
        </div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
			</div>	
		</div>

	</div>
</section>