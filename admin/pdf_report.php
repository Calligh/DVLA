<?php
    ini_set( 'error_reporting', E_ALL);
    ini_set( 'display_errors', true );
include '../controllers/autoload.php';
$path = $handlebar . '/public'. '/vendors/fpdf'. '/fpdf.php';
$font = $handlebar . '/public/' . '/vendors/fpdf'. '/font';
define('FPDF_FONTPATH',"../public/vendors/fpdf/font");
require "../public/vendors/fpdf/fpdf.php";
//$_date = $_GET['report_date'];
//$hook = new Lessons();
//
//$getuser_hook = $hook->getUserByDate($mysqli,$_date);
//$gethook_count = $getuser_hook->num_rows;
//if($gethook_count > 0){
//
//}
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
?>