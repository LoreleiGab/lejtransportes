<?php
//Imprime erros com o banco
@ini_set('display_errors', '1');
error_reporting(E_ALL);

//define a session como 60 min
session_cache_expire(60);


//carrega as funcoes gerais
require "../funcoes/funcoesConecta.php";
require "../funcoes/funcoesGerais.php";

//carrega o cabeçalho
require "cabecalho.php";


$nivel = $_SESSION['nivel'];
switch($nivel)
{
	// carrega o perfil
	case 1: if(isset($_GET['perfil']) == 1)
	{
		include "../perfil/".$_GET['perfil'].".php";
	}
	else
	{
		include "../perfil/index.php";
	}
break;

	case 2: if(isset($_GET['funcionario']) == 2)
	{
		include "../condutor/".$_GET['funcionario'].".php";
	}
	else
	{
		include "../condutor/index.php";
	}
break;
	case 3: if(isset($_GET['cliente']) == 3)
	{
		include "../cliente/".$_GET['cliente'].".php";
	}
	else
	{
		include "../cliente/index.php";
	}
break;

	case 4: if(isset($_GET['perfil']) == 4)
	{
		include "../administrativo/".$_GET['perfil'].".php";
	}
	else
	{
		include "../administrativo/index.php";
	}
break;

	case 5: if(isset($_GET['supervisor']) == 5)
	{
		include "../supervisor/".$_GET['supervisor'].".php";
	}
	else
	{
		include "../supervisor/index.php";
	}
break;
}
 //carrega o rodapé
include "rodape.php";
?>