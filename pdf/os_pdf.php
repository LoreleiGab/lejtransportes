<?php 

// INSTALAÇÃO DA CLASSE NA PASTA FPDF.
require_once("../include/lib/fpdf/fpdf.php");
require_once("../funcoes/funcoesConecta.php");
require_once("../funcoes/funcoesGerais.php");


//CONEXÃO COM BANCO DE DADOS
$conexao = bancoMysqli();

session_start();

class PDF extends FPDF
{
}


//CONSULTA
$numero = $_GET['n_os'];
$os = recuperaDados("os","numero_os",$numero);

if($os['pessoa'] == 1)
{
   $pf = recuperaDados("pf","id",$os['cliente']);
   $cliente = $pf['nome'];
   $endereco = $pf['endereco'].", ".$pf['numero']." ".$pf['complemento']." - ".$pf['bairro']." - ".$pf['cidade']." - ".$pf['estado']." CEP: ".$pf['cep'];
   $telefone = $pf['telefone01']." | ".$pf['telefone02'];
}
else
{
   $pj = recuperaDados("pj","id",$os['cliente']);
   $cliente = $pj['nome_fantasia'];
   $endereco = $pj['endereco'].", ".$pj['numero']." ".$pj['complemento']." - ".$pj['bairro']." - ".$pj['cidade']." - ".$pj['estado']." CEP: ".$pj['cep'];
   $telefone = $pj['telefone01']." | ".$pj['telefone02'];
}

$condutor = recuperaDados("funcionarios","id",$os['condutor']);
$c_nome = $condutor['nome'];
$c_rg = $condutor['rg'];
$c_placa = $condutor['placa'];

// Preencher com endereço da empresa
$end_lej01 = "Rua Diogo da Costa, 30 - Vila Mazzei - Sâo Paulo - SP".$os['condutor'];
$end_lej02 = "Fones: (11) 2338-3668 / (11) 94730-7045";


// GERANDO O PDF:
$pdf = new PDF('P','mm','A4'); //CRIA UM NOVO ARQUIVO PDF NO TAMANHO A4
$pdf->AliasNbPages();
$pdf->AddPage();   
$pdf->SetAutoPageBreak('true','1');

