<?php 

// INSTALAÇÃO DA CLASSE NA PASTA FPDF.
require_once("../include/lib/fpdf/fpdf.php");
require_once("../funcoes/funcoesConecta.php");
require_once("../funcoes/funcoesGerais.php");


//CONEXÃO COM BANCO DE DADOS
$con = bancoMysqli();
session_start();

class PDF extends FPDF
{
}

//CONSULTA
$pf_id = $_POST['pf_id'];
$pj_id = $_POST['pj_id'];
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];

if($pf_id > 0)
{
    $tipo_pessoa = 1;
    $cliente_id = $pf_id;
    $pf = recuperaDados("pf","id",$cliente_id);
    $nome_cliente = $pf['nome'];
}
else
{
    $tipo_pessoa = 2;
    $cliente_id = $pj_id;
    $pj = recuperaDados("pj","id",$cliente_id);
    $nome_cliente = $pj['nome'];
}

$servico = servicosCliente($tipo_pessoa,$cliente_id,$data_inicio,$data_fim);


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

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 12);
   $pdf->Cell(160,$l,utf8_decode("RELATÓRIO DE SERVIÇOS DO MÊS DE ".strtoupper(retornaMesExtenso($data_inicio))),0,1,'C');

   $pdf->Ln();
   $pdf->Ln();

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(16,$l,utf8_decode("Cliente:"),0,0,'L');
   $pdf->SetFont('Arial','', 11);
   $pdf->Cell(15,$l,utf8_decode($nome_cliente),0,1,'L');

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(17,$l,utf8_decode("Período:"),0,0,'L');
   $pdf->SetFont('Arial','', 11);
   $pdf->Cell(20,$l,utf8_decode("de ".exibirDataBr($data_inicio)." a ".exibirDataBr($data_fim)."."),0,1,'L');

   $pdf->Ln();

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 12);
   $pdf->Cell(170,$l,utf8_decode("SERVIÇOS"),'B',1,'L');

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(15,$l,utf8_decode("O.S."),0,0,'L');
   $pdf->Cell(110,$l,utf8_decode("Condutor"),0,0,'L');
   $pdf->Cell(25,$l,utf8_decode("Valor"),0,0,'L');
   $pdf->Cell(20,$l,utf8_decode("Data"),0,1,'L');

   for($h = 0; $h < $servico['numero']; $h++)
   {
      $pdf->SetX($x);
      $pdf->SetFont('Arial','', 10);
      $pdf->Cell(15,$l,utf8_decode($servico[$h]['numero_os']),0,0,'L');
      $pdf->Cell(110,$l,utf8_decode($servico[$h]['nome_condutor']),0,0,'L');
      $pdf->Cell(20,$l,utf8_decode("R$ ".$servico[$h]['valor_cliente']),0,0,'L');
      $pdf->Cell(25,$l,utf8_decode($servico[$h]['data']),0,0,'L');
      $pdf->Ln();
   }

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 12);
   $pdf->Cell(150,$l,utf8_decode("TOTAL"),'T',0,'R');
   $pdf->Cell(20,$l,utf8_decode($servico['soma_s']),'T',1,'L');

   $pdf->Ln();
   $pdf->Ln();
   $pdf->Ln();
   $pdf->Ln();
   $pdf->Ln();
   $pdf->Ln();

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(35,$l,utf8_decode(""),0,0,'C');
   $pdf->Cell(100,$l,utf8_decode(""),T,1,'C');

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(170,$l,utf8_decode("IVAMAR RAMALHO"),0,1,'C');

   $pdf->SetX($x);
   $pdf->Cell(170,$l,utf8_decode("Chefe Financeiro"),0,1,'C');
   

ob_start ();
$pdf->Output(); 
?>   