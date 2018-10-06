<?php
function habilitarErro()
{
	@ini_set('display_errors', '1');
	error_reporting(E_ALL);
}

date_default_timezone_set('America/Sao_Paulo');

//saudacao inicial
function saudacao()
{
	$hora = date('H');
	if(($hora > 12) AND ($hora <= 18))
	{
		return "Boa tarde";
	}
	else if(($hora > 18) AND ($hora <= 23))
	{
		return "Boa noite";
	}
	else if(($hora >= 0) AND ($hora <= 4))
	{
		return "Boa noite";
	}
	else if(($hora > 4) AND ($hora <=12))
	{
		return "Bom dia";
	}
}
// Formatação de datas, valores
// Retira acentos das strings
function semAcento($string)
{
	$newstring = preg_replace("/[^a-zA-Z0-9_.]/", "", strtr($string, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC_"));
	return $newstring;
}
//retorna data d/m/y de mysql/date(a-m-d)
function exibirDataBr($data)
{
	if($data == '0000-00-00' || $data == NULL)
	{
		return NULL;
	}
	else
	{
		$timestamp = strtotime($data);
		return date('d/m/Y', $timestamp);
	}
}
// retorna datatime sem hora
function retornaDataSemHora($data)
{
	$semhora = substr($data, 0, 10);
	return $semhora;
}
//retorna data d/m/y de mysql/datetime(a-m-d H:i:s)
function exibirDataHoraBr($data)
{
	if($data == '0000-00-00 00:00:00')
	{
		return "0000-00-00 00:00:00";
	}
	else
	{
		$timestamp = strtotime($data);
		return date('d/m/y - H:i:s', $timestamp);
	}
}
//retorna hora H:i de um datetime
function exibirHora($data)
{
	$timestamp = strtotime($data);
	return date('H:i', $timestamp);
}
//retorna data mysql/date (a-m-d) de data/br (d/m/a)
function exibirDataMysql($data)
{
    if($data == '00-00-0000' || $data == NULL)
    {
        return NULL;
    }
    else
    {
        list ($dia, $mes, $ano) = explode ('/', $data);
        $data_mysql = $ano.'-'.$mes.'-'.$dia;
        return $data_mysql;
    }

}
//retorna o endereço da página atual
function urlAtual()
{
	$dominio= $_SERVER['HTTP_HOST'];
	$url = "http://" . $dominio. $_SERVER['REQUEST_URI'];
	return $url;
}
//retorna valor xxx,xx para xxx.xx
function dinheiroDeBr($valor)
{
	$valor = str_ireplace(".","",$valor);
	$valor = str_ireplace(",",".",$valor);
	return $valor;
}
//retorna valor xxx.xx para xxx,xx
function dinheiroParaBr($valor)
{
	$valor = number_format($valor, 2, ',', '.');
	return $valor;
}
//use em problemas de codificacao utf-8
function _utf8_decode($string)
{
	$tmp = $string;
	$count = 0;
	while (mb_detect_encoding($tmp)=="UTF-8")
	{
		$tmp = utf8_decode($tmp);
		$count++;
	}
	for ($i = 0; $i < $count-1 ; $i++)
	{
		$string = utf8_decode($string);
	}
	return $string;
}
//retorna o dia da semana segundo um date(a-m-d)
function diasemana($data)
{
	$ano =  substr("$data", 0, 4);
	$mes =  substr("$data", 5, -3);
	$dia =  substr("$data", 8, 9);
	$diasemana = date("w", mktime(0,0,0,$mes,$dia,$ano) );
	switch($diasemana)
	{
		case"0": $diasemana = "Domingo";       break;
		case"1": $diasemana = "Segunda-Feira"; break;
		case"2": $diasemana = "Terça-Feira";   break;
		case"3": $diasemana = "Quarta-Feira";  break;
		case"4": $diasemana = "Quinta-Feira";  break;
		case"5": $diasemana = "Sexta-Feira";   break;
		case"6": $diasemana = "Sábado";        break;
	}
	return "$diasemana";
}

//soma(+) ou substrai(-) dias de um date(a-m-d)
function somarDatas($data,$dias)
{
	$data_final = date('Y-m-d', strtotime("$dias days",strtotime($data)));
	return $data_final;
}

//retorna a diferença de dias entre duas datas
function diferencaDatas($data_inicial,$data_final)
{
	// Define os valores a serem usados
	// Usa a função strtotime() e pega o timestamp das duas datas:
	$time_inicial = strtotime($data_inicial);
	$time_final = strtotime($data_final);
	// Calcula a diferença de segundos entre as duas datas:
	$diferenca = $time_final - $time_inicial; // 19522800 segundos
	// Calcula a diferença de dias
	$dias = (int)floor( $diferenca / (60 * 60 * 24)); // 225 dias
	return $dias;
}

function geraOpcao($tabela,$select)
{
	//gera os options de um select
	$sql = "SELECT * FROM $tabela ORDER BY 2";

	$con = bancoMysqli();
	$query = mysqli_query($con,$sql);
	while($option = mysqli_fetch_row($query))
	{
		if($option[0] == $select)
		{
			echo "<option value='".$option[0]."' selected >".$option[1]."</option>";
		}
		else
		{
			echo "<option value='".$option[0]."'>".$option[1]."</option>";
		}
	}
}

function geraOpcaoPublicado($tabela,$select)
{
	//gera os options de um select
	$sql = "SELECT * FROM $tabela WHERE published = 1 ORDER BY 2";

	$con = bancoMysqli();
	$query = mysqli_query($con,$sql);
	while($option = mysqli_fetch_row($query))
	{
		if($option[0] == $select)
		{
			echo "<option value='".$option[0]."' selected >".$option[1]."</option>";
		}
		else
		{
			echo "<option value='".$option[0]."'>".$option[1]."</option>";
		}
	}
}

function geraCombobox($tabela,$campo,$order,$select)
{
	//gera os options de um select
	$sql = "SELECT * FROM $tabela ORDER BY $order";

	$con = bancoMysqli();
	$query = mysqli_query($con,$sql);
	while($option = mysqli_fetch_row($query))
	{
		if($option[0] == $select)
		{
			echo "<option value='".$option[0]."' selected >".$option[$campo]."</option>";
		}
		else
		{
			echo "<option value='".$option[0]."'>".$option[$campo]."</option>";
		}
	}
}

function recuperaDados($tabela,$campo,$variavelCampo)
{
	//retorna uma array com os dados de qualquer tabela. serve apenas para 1 registro.
	$con = bancoMysqli();
	$sql = "SELECT * FROM $tabela WHERE ".$campo." = '$variavelCampo' LIMIT 0,1";
	$query = mysqli_query($con,$sql);
	$campo = mysqli_fetch_array($query);
	return $campo;
}

function checar($id)
{
	//funcao para imprimir checked do checkbox
	if($id == 1)
	{
		echo "checked";
	}
}

function analisaArray($array)
{
	//imprime o conteúdo de uma array
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}

function recuperaUltimo($tabela)
{
	$con = bancoMysqli();
	$sql = "SELECT * FROM $tabela ORDER BY 1 DESC LIMIT 0,1";
	$query =  mysqli_query($con,$sql);
	$campo = mysqli_fetch_array($query);
	return $campo[0];
}

function retornaMes($mes)
{
	switch($mes)
	{
		case "01":
			return "Janeiro";
		break;
		case "02":
			return "Fevereiro";
		break;
		case "03":
			return "Março";
		break;
		case "04":
			return "Abril";
		break;
		case "05":
			return "Maio";
		break;
		case "06":
			return "Junho";
		break;
		case "07":
			return "Julho";
		break;
		case "08":
			return "Agosto";
		break;
		case "09":
			return "Setembro";
		break;
		case "10":
			return "Outubro";
		break;
		case "11":
			return "Novembro";
		break;
		case "12":
			return "Dezembro";
		break;
	}
}

function retornaMesExtenso($dataMysql)
{
	$meses = array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
	$data = explode("-", $dataMysql);
	$mes = $data[1];
	return $meses[($mes) - 1];
}

//retorna o dia da semana segundo um date(a-m-d)
function diaSemanaBase($data)
{
	$ano =  substr("$data", 0, 4);
	$mes =  substr("$data", 5, -3);
	$dia =  substr("$data", 8, 9);
	$diasemana = date("w", mktime(0,0,0,$mes,$dia,$ano) );
	switch($diasemana)
	{
		case"0":
			$diasemana = "domingo";
		break;
		case"1":
			$diasemana = "segunda";
		break;
		case"2":
			$diasemana = "terca";
		break;
		case"3":
			$diasemana = "quarta";
		break;
		case"4":
			$diasemana = "quinta";
		break;
		case"5":
			$diasemana = "sexta";
		break;
		case"6":
			$diasemana = "sabado";
		break;
	}
	return "$diasemana";
}

// Gera o endereço no PDF
function enderecoCEP($cep)
{
	$con = bancoMysqliCEP();
	$cep_index = substr($cep, 0, 5);
	$dados['sucesso'] = 0;
	$sql01 = "SELECT * FROM igsis_cep_cep_log_index WHERE cep5 = '$cep_index' LIMIT 0,1";
	$query01 = mysqli_query($con,$sql01);
	$campo01 = mysqli_fetch_array($query01);
	$uf = "igsis_cep_".$campo01['uf'];
	$sql02 = "SELECT * FROM $uf WHERE cep = '$cep'";
	$query02 = mysqli_query($con,$sql02);
	$campo02 = mysqli_fetch_array($query02);
	$res = mysqli_num_rows($query02);
	if($res > 0)
	{
		$dados['sucesso'] = 1;
	}
	else
	{
		$dados['sucesso'] = 0;
	}
	$dados['rua']     = $campo02['tp_logradouro']." ".$campo02['logradouro'];
	$dados['bairro']  = $campo02['bairro'];
	$dados['cidade']  = $campo02['cidade'];
	$dados['estado']  = strtoupper($campo01['uf']);
	return $dados;
}

// Função que valida e-mails
function validaEmail($email)
{
	/* Verifica se o email e valido */
	if (filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		/* Obtem o dominio do email */
		list($usuario, $dominio) = explode('@', $email);

		/* Faz um verificacao de DNS no dominio */
		if (checkdnsrr($dominio, 'MX') == 1)
		{
			return TRUE;
		}
		else
		{
		return FALSE;
		}
	}
	else
	{
		return FALSE;
	}
}

function recupera_cliente($tipo_cliente,$cliente_id)
{	
	if($tipo_cliente == 1)
	{
		$pf = recuperaDados("pf","id",$cliente_id);
		$cliente = "<strong>Nome:</strong> ".$pf['nome']."<br/>".
			"<strong>Endereço:</strong> ".$pf['endereco'].", ".$pf['numero']." ".$pf['complemento']." - <strong>Bairro:</strong> ".$pf['bairro']." - <strong>Cidade:</strong> ".$pf['cidade']." - ".$pf['estado']." <strong>CEP:</strong> ".$pf['cep']."<br/>".
			"<strong>Telefone:</strong> ".$pf['telefone01']." | ".$pf['telefone02'];
	}
	else
	{
		$pj = recuperaDados("pj","id",$cliente_id);
		$cliente = "<strong>Nome Fantasia:</strong> ".$pj['nome_fantasia']. " | <strong>Razão Social:</strong> ".$pj['nome']."<br/>".
			"<strong>Endereço:</strong> ".$pj['endereco'].", ".$pj['numero']." ".$pj['complemento']." - <strong>Bairro:</strong> ".$pj['bairro']." - <strong>Cidade:</strong> ".$pj['cidade']." - ".$pj['estado']." <strong>CEP:</strong> ".$pj['cep']."<br/>".
			"<strong>Telefone:</strong> ".$pj['telefone01']." | ".$pj['telefone02'];
	}
	return $cliente;
}


function servicosCondutor($condutor_id,$data_inicio,$data_fim)
{
	$con = bancoMysqli();
	$sql = "SELECT * FROM `os` WHERE `condutor` = '$condutor_id' AND `data` BETWEEN '$data_inicio' AND '$data_fim' AND `publicado` = 1";
	$query = mysqli_query($con,$sql);
	$y = array();
	$i = 0;
	$soma_s = 0;
    while($lista = mysqli_fetch_array($query))
    {
        $x[$i]['id'] = $lista['id'];
        $x[$i]['numero_os'] = $lista['numero_os'];
        if($lista['pessoa'] == 1)
        {
            $pf = recuperaDados("pf","id",$lista['cliente']);
            $x[$i]['cliente'] = $pf['nome'];
        }
        else
        {
            $pj = recuperaDados("pj","id",$lista['cliente']);
            $x[$i]['cliente'] = $pj['nome'];
        }
        $x[$i]['valor_condutor'] = dinheiroParaBr($lista['valor_condutor']);
        $x[$i]['data'] = exibirDataBr($lista['data']);
        $soma_s += $lista['valor_condutor'];
        $i++;
    }
	$x['soma_s'] = "R$ ".dinheiroParaBr($soma_s);
	$x['numero'] = $i;
	return $x;
}

function adiantamentoCondutor($condutor_id,$data_inicio,$data_fim)
{
	$con = bancoMysqli();
	$sql = "SELECT * FROM `adiantamentos` WHERE funcionario = '$condutor_id' AND `data` BETWEEN '$data_inicio' AND '$data_fim'";
	$query = mysqli_query($con,$sql);
	$y = array();
	$i = 0;
	$soma_a = 0;
	while($x = mysqli_fetch_array($query))
	{
		$y[$i]['id'] = $x['id'];
		$y[$i]['valor'] = dinheiroParaBr($x['valor']);
		$y[$i]['data'] = exibirDataBr($x['data']);
		$soma_a += $x['valor'];
		$i++;
	}
	$y['soma_a'] = "R$ ".dinheiroParaBr($soma_a);
	$y['numero'] = $i;
	return $y;
}

function servicosCliente($tipo_pessoa,$cliente_id,$data_inicio,$data_fim)
{
    $con = bancoMysqli();
    $sql = "SELECT * FROM `os` WHERE pessoa = '$tipo_pessoa' AND `cliente` = '$cliente_id' AND `data` BETWEEN '$data_inicio' AND '$data_fim' AND `publicado` = 1";
    $query = mysqli_query($con,$sql);
    $y = array();
    $i = 0;
    $soma_s = 0;
    while($lista = mysqli_fetch_array($query))
    {
        $condutor = recuperaDados("funcionarios","id",$lista['condutor']);
        $x[$i]['id'] = $lista['id'];
        $x[$i]['numero_os'] = $lista['numero_os'];
        $x[$i]['nome_condutor'] = $condutor['nome'];
        if($lista['pessoa'] == 1)
        {
            $pf = recuperaDados("pf","id",$lista['cliente']);
            $x[$i]['cliente'] = $pf['nome'];
        }
        else
        {
            $pj = recuperaDados("pj","id",$lista['cliente']);
            $x[$i]['cliente'] = $pj['nome'];
        }
        $x[$i]['valor_cliente'] = dinheiroParaBr($lista['valor_cliente']);
        $x[$i]['data'] = exibirDataBr($lista['data']);
        $soma_s += $lista['valor_cliente'];
        $i++;
    }
    $x['soma_s'] = "R$ ".dinheiroParaBr($soma_s);
    $x['numero'] = $i;
    return $x;
}

function arquivosExiste($urlArquivo, $extensao = '.php')
{
    $file = $urlArquivo.$extensao;
    $file_headers = @get_headers($file);
    if($file_headers[0] == 'HTTP/1.1 404 Not Found'):
        return false;
    endif;

    return true;
}

function selecionaArquivoAnexo($http, $idListaDocumento, $extensao = '.php')
{
    $path = $http.$idListaDocumento.$extensao;
    return $path;
}

function uploadArquivo($idProjeto, $tipoPessoa, $pagina, $idListaDocumento, $idTipoUpload)
{
    $server = "http://".$_SERVER['SERVER_NAME']."/promac";
    $http = $server."/pdf/";
    $con = bancoMysqli();
    /*
     * Início da listagem de arquivo
     */
    $sql = "SELECT *
			FROM lista_documento as list
			INNER JOIN upload_arquivo as arq ON arq.idListaDocumento = list.idListaDocumento
			WHERE arq.idPessoa = '$idProjeto'
			AND arq.idTipo = '$tipoPessoa'
			AND arq.publicado = '1' AND list.idListaDocumento = '$idListaDocumento'";
    $query = mysqli_query($con,$sql);
    $linhas = mysqli_num_rows($query);
    echo '<div class="table-responsive list_info">
				<h6>Arquivo Anexado</h6>';
    if ($linhas > 0)
    {
        echo "
		<table class='table table-condensed'>
			<thead>
				<tr class='list_menu'>
					<td>Tipo de arquivo</td>
					<td>Nome do arquivo</td>
					<td></td>
				</tr>
			</thead>
			<tbody>";
        while($arquivo = mysqli_fetch_array($query))
        {
            echo "<tr>";
            echo "<td class='list_description'>(".$arquivo['documento'].")</td>";
            echo "<td class='list_description'><a href='../uploadsdocs/".$arquivo['arquivo']."' target='_blank'>". mb_strimwidth($arquivo['arquivo'], 15 ,25,"..." )."</a></td>";
            $dateNow = date('Y-m-d');
            $dataenvio = date_format(date_create($arquivo['dataEnvio']), 'Y-m-d');
            if($dataenvio == $dateNow) {
                echo "
						<td class='list_description'>
							<form id='apagarArq' method='POST' action='?perfil=" . $pagina . "'>
								<input type='hidden' name='idPessoa' value='" . $idProjeto . "' />
								<input type='hidden' name='tipoPessoa' value='" . $tipoPessoa . "' />
								<input type='hidden' name='apagar' value='" . $arquivo['idUploadArquivo'] . "' />
								<input type='submit' class='btn btn-theme btn-md btn-block'  value='apagar' />
							</form>
						</td>";
            }
            echo "</tr>";
        }
        echo "
		</tbody>
		</table>";
    }
    else
    {
        echo "<p>Não há arquivo(s) inserido(s).</p><br/>";
    }
    echo "</div>";
    /*
     * Início da área de upload
     */
    echo '<div class="table-responsive list_info"><h6>Upload de Arquivo (somente em PDF)</h6>';
    $sql_arquivos = "SELECT * FROM lista_documento WHERE idTipoUpload = '$idTipoUpload' AND idListaDocumento = '$idListaDocumento'";
    $query_arquivos = mysqli_query($con,$sql_arquivos);
    while($arq = mysqli_fetch_array($query_arquivos))
    {
        echo "<tr>";
        $doc = $arq['documento'];
        $query = "SELECT idListaDocumento FROM lista_documento WHERE documento='$doc' AND publicado='1' AND idTipoUpload='$idTipoUpload'";
        $envio = $con->query($query);
        $row = $envio->fetch_array(MYSQLI_ASSOC);

        echo '<form method="POST" action="?perfil=' . $pagina . '" enctype="multipart/form-data">
		<table class="table table-condensed">
			<tr class="list_menu">
				<td>Tipo de Arquivo</td>
				<td></td>
			</tr>';
        $urlArquivo = $http . $arq['idListaDocumento'];
        if (arquivosExiste($urlArquivo)) {
            echo '<td class="list_description path">';
            $path = selecionaArquivoAnexo($http, $arq['idListaDocumento']);
            echo "<a href='" . $path . "'target='_blank'>" . $arq['documento'] . "</a>
				</td>";
        } else {
            echo "<td class='list_description path'>" . $arq['documento'] . "</td>";
        }
        echo "<td class='list_description'><input type='file' name='arquivo[" . $arq['sigla'] . "]'></td>";
        echo "</tr>";
        echo "</table><br>";
        echo "<input type='hidden' name='idPessoa' value='" . $idProjeto . "' />";
        echo "<input type='hidden' name='idTipoUpload' value='" . $idTipoUpload . "' />";
        echo "<input type='hidden' name='tipoPessoa' value='" . $tipoPessoa . "'  />";
        echo '<input type="submit" name="enviar" class="btn btn-theme btn-lg btn-block" value="Fazer Upload">
		</form>	';
    }
    echo '</div>';
    /* Fim Upload de arquivo */
}