$x=20;
$l=5; //DEFINE A ALTURA DA LINHA
$pdf->SetXY($x,35);// SetXY - DEFINE O X (largura) E O Y (altura) NA PÁGINA

   $pdf->SetX($x);
   $pdf->Image('../visual/images/logo_os.png',15,10);
   $pdf->Ln();

   $pdf->SetXY($x,21);
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(53,4,utf8_decode($end_lej01),0,1,'L');

   $pdf->SetX($x);
   $pdf->Cell(53,4,utf8_decode($end_lej02),0,0,'L');

   $pdf->SetXY(160, 13);
   $pdf->SetFont('Arial','', 16);
   $pdf->Cell(10,$l,utf8_decode('O.S. Nº '.$numero),0,0,'L');

   $pdf->SetXY(160, 20);
   $pdf->SetFont('Arial','', 13);
   $pdf->Cell(53,$l,utf8_decode(exibirDataBr($os['data'])),0,1,'L');

   $pdf->SetX($x);
   $pdf->Cell(170,5,'','B',1,'C');

   $pdf->Ln();
   
   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(160,$l,utf8_decode("DADOS DO CLIENTE"),0,1,'L');
   
   $pdf->SetX($x);
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(68,5,utf8_decode($cliente),0,1,'L');

   $pdf->SetX($x);
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(68,5,utf8_decode($endereco),0,1,'L');

   $pdf->SetX($x);
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(68,5,utf8_decode($telefone),0,1,'L');

   $pdf->Ln();

	// Condutor
   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(180,$l,utf8_decode("DADOS DO CONDUTOR"),0,1,'L');

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 10);
   $pdf->Cell(13,$l,utf8_decode("Nome:"),0,0,'L');
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(90,$l,utf8_decode($c_nome),0,0,'L');
   $pdf->SetFont('Arial','B', 10);
   $pdf->Cell(8,$l,utf8_decode("RG:"),0,0,'L');
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(30,$l,utf8_decode($c_rg),0,0,'L');
   $pdf->SetFont('Arial','B', 10);
   $pdf->Cell(12,$l,utf8_decode("Placa:"),0,0,'L');
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(17,$l,utf8_decode($c_placa),0,1,'L');

   $pdf->Ln();

   $pdf->SetX($x);
   $pdf->SetFont('Arial','', 10);
   $pdf->MultiCell(170,4,utf8_decode($os['obs']));
   
   $pdf->Ln();
   
   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 12);
   $pdf->Cell(14,$l,utf8_decode("Início: "),0,0,'L');
   $pdf->SetFont('Arial','', 12);
   $pdf->Cell(112,$l,utf8_decode(substr($os['saida'],0,5)),0,0,'L');
   $pdf->SetFont('Arial','B', 12);
   $pdf->Cell(20,$l,utf8_decode("Término: ________ "),0,1,'L');
   
   $pdf->Ln();
   $pdf->Ln();
   $pdf->Ln();
       
   $pdf->SetX($x);
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(70,$l,utf8_decode($os['solicitante']),T,0,'');
   
   $c = 148; //calcula o tamanho para iniciar a cópia

   $pdf->SetXY($x, $c-5);
   $pdf->Cell(170,5,'','B',1,'C');  
   
   //----------------------Inicio da cópia----------------------//
      
   $pdf->SetX($x);
   $pdf->Image('../visual/images/logo_os.png',15,10+$c);
   $pdf->Ln();

   $pdf->SetXY($x,21+$c);
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(53,4,utf8_decode($end_lej01),0,1,'L');

   $pdf->SetX($x);
   $pdf->Cell(53,4,utf8_decode($end_lej02),0,0,'L');

   $pdf->SetXY(160, 13+$c);
   $pdf->SetFont('Arial','', 16);
   $pdf->Cell(10,$l,utf8_decode('O.S. Nº '.$numero),0,0,'L');

   $pdf->SetXY(160, 20+$c);
   $pdf->SetFont('Arial','', 13);
   $pdf->Cell(53,$l,utf8_decode(exibirDataBr($os['data'])),0,1,'L');

   $pdf->SetX($x);
   $pdf->Cell(170,5,'','B',1,'C');

   $pdf->Ln();
   
   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(160,$l,utf8_decode("DADOS DO CLIENTE"),0,1,'L');
   
   $pdf->SetX($x);
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(68,5,utf8_decode($cliente),0,1,'L');

   $pdf->SetX($x);
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(68,5,utf8_decode($endereco),0,1,'L');

   $pdf->SetX($x);
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(68,5,utf8_decode($telefone),0,1,'L');

   $pdf->Ln();

   // Condutor
   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(180,$l,utf8_decode("DADOS DO CONDUTOR"),0,1,'L');

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 10);
   $pdf->Cell(13,$l,utf8_decode("Nome:"),0,0,'L');
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(90,$l,utf8_decode($c_nome),0,0,'L');
   $pdf->SetFont('Arial','B', 10);
   $pdf->Cell(8,$l,utf8_decode("RG:"),0,0,'L');
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(30,$l,utf8_decode($c_rg),0,0,'L');
   $pdf->SetFont('Arial','B', 10);
   $pdf->Cell(12,$l,utf8_decode("Placa:"),0,0,'L');
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(17,$l,utf8_decode($c_placa),0,1,'L');

   $pdf->Ln();

   $pdf->SetX($x);
   $pdf->SetFont('Arial','', 10);
   $pdf->MultiCell(170,4,utf8_decode($os['obs']));
   
   $pdf->Ln();
   
   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 12);
   $pdf->Cell(14,$l,utf8_decode("Início: "),0,0,'L');
   $pdf->SetFont('Arial','', 12);
   $pdf->Cell(112,$l,utf8_decode(substr($os['saida'],0,5)),0,0,'L');
   $pdf->SetFont('Arial','B', 12);
   $pdf->Cell(20,$l,utf8_decode("Término: ________ "),0,1,'L');
   
   $pdf->Ln();
   $pdf->Ln();
   $pdf->Ln();
       
   $pdf->SetX($x);
   $pdf->SetFont('Arial','', 10);
   $pdf->Cell(70,$l,utf8_decode($os['solicitante']),T,0,'');

ob_start ();
$pdf->Output(); 
?>   