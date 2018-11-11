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
$condutor_id = $_POST['condutor_id'];
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];

$servico = servicosCondutor($condutor_id,$data_inicio,$data_fim);
$condutor = recuperaDados("funcionarios","id",$condutor_id);

$adiantamento = adiantamentoCondutor($condutor_id,$data_inicio,$data_fim);

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

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 12);
   $pdf->Cell(160,$l,utf8_decode("RELATÓRIO DE CONDUTOR DO MÊS DE ".strtoupper(retornaMesExtenso($data_inicio))),0,1,'C');

   $pdf->Ln();
   $pdf->Ln();

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(20,$l,utf8_decode("Condutor:"),0,0,'L');
   $pdf->SetFont('Arial','', 11);
   $pdf->Cell(15,$l,utf8_decode($condutor['nome']),0,1,'L');

   $pdf->Ln();
   
   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 12);
   $pdf->Cell(170,$l,utf8_decode("SERVIÇOS"),'B',1,'L');

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(10,$l,utf8_decode("O.S."),0,0,'L');
   $pdf->Cell(120,$l,utf8_decode("Cliente"),0,0,'L');
   $pdf->Cell(20,$l,utf8_decode("Data"),0,0,'L');
   $pdf->Cell(0,$l,utf8_decode("Valor"),0,1,'L');

   for($h = 0; $h < $servico['numero']; $h++)
   {
      $pdf->SetX($x);
      $pdf->SetFont('Arial','', 11);
      $pdf->Cell(10,$l,utf8_decode($servico[$h]['numero_os']),0,0,'L');
      $pdf->Cell(115,$l,utf8_decode($servico[$h]['cliente']),0,0,'L');
      $pdf->Cell(22,$l,utf8_decode($servico[$h]['data']),0,0,'L');
      $pdf->Cell(20,$l,utf8_decode("R$ ".$servico[$h]['valor_condutor']),0,0,'L');

      $pdf->Ln();
   }

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 12);
   $pdf->Cell(140,$l,utf8_decode("TOTAL"),'T',0,'R');
   $pdf->Cell(30,$l,utf8_decode($servico['soma_s']),'T',0,'L');

   $pdf->Ln();
   $pdf->Ln();
   
   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 12);
   $pdf->Cell(170,$l,utf8_decode("ADIANTAMENTOS"),B,1,'L');

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(10,$l,utf8_decode("ID"),0,0,'L');
   $pdf->Cell(120,$l,utf8_decode("Observação"),0,0,'L');
   $pdf->Cell(20,$l,utf8_decode("Data"),0,0,'L');
   $pdf->Cell(0,$l,utf8_decode("Valor"),0,1,'L');
      for($h = 0; $h < $adiantamento['numero']; $h++)
   {
      $pdf->SetX($x);
      $pdf->SetFont('Arial','', 11);
      $pdf->Cell(10,$l,utf8_decode($adiantamento[$h]['id']),0,0,'L');
      $pdf->Cell(115,$l,utf8_decode($adiantamento[$h]['obs']),0,0,'L');
      $pdf->Cell(22,$l,utf8_decode($adiantamento[$h]['data']),0,0,'L');
      $pdf->Cell(0,$l,utf8_decode("R$ ".$adiantamento[$h]['valor']),0,0,'L');

      $pdf->Ln();
   }

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 12);
   $pdf->Cell(145,$l,utf8_decode("TOTAL"),T,0,'R');
   $pdf->Cell(25,$l,utf8_decode($adiantamento['soma_a']),T,0,'L');

   $pdf->Ln();
   $pdf->Ln();
   
   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(17,$l,utf8_decode("Período:"),0,0,'L');
   $pdf->SetFont('Arial','', 11);
   $pdf->Cell(20,$l,utf8_decode("de ".exibirDataBr($data_inicio)." a ".exibirDataBr($data_fim)."."),0,1,'L');

   $total_servico = dinheiroDeBr($servico['soma_s']);
   $total_adiantamento = dinheiroDeBr($adiantamento['soma_a']);
   $total = substr($total_servico, 3) - substr($total_adiantamento, 3);

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(12,$l,utf8_decode("Total:"),0,0,'L');
   $pdf->SetFont('Arial','', 11);
   $pdf->Cell(20,$l,utf8_decode("R$ ".dinheiroParaBr($total).""),0,1,'L');

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(41,$l,utf8_decode("Data do recebimento:"),0,0,'L');
   $pdf->SetFont('Arial','', 11);
   $pdf->Cell(20,$l,utf8_decode("_______ de _______________________ de ".date('Y')."."),0,1,'L');
   
   $pdf->Ln();
   $pdf->Ln();
   $pdf->Ln();
   $pdf->Ln();

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(80,$l,utf8_decode($condutor['nome']),T,1,'L');

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(80,$l,utf8_decode("CPF: ".$condutor['cpf']),0,1,'L');
   

ob_start ();
$pdf->Output(); 
?>   