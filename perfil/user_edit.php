<?php
$con = bancoMysqli();

if(isset($_POST['adicionar']) || isset($_POST['editar']))
{
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$nivel_acesso = $_POST['nivel_acesso'];
	$funcionario_id = $_POST['condutor_id'];
	$data_criacao = date('Y:m:d H:m:s');
}

if(isset($_POST['adicionar']))
{
    $senha = MD5($_POST['senha']);
    $sql_adiciona = "INSERT INTO `usuarios`(`nome`, `telefone`, `email`, `senha`, `data_criacao`, `nivel_acesso`, `funcionario_id`) VALUES ('$nome','$telefone','$email','$senha','$data_criacao','$nivel_acesso','$funcionario_id')";
    if(mysqli_query($con,$sql_adiciona))
    {
        $mensagem = "<span style=\"color: #01DF3A; \"><strong>Cadastrado com sucesso!</strong></span>";
        $idUsuario = recuperaUltimo("usuarios");
    }
    else
    {
        $mensagem = "<span style=\"color: #FF0000; \"><strong>Erro ao cadastrar! Tente novamente.</strong></span>";
    }
}
if(isset($_POST['editar']))
{
    $idUsuario = $_POST['id'];
    $sql_edita = "UPDATE `usuarios` SET `nome`='$nome',`telefone`='$telefone',`email`='$email',`nivel_acesso`='$nivel_acesso',`funcionario_id`='$funcionario_id' WHERE id = ' $idUsuario'";
    if(mysqli_query($con,$sql_edita))
    {
        $mensagem = "<span style=\"color: #01DF3A; \"><strong>Editado com sucesso!</strong></span>";
    }
    else
    {
        $mensagem = "<span style=\"color: #FF0000; \"><strong>Erro ao editar! Tente novamente.</strong></span>.$sql_edita";
    }
}

if(isset($_POST['resetar_senha']))
{
    $senha = MD5($_POST['senha']);
    $idUsuario = $_POST['id'];
    $sql_edita = "UPDATE `usuarios` SET senha = '$senha' WHERE id = ' $idUsuario'";
    if(mysqli_query($con,$sql_edita))
    {
        $mensagem = "<span style=\"color: #01DF3A; \"><strong>Editado com sucesso!</strong></span>";
    }
    else
    {
        $mensagem = "<span style=\"color: #FF0000; \"><strong>Erro ao editar! Tente novamente.</strong></span>.$sql_edita";
    }
}

if(isset($_POST['detalhes']))
{
    $idUsuario = $_POST['detalhes'];
}

if(isset($_POST['id']))
{
    $idUsuario = $_POST['id'];
}

$user = recuperaDados("usuarios","id",$idUsuario);
?>
<section id="list_items" class="home-section bg-white">
	<div class="container"><?php include 'includes/menu.php'; ?>
		<p align="left"><strong><?php echo saudacao(); ?>, <?php echo $_SESSION['nome']; ?>!</strong></p>
		<div class="form-group">
			<h5>Cadastro de Usuários</h5>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<h5><?php if(isset($mensagem)){echo $mensagem;};?></h5>
				<form class="form-horizontal" role="form" action="?perfil=user_edit" method="post">

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8"><strong>Nome: *</strong><br/>
							<input type="text" class="form-control" name="nome" placeholder="Nome completo" maxlength="120" required value="<?= $user['nome'] ?>">
						</div>
					</div>

					<div class="form-group">
                        <div class="col-md-offset-2 col-md-6"><strong>Telefone: *</strong><br/>
                            <input type="text" class="form-control" name="telefone" id="telefone" onkeyup="mascara( this, mtel );" maxlength="15" placeholder="Exemplo: (11) 98765-4321" required  value="<?= $user['telefone'] ?>">
                        </div>

						<div class="col-md-6"><strong>E-mail: *</strong><br/>
							<input type="text" class="form-control" name="email" placeholder="E-mail" maxlength="60" required  value="<?= $user['email'] ?>">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-6"><strong>Nivel de Aesso: *</strong><br/>
                            <select class="form-control" name="nivel_acesso">
                                <?php
                                if($user['nivel_acesso'] == 1)
                                {
                                    echo "<option value=\"1\">Administrador</option>";
                                    echo "<option value=\"2\">Condutor</option>";
                                }
                                else
                                {
                                    echo "<option value=\"2\">Condutor</option>";
                                    echo "<option value=\"1\">Administrador</option>";
                                }
                                ?>
                            </select>
						</div>
						<div class="col-md-6"><strong>Condutor relacionado:</strong><br/>
                            <select class="form-control" name="condutor_id">
                                <option value="">Selecione...</option>
                                <?php echo geraOpcao("funcionarios",$user['funcionario_id']) ?>
                            </select>
						</div>
					</div>

					<!-- Botão para Gravar -->
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
                            <input type="hidden" value="<?= $user['id'] ?>" name="id">
							<input type="submit" value="GRAVAR" name="editar" class="btn btn-theme btn-lg btn-block">
						</div>
					</div>
				</form>

                <div class="form-group"><hr/></div>

                <form class="form-horizontal" role="form" action="?perfil=user_edit" method="post">
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-6"><strong>Senha: *</strong><br/>
                            <input type="password" class="form-control" name="senha" required>
                        </div>
                    </div>

                    <!-- Botão para Gravar -->
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <input type="hidden" value="<?= $user['id'] ?>" name="id">
                            <input type="submit" value="GRAVAR" name="resetar_senha" class="btn btn-theme btn-lg btn-block">
                        </div>
                    </div>
                </form>
			</div>				
		</div>
	</div>
</section>