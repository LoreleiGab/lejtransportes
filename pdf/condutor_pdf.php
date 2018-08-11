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

$servico = condutor($condutor_id,$data_inicio,$data_fim);
$condutor = recuperaDados("funcionarios","id",$condutor_id);

$sql_adiantamentos = "SELECT * FROM `adiantamentos` WHERE funcionario = '$condutor_id' AND `data` BETWEEN '$data_inicio' AND '$data_fim'";
$query_adiantamentos = mysqli_query($con,$sql_adiantamentos);
$num_adiantamentos = mysqli_num_rows($query_adiantamentos);
if($num_adiantamentos > 0)
{
   $i = 0;
   $soma_a = 0;
   while($adt = mysqli_fetch_array($query_adiantamentos))
   {
      $x[$i]['id'] = $adt['id'];
      $x[$i]['valor'] = dinheiroParaBr($adt['valor']);
      $x[$i]['data'] = exibirDataBr($adt['data']);
      $soma_a += $adt['valor'];  
      $i++;
   }
   $x['numA'] = $i;
}
else
{
   $soma_a = 0;
   $x['numA'] = 0;
}


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
   $pdf->Ln();

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(15,$l,utf8_decode("O.S."),0,0,'L');
   $pdf->Cell(110,$l,utf8_decode("Cliente"),0,0,'L');
   $pdf->Cell(25,$l,utf8_decode("Valor"),0,0,'L');
   $pdf->Cell(20,$l,utf8_decode("Data"),0,1,'L');

   for($h = 0; $h < $servico['numero']; $h++)
   {
      $pdf->SetX($x);
      $pdf->SetFont('Arial','', 11);
      $pdf->Cell(15,$l,utf8_decode($servico[$h]['numero_os']),0,0,'L');
      $pdf->Cell(110,$l,utf8_decode($servico[$h]['cliente']),0,0,'L');
      $pdf->Cell(25,$l,utf8_decode("R$ ".$servico[$h]['valor_condutor']),0,0,'L');
      $pdf->Cell(20,$l,utf8_decode($servico[$h]['data']),0,0,'L');

      $pdf->Ln();
   }

   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(125,$l,utf8_decode("TOTAL"),0,0,'R');
   $pdf->Cell(25,$l,utf8_decode($servico['soma_s']),0,0,'L');

   $pdf->MultiCell(170,$l,utf8_decode($soma_s));

   $pdf->Ln();
   
   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(160,$l,utf8_decode("DADOS DO CLIENTE"),0,1,'L');
   
   $pdf->Ln();

	// Condutor
   $pdf->SetX($x);
   $pdf->SetFont('Arial','B', 11);
   $pdf->Cell(180,$l,utf8_decode("DADOS DO CONDUTOR"),0,1,'L');

   $pdf->Ln();

   
   $c = 148; //calcula o tamanho para iniciar a cópia

   $pdf->SetXY($x, $c-5);
   $pdf->Cell(170,5,'','B',1,'C');  
   
   

ob_start ();
$pdf->Output(); 
?>   