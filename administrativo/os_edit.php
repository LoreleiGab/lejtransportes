<?php
$con = bancoMysqli();

// recupera os dados do cliente
if(isset($_POST['tipo_cliente'])){
    $tipo_cliente = $_POST['tipo_cliente'];
    $cliente_id = $_POST['cliente_id'];
}

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
	$data = exibirDataMysql($_POST['data']);
	$saida = $_POST['saida'];
	$anotacao = $_POST['anotacao'];
	$km_servico = $_POST['km_servico'];
	$km_total = $_POST['km_total'];
}

if(isset($_POST['cadastra']))
{
	$sql_cadastra = "INSERT INTO os (`pessoa`, `cliente`, `condutor`, `solicitante`, `data`, `saida`, `km_servico`, `km_total`, `obs`, `publicado`) VALUES ('$tipo_cliente','$cliente_id','$condutor_id','$solicitante','$data','$saida','$km_servico','$km_total','$anotacao','1')";
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
	$sql_edita = "UPDATE `os` SET `pessoa`='$tipo_cliente',`cliente`='$cliente_id',`condutor`='$condutor_id',`solicitante`='$solicitante',`data`='$data',`saida`='$saida',`km_servico`='$km_servico',`km_total`='$km_total',`obs`='$anotacao' WHERE id = $idOs";
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

if(isset($_POST['idPessoa'])){
    $idOs = $_POST['idPessoa'];
    $tipoPessoa = 1;
}
if(isset($_POST['enviar']))
{
    $sql_arquivos = "SELECT * FROM lista_documento WHERE idTipoUpload = '$tipoPessoa'";
    $query_arquivos = mysqli_query($con,$sql_arquivos);
    while($arq = mysqli_fetch_array($query_arquivos))
    {
        $y = $arq['idListaDocumento'];
        $x = $arq['sigla'];
        $nome_arquivo = isset($_FILES['arquivo']['name'][$x]) ? $_FILES['arquivo']['name'][$x] : null;
        $f_size = isset($_FILES['arquivo']['size'][$x]) ? $_FILES['arquivo']['size'][$x] : null;

        //Extensões permitidas
        $ext = array("PDF","pdf");

        if($f_size > 5242880) // 5MB em bytes
        {
            $mensagem = "<font color='#FF0000'><strong>Erro! Tamanho de arquivo excedido! Tamanho máximo permitido: 05 MB.</strong></font>";
        }
        else
        {
            if($nome_arquivo != "")
            {
                $nome_temporario = $_FILES['arquivo']['tmp_name'][$x];
                $new_name = date("YmdHis")."_".semAcento($nome_arquivo); //Definindo um novo nome para o arquivo
                $hoje = date("Y-m-d H:i:s");
                $dir = '../uploadsdocs/'; //Diretório para uploads
                $allowedExts = array(".pdf", ".PDF"); //Extensões permitidas
                $ext = strtolower(substr($nome_arquivo,-4));

                if(in_array($ext, $allowedExts)) //Pergunta se a extensão do arquivo, está presente no array das extensões permitidas
                {
                    if(move_uploaded_file($nome_temporario, $dir.$new_name))
                    {
                        $sql_insere_arquivo = "INSERT INTO `upload_arquivo` (`idTipo`, `idPessoa`, `idListaDocumento`, `arquivo`, `dataEnvio`, `publicado`) VALUES ('$tipoPessoa', '$idOs', '$y', '$new_name', '$hoje', '1'); ";
                        $query = mysqli_query($con,$sql_insere_arquivo);
                        if($query)
                        {
                            $mensagem = "<font color='#01DF3A'><strong>Arquivo recebido com sucesso!</strong></font>";
                        }
                        else
                        {
                            $mensagem = "<font color='#FF0000'><strong>Erro ao gravar no banco.</strong></font>";
                        }
                    }
                    else
                    {
                        $mensagem = "<font color='#FF0000'><strong>Erro no upload! Tente novamente.</strong></font>";
                    }
                }
                else
                {
                    $mensagem = "<font color='#FF0000'><strong>Erro no upload! Anexar documentos somente no formato PDF.</strong></font>";
                }
            }
        }
    }
}

if(isset($_POST['detalhes']))
{
	$idOs = $_POST['detalhes'];
}

$os = recuperaDados("os","id",$idOs);
if($os['pessoa'] == 1){
    $cliente = recuperaDados("pf","id",$os['cliente']);
    $tipo_cliente = 1;
    $cliente_id = $os['cliente'];
}
else{
    $cliente = recuperaDados("pj","id",$os['cliente']);
    $tipo_cliente = 2;
    $cliente_id = $os['cliente'];
}
?>
<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<div class="form-group">
			<h5>Edição da O.S. <?php if($os['numero_os'] > 0) echo $os['numero_os'] ?></h5>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<h5><?php if(isset($mensagem)){echo $mensagem;};?></h5>
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
							<input type="text" class="form-control" id="datepicker01" name="data" maxlength="20" value = "<?php echo exibirDataBr($os['data']) ?>" required>
						</div>
						<div class="col-md-6"><strong>Saída: *</strong><br/>
							<input type="text" class="form-control" id="hora" name="saida" value = "<?php 
							echo $os['saida'] ?>" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Anotações:</strong><br/>
							<textarea name="anotacao" class="form-control" rows="8" required><?php 
							echo $os['obs'] ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Km serviço:</strong><br/>
								<option value="0">separar metros por "."</option>
							<input type="text" class="form-control" name="km_servico" value = "<?php echo ($os['km_servico']) ?>">
						</div>
						<div class="col-md-6"><strong>Km total:</strong><br/>
							<option value="0">separar metros por "."</option>
							<input type="text" class="form-control" name="km_total" value = "<?php 
								echo $os['km_total'] ?>">
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

				<!-- Gerar Número de O.S. -->
				<?php if($os['numero_os'] == 0) {?>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8"><hr/></div>
                    </div>
					<form class="form-horizontal" role="form" action="?perfil=os_edit" method="post">
						<div class="form-group">
							<div class="col-md-offset-2 col-md-3"><strong>Nº O.S. Atual:</strong><br/>
								<input type="text" class="form-control" readonly value="<?php echo $os['numero_os'] ?>">
							</div>
							<div class="col-md-3"><strong>Sugestão Nº O.S.:</strong><br/>
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
				<?php }?>

				<!-- Gerar O.S. em PDF -->
				<?php if($os['numero_os'] > 0) {?>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><hr/></div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-5 col-md-2">
							<a href='../pdf/os_pdf.php?n_os=<?php echo $os['numero_os'] ?>' target='_blank' class="'btn btn-theme btn-lg btn-block" style='border-radius: 10px;'><strong>Gerar O.S.</strong></a>
						</div>
					</div>

                    <div class="form-group">
                        <div class="col-md-offset-1 col-md-10"><hr/></div>
                    </div>

                    <!-- Upload do Arquivo -->
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <?php uploadArquivo($idOs, 1,"os_edit", 1, 1); ?>
                        </div>
                    </div>
                    <!-- Fim Upload do Arquivo -->
				<?php }?>

			</div>
		</div>
	</div>
</section>
<!--
	API cálculo de rota
	https://www.princiweb.com.br/blog/programacao/google-apis/google-maps-api-v3-criando-rotas-entre-multiplos-pontos.html
-->