<?PHP
include "../core/reclamationC.php";

if (isset($_POST["idreclam"])){
    $reclam=new reclamtionC();
    $idReclam=$_POST["idreclam"];
	$reclam->recupererReclamation($idReclam);
    
}
ob_start();
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',30);
$pdf->cell(180,10,'Reclamation',0,0,'C');
$pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(300,10,"innovators",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"1,2 rue Andre Ampere -2083- pole Technologique - El Ghazala",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"26259085",0,0,'C');
$pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',20);
$pdf->cell(50,10,'Reclamation :',0,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(20,10,'client',1,0,'C');
$pdf->cell(25,10,'objet',1,0,'C');
$pdf->cell(30,10,'contenu',1,0,'C');
$pdf->cell(35,10,'etat',1,0,'C');
$pdf->Ln(); 

foreach ($reclam as $row) {
  
    

	$pdf->cell(20,10,'test',1,0,'C');
	$pdf->cell(25,10,$row['objet'],1,0,'C');
	$pdf->cell(30,10,$row['contenu'],1,0,'C');
    if($row['etat'] == 1)
    {
	$pdf->cell(35,10,'Traitée',1,0,'C');
    }
    else{
	$pdf->cell(35,10,'Non traitée',1,0,'C');
    }}
	

$pdf->Output();
ob_end_flush();

	//header('Location: checkout_reclamation.php');


?>
