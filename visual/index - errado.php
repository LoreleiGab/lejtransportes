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

$i=0

switch ($i) 
{

case 0: 
echo "i=1" ($_SESSION['nivel'] == 1)
	{
	// carrega o perfil
	(isset($_GET['perfil']))
		{
		include "../perfil/".$_GET['perfil'].".php";
		}
	else
		{
		include "../perfil/index.php";
		}
	}
break;
case 1: 
	echo "i=2"  ($_SESSION['nivel'] == 2)
	{
	(isset($_GET['funcionario']))
	{
		include "../condutor/".$_GET['funcionario'].".php";
		}
	else
		{
		include "../condutor/index.php";
		}
	}
break;
}
 //carrega o rodapé
include "rodape.php";
?>