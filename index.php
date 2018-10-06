<?php

include "funcoes/funcoesGerais.php";
require "funcoes/funcoesConecta.php";

if(isset($_POST['login']))
{
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM usuarios AS usr
	WHERE usr.email = '$login' LIMIT 0,1";
    $con = bancoMysqli();
    $query = mysqli_query($con,$sql);
    //query que seleciona os campos que voltarão para na matriz
    if($query)
    {
        //verifica erro no banco de dados
        if(mysqli_num_rows($query) > 0)
        {
            // verifica se retorna usuário válido
            $user = mysqli_fetch_array($query);
            if($user['senha'] == md5($_POST['senha']))
            {
                // compara as senhas
                session_start();
                $_SESSION['login'] = $user['email'];
                $_SESSION['nome'] = $user['nome'];
                $_SESSION['idUser'] = $user['id'];
                header("Location: visual/index.php");
            }
            else
            {
                $mensagem = "<font color='#FF0000'><strong>A senha está incorreta!</strong></font>";

            }
        }
        else
        {
            $mensagem = "<font color='#FF0000'><strong>O usuário não existe.</strong></font>";
        }
    }
    else
    {
        $mensagem = "<font color='#FF0000'><strong>Erro no banco de dados!</strong></font>";
    }
}

if(isset($_POST['login_adm']))
{
	$login = $_POST['login_adm'];
	$senha = $_POST['senha'];
	autenticaloginadministrador($login,$senha);
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>L&J Transportes</title>
		<link href="visual/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="visual/css/style.css" rel="stylesheet" media="screen">
		<link href="visual/color/default.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="visual/css/font-awesome.min.css">
		<link rel="icon" type="image/png" sizes="16x16" href="visual/images/favicon.png">
		<script src="visual/js/modernizr.custom.js"></script>
		<script src="visual/js/jquery-1.9.1.js"></script>
		<script src="visual/js/jquery-ui.js"></script>
	</head>
	<body>
		<div id="bar">
			<p id="p-bar"><img src="visual/images/logo.png" />&nbsp</p>
		</div>
		<p>&nbsp;</p>

		<section id="contact" class="home-section bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<h3>L&J Transportes</h3>

						<hr/>

						<h5><?php if(isset($_POST['login'])){ echo $mensagem; } ?></h5>

						<form method="POST" action="index.php" class="form-horizontal" role="form">
							<div class="form-group">
								<div class="col-md-offset-4 col-md-4">
									<label>E-mail</label>
									<input type="text" name="login" class="form-control" maxlength="120">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-offset-4 col-md-4">
									<label>Senha</label>
									<input type="password" name="senha" class="form-control" placeholder="Senha" maxlength="60">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-offset-4 col-md-4">
									<button class='btn btn-theme btn-md btn-block' type='submit' style="border-radius: 30px;">Entrar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<footer>
				<div class="container">
					<table width="100%">
						<tr>
							<td align="center"><span style="color: #ccc; ">2018 @ Desenvolvido por <a href="http://flinformatica.com.br" target="_blank">FL Informática</a></span></td>
						</tr>
					</table>
				</div>
			<script src="visual/js/bootstrap.min.js"></script>
			<div class="container">
				<div class="col-md-12">
				<?php
					/*
                    echo "<strong>SESSION</strong><pre>", var_dump($_SESSION), "</pre>";
					echo "<strong>POST</strong><pre>", var_dump($_POST), "</pre>";
					echo "<strong>GET</strong><pre>", var_dump($_GET), "</pre>";
					echo "<strong>FILES</strong><pre>", var_dump($_FILES), "</pre>";
					echo ini_get('session.gc_maxlifetime')/60; // em minutos
					*/
				?>
				</div>
			</div>
			</footer>
		</section>
	</body>
</html